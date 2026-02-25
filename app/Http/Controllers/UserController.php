<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\Route;

	Route::get('/user', [UserController::class, 'show']);
	Route::get('/user/{name}', [UserController::class, 'show']);
	Route::get('/user/{surname}/{name}', [UserController::class, 'show']);

	class UserController extends Controller
	{
			public function show()
		{
			return 'user';
		}
		

	}


?>
