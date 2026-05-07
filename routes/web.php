<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/user', [UserController::class, 'show']);
Route::get('/post', [PostController::class, 'show']);
Route::get('/post/new', [PostController::class, 'newPost']);
Route::get('/post/save', [PostController::class, 'save']);
Route::match(['get', 'post'], 'post/edit/{id}', 'PostController@editPost');
Route::get('/post/all', [PostController::class, 'getAll']);
Route::get('/post/del/{id}', [PostController::class, 'delPost']);
Route::get('/post/{id}/', [PostController::class, 'getOne'])->where('id','[0-9]+');
Route::get('/post/deleted', [PostController::class, 'getDeletedPost']);



