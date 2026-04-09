<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function show()
		{
            $users=DB::table('users')
            ->inRandomOrder()
            /**
            *->orderBy('salary')
            *->orderBy('age', 'desc')возрастание
            *->orderBy('age', 'asc')убывание
            *->oldest()возрастание
            *->latest()убывание
            *->where('age', '>', 30)
            *->oldest()
            */
		    ->get();


            
            dump($users);
        }
	}
?>
