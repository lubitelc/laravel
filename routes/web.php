<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/user', [UserController::class, 'show']);
Route::get('/post', [PostController::class, 'show']);
Route::get('/post/all', [PostController::class, 'show']);