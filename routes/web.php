<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home Page Route
Route::view('/', 'home')->name('home');

// Dashboard Route (No authentication required)
Route::view('dashboard', 'dashboard')->name('dashboard');  // Corrected to show the dashboard view

// Profile Route (Requires authentication)
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Product Routes (CRUD)
Route::resource('products', ProductController::class);

// Include Authentication Routes
require __DIR__.'/auth.php';
