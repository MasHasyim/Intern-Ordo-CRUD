<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubCategoryController;

Route::name('backend.')->prefix('backend')->group(function() {

    Route::post('login',[AuthController::class, 'login'])->name('login');

    Route::middleware('auth')->group(function() {
        Route::get('/dashboard', function () {
            return view('pages.super-admin.dashboard.dashboard');
        })->name('dashboard');

        // Route::prefix('datamaster')->name('datamaster.')->group(function() {
        //     Route::resource('sub-categories', SubCategoryController::class);
        // });
    });
});
