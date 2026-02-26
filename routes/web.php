<?php

use Illuminate\Support\Facades\Route;


Route::get('/blade/{text}',[BladeController::class, 'show']);