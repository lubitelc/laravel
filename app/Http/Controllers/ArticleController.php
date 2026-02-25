<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

	Route::get('/user', [ArticleController::class, 'show']);


$users = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];


class ArticleController extends Controller
{
    public function show()
	{
		return 'user';
	}
}
