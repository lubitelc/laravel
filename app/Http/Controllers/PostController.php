<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function show()
		{
            $users=DB::table('users')
            ->skip(4)
			->take(10)
			->where('age', '>', 30)
		    ->get();


            
            dump($users);
        }
	}
?>
