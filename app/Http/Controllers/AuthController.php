<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('username', $request->username)->orwhere('email', $request->username)->first();

        if (!$user || !$user->is_active) {
            throw ValidationException::withMessages([
                'username' => 'Invalid username or password',
            ]);
        }

        //if password not contains letter and number validate it
        if (!preg_match('/[A-Za-z]/',$request->password) || !preg_match('/[0-9]/',$request->password)) {
            throw ValidationException::withMessages([
                'password' => 'Password setidaknya berisi huruf dan angka',
            ]);
        }

        $permissions = $user->getAllPermission()->pluck('type')->unique()->contains('web');

        if (!$permissions) {
            throw ValidationException::withMessages([
                'username' => 'Akses tidak diizinkan',
            ]);
        }

        $request->authenticate('web');

        $request->session()->regenerate();

        return redirect()->intended('/');

    }
    public function destroy()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('home');

    }
}
