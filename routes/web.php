<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication routes
Route::controller(AuthController::class)->group(function () {
    Route::get('user-signup', 'index')->name('user-signup');
    Route::get('user-login', 'login')->name('user-login');
    Route::post('signup-verification', 'signupVerification')->name('user-signup-verification');
    Route::post('login-verification', 'loginVerification')->name('user-login-verification');
    Route::post('user-logout', 'logout')->name('user-logout');

    Route::get('google-login', 'googleLogin')->name('google-login');
    Route::get('admin-dashboard', 'checkGoogleauth')->name('google-check');
});

Route::controller(VendorController::class)->group(function () {
    Route::get('dashboard', 'index')->name('vendor-dashboard');
});

Route::fallback(function(){
    return redirect()->route('home');
});
