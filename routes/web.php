<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('guest');
});

Route::get('/home', function () {
    return view('user-home');
});

Route::get('/log-in', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('signup');
});

Route::get('/log-in-admin', function () {
    return view('admin-login');
});

Route::get('/home-admin', function () {
    return view('admin-home');
});

Route::get('/profile-page', function () {
    return view('prof-page');
});

Route::get('/community-page', function () {
    return view('comm-page');
});

// Authentication routes (Auth::routes() already includes these)
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resourceful route for posts
Route::resource('/posts', PostController::class);

