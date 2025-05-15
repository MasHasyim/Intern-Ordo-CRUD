<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubCategoryController;

Route::name('backend.')->prefix('backend')->group(function() {
    Route::middleware('auth')->group(function() {
        Route::prefix('datamaster')->name('datamaster.')->group(function() {
            Route::resource('sub-categories', SubCategoryController::class);
        });
    });
});
