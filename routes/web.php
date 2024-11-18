<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostUserController;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);


Route::get('/', [PostUserController::class, 'index'])->name('user.index');

// Route to show the form to create a new post (create)
Route::get('/create', [PostUserController::class, 'create'])->name('user.create');

// Route to store a new post (store)
Route::post('/', [PostUserController::class, 'store'])->name('user.store');