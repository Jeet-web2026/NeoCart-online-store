<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication routes
