<?php
	namespace App\Http\Controllers;

	class UserController extends Controller
	{
		public function show()
 		{
		
		return view('user.show',[
			'title' => 'page title',
			'name'  => 'https://github.com/',
			'age'  => '19',
			'salary'  => '1234',
			'arr'=>[3,5,8],
			'data'=>[2,3,4],
		]);
		
		}
	}
?>
