<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function show()
		{
            $users=DB::table('posts')->insert([
			[
				'title' => 'title1',
				'desc' => 'desc1',
				'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis et dolore asperiores optio alias nisi dolorem ipsum vitae voluptates quaerat. Et sit corporis explicabo, ex ipsa officiis fuga minus commodi.',
				'date' => '2025-04-12',
			],
			[
				'title' => 'title2',
				'desc' => 'desc2',
				'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis et dolore asperiores optio alias nisi dolorem ipsum vitae voluptates quaerat. Et sit corporis explicabo, ex ipsa officiis fuga minus commodi.',
				'date' => '2026-05-20',
			],
			[
				'title' => 'title3',
				'desc' => 'desc3',
				'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis et dolore asperiores optio alias nisi dolorem ipsum vitae voluptates quaerat. Et sit corporis explicabo, ex ipsa officiis fuga minus commodi.',
				'date' => '2024-01-01',
			],
			[
				'title' => 'title4',
				'desc' => 'desc4',
				'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis et dolore asperiores optio alias nisi dolorem ipsum vitae voluptates quaerat. Et sit corporis explicabo, ex ipsa officiis fuga minus commodi.',
				'date' => '2020-12-30',
			],
			[
				'title' => 'title5',
				'desc' => 'desc5',
				'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis et dolore asperiores optio alias nisi dolorem ipsum vitae voluptates quaerat. Et sit corporis explicabo, ex ipsa officiis fuga minus commodi.',
				'date' => '2026-06-07',
			],
	]);

        }
	}
?>
