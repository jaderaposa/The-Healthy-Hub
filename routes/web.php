<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\StudentController;



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

Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::get('/admin-home', function () {
    return view('admin-home');
});

Route::get('/profile-page', function () {
    return view('prof-page');
});

Route::get('/community-page', function () {
    return view('comm-page');
});

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});

// Authentication routes (Auth::routes() already includes these)
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resourceful route for posts
Route::resource('posts', PostController::class);

//Resourceful route for users
Route::resource('users', UserController::class);

//resource route for home
Route::resource('home', HomeController::class);

//resource route for department
Route::resource('department', DepartmentController::class);

// resource routes for comment
Route::resource('comment', CommentController::class);

//resource route for category
Route::resource('category', CategoryController::class);

//resource route for notification
Route::resource('notification', NotificationController::class);

//resource route for search
Route::resource('search', SearchController::class);

//resource route for vote
Route::resource('vote', VoteController::class);

//eloquent relationships tutorial
Route::get('/students', [StudentController::class,'index'])->name('students');
Route::get('/students/store', [StudentController::class,'store'])->name('store');
Route::get('/students/store/profile', [StudentController::class,'store_profile'])->name('storeProfile');


