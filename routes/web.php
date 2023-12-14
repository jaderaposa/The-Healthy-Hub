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
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return redirect('/log-in');
});

Route::get('/home-page', [PostController::class, 'index'])->middleware('auth');

Route::get('/log-in', function () {
    return view('login');
})->middleware('guest');

Route::get('/sign-up', function () {
    return view('signup');
})->middleware('guest');

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


//Routes for POST method
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', function () {
    Auth::logout();

    return redirect('/log-in');
})->name('logout');

//route for post in create post
Route::post('/createpost', [PostController::class, 'postCreatePost'])->name('post.create');

//route for delete post
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');






// Resourceful route for posts
Route::resource('posts', PostController::class);

// //Resourceful route for users
// Route::resource('users', UserController::class);

// //resource route for home
// Route::resource('home', HomeController::class);

// //resource route for department
// Route::resource('department', DepartmentController::class);

// // resource routes for comment
// Route::resource('comment', CommentController::class);

// //resource route for category
// Route::resource('category', CategoryController::class);

// //resource route for notification
// Route::resource('notification', NotificationController::class);

// //resource route for search
// Route::resource('search', SearchController::class);

// //resource route for vote
// Route::resource('vote', VoteController::class);

        //eloquent relationships tutorial/students
// Route::get('/students', [StudentController::class,'index'])->name('students');
// Route::get('/students/store', [StudentController::class,'store'])->name('store');
// Route::get('/students/store/profile', [StudentController::class,'store_profile'])->name('storeProfile');

// //eloquent relationships tutorial/comment
// Route::get('/students/store/comment', [StudentController::class,'store_comment'])->name('storeComment');

// //eloquent relationships tutorial/subject
// Route::get('/subjects/store', [StudentController::class,'store_subject'])->name('storeSubject');
// Route::get('/students/store/subject', [StudentController::class,'store_student_subject'])->name('storeStudentSubject');
// Route::get('/students/detach/subject', [StudentController::class,'detach_student_subject'])->name('detachStudentSubject');
// Route::get('/students/sync/subject', [StudentController::class,'sync_student_subject'])->name('syncStudentSubject');
// Route::get('/students/toggle/subject', [StudentController::class,'toggle_student_subject'])->name('toggleStudentSubject');







