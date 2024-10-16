<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/profile', [UserController::class, 'show'])->name('profile.show');
Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);

Route::get('/', function () {
    return view('home'); // Mengarahkan ke halaman login
});

Auth::routes();
