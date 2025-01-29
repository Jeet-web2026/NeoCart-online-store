<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ordermanagementController;
use Illuminate\Support\Facades\Route;

// home routes
Route::get('/', [homeController::class, 'index']);

// ordering management routes
Route::controller(ordermanagementController::class)->group(function () {
    Route::get('order-summery', 'orderSummery')->name('order-summery');
});

// authentication routes
Route::controller(loginController::class)->group(function(){
    // wishlist
    Route::post('user-register', 'wishlistRegister')->name('wishlist-register');

});
