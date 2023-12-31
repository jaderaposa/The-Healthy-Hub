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
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LikePostController;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;





Route::get('/', function () {
    return redirect('/log-in');
});

Route::get('/home-page', function () {
    // Check if the authenticated user is an admin
    if (Auth::user()->is_admin) {
        // If they are, redirect them to the admin home page
        return redirect('/admin-home');
    }

    // If they're not an admin, continue to the home page
    $postController = app()->make(App\Http\Controllers\PostController::class);
    return $postController->index();
})->middleware('auth');

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
    // Check if the authenticated user is an admin
    if (!Auth::user()->is_admin) {
        // If they're not, redirect them to the user home page
        return redirect('/user-home');
    }

    $posts = Post::all(); // Fetch all posts
    $users = User::all(); // Fetch all users
    return view('admin-home', compact('posts', 'users')); // Pass posts and users to the view
})->middleware('auth')->name('admin-home');

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

//admin login route
Route::post('/admin-login', [UserController::class, 'adminLogin'])->name('admin.login');

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', function () {
    Auth::logout();

    return redirect('/log-in');
})->name('logout');

//route for post in create post
Route::post('/createpost', [PostController::class, 'postCreatePost'])->name('post.create');

//route for likepost
Route::post('/posts/{post}/likepost', [LikePostController::class, 'store']);
Route::delete('/posts/{post}/likepost', [LikePostController::class, 'destroy']);

//route for delete post
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

//route for delete post
Route::put('/updatepost',
    [PostController::class, 'update']
)->name('post.update');

//route for comments
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

    //route for likes
    Route::post('comments/{comment}/likes', [LikeController::class, 'store'])->name('likes.store');
    Route::delete('comments/{comment}/likes/{like}', [LikeController::class, 'destroy'])->name('likes.destroy');

    //route for edit
    Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');

    //route for delete
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

//admin rights
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');


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







