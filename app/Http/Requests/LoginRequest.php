<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required','string'],
            'password' => ['required','string'],
            'remember_me' => ['nullable','boolean']
        ];
    }

    public function authenticate($guardName) 
    {
        $this->ensureIsNotRateLimited();

        $credentials = $this->only('password');
        $loginField = $this->input('username');

        $fieldType = filter_var($loginField, FILTER_VALIDATE_EMAIL) ? 'email':'username';
        $credentials[$fieldType] = $loginField;

        $remember = $this->filled('remember_me');

        if (!Auth::guard($guardName)->attempt($credentials,$remember)){
            RateLimiter::hit($this->throttlekey());

            throw ValidationException::withMessages([
                'username' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttlekey());
    }

    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttlekey(),5)) {
            return;
        }

        event(new Lockout($this));
        $seconds = RateLimiter::availableIn($this->throttlekey());

        throw ValidationException::withMessages([
            'username'=> trans('auth.throttle',[
                'second' => $seconds,
                'minutes'=> ceil($seconds / 60),
            ]),
        ]);   
    }

    public function throttlekey()
    {
        return Str::transliterate(Str::lower($this->input('username')) . '|' . $this->ip());
    }
}
