<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/registerPage', function () {
    return view('registerPage');
});

Route::get('/usermanage', function () {
    return view('userManage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/users/{username?}', function ($username) {
    echo "User profile for username: $username";
});

Route::get('/user/{id}', function ($id) {
    echo "User profile for ID: $id";
})->where('id', '[0-9]+');

Route::get('/post/{slug}', function ($slug) {
    echo "Post with slug: $slug";
})->where('slug', '[a-zA-Z0-9\-]+');

Route::get('/user/posts/posts/category/{id}', function ($id) {
    echo "Posts in category with ID: $id";
})->where('id', '[0-9]+')->name('category');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});