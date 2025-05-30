<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubCategoryController;

Route::name('backend.')->prefix('backend')->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'destroy'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('pages.super-admin.dashboard.dashboard');
        })->name('dashboard');

        Route::prefix('datamaster')->name('datamaster.')->group(function () {

            Route::resource('sub-categories', SubCategoryController::class);
            Route::resource('roles', RoleController::class);

            Route::post('roles/{role}/change-status', [RoleController::class, 'changeStatus'])->name('roles.change-status');
        });
    });
});
