<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('layouts/nav');
});

Route::get('/home', function () {
    return view('layouts/navuser');
});

// Authentication routes (Auth::routes() already includes these)
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resourceful route for posts
Route::resource('/posts', PostController::class);

