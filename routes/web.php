<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\UserController;


Route::get('/user', [UserController::class, 'show']);
Route::get('/blade/{text}',[BladeController::class, 'show']);
Route::get('/user/{text}',[UserController::class, 'show']);
Route::get('/user/{name}', [UserController::class, 'show']);
Route::get('/user/{surname}/{name}', [UserController::class, 'show']);