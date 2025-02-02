<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ordermanagementController;
use Illuminate\Support\Facades\Route;

// home routes
Route::get('/', [homeController::class, 'index'])->name('login');

Route::middleware(['auth:web'])->group(function () {
    Route::controller(ordermanagementController::class)->group(function () {
        Route::get('/order-summary', 'orderSummery')->name('order-summery');
    });
});



// authentication routes
Route::controller(loginController::class)->group(function () {
    // wishlist
    Route::post('user-register', 'wishlistRegister')->name('wishlist-register');
    Route::post('user-login', 'wishlistLogin')->name('wishlist-login');
    Route::post('user-logout', 'wishlistlogout')->name('wishlist-logout');
});
