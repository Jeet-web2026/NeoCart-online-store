<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

// home routes
Route::get('/', [homeController::class, 'index'])->name('login');
