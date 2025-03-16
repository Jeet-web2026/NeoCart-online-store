<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function () {
    Route::get('user-signup', 'index')->name('user-signup');
    Route::get('user-login', 'login')->name('user-login');
    Route::post('signup-verification', 'signupVerification')->name('user-signup-verification');
    Route::post('login-verification', 'loginVerification')->name('user-login-verification');
    Route::post('user-logout', 'logout')->name('user-logout');
    Route::get('vendor-login', 'VendorLogin')->name('vendor-login');
    Route::post('vendor-login-verify', 'VendorCheck')->name('vendor-login-verify');
    Route::get('google-login', 'googleLogin')->name('google-login');
    Route::get('admin-dashboard', 'checkGoogleauth')->name('google-check');
});


Route::middleware(['auth:vendor'])->controller(VendorController::class)->group(function () {
    Route::get('dashboard', 'VendorDashboard')->name('vendor-dashboard');
    Route::post('add-products', 'AddVendorProducts')->name('add-products');
    Route::get('fetch-products', 'FetchVendorProducts')->name('fetch-products');
});

Route::fallback(function () {
    return redirect()->route('home');
});
