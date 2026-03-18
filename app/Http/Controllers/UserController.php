<?php
	namespace App\Http\Controllers;

	class UserController extends Controller
	{
		public function show()
 		{
			$employees = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
	];

		
		return view('user.show',[
			'title' => 'page title',
			'name'  => 'https://github.com/',
			'age'  => '19',
			'salary'  => '1234',
			'arr'=>[3,5,8],
			'data'=>[2,3,4],
			'employees'=>$employees
		]);
		
		}
	}
?>
