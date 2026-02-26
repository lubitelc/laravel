<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;

Route::get('/blade/{text}',[BladeController::class, 'show']);