<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication routes
Route::controller(AuthController::class)->group(function () {
    Route::get('user-signup', 'index')->name('sign-up');
    Route::get('user-login', 'login')->name('login');
    Route::post('signup-verification', 'signupverifcation')->name('user-signup');
});
