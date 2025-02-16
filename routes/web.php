<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication routes
Route::controller(AuthController::class)->group(function () {
    Route::get('user-signup', 'index')->name('user-signup');
    Route::get('user-login', 'login')->name('user-login');
    Route::post('signup-verification', 'signupVerification')->name('user-signup-verification');
    Route::post('login-verification', 'loginVerification')->name('user-login-verification');
});
