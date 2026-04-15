<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function show()
		{
            $users=DB::table('cities')->insert([
		[
				'city' => 'Moscow',
				'user' => 'Vova',
			],
			[		
				'city' => 'Omsk',
				'user'  => 'Max',
			],
			[					
				'city' => 'Novosibirsk',
				'user'  => 'Serega',
			],
			[
				'city' => 'Ufa',
				'user'  => 'Lesha',
			],
			[
				'city' => 'Saint-Petersburg',
				'user'  => 'Vlad',
			],
			[
				'city' => 'Samara',
				'user'  => 'Kirill',
			],
	]);

        }
	}
?>
