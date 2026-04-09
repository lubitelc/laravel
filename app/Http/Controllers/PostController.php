<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function show()
		{
            $users=DB::table('users')
            ->where('email', '=', 'vlad@mail.com')
            ->orWhere('id', '>', 4)
            ->get();

            
            dump($users);
        }
	}
?>
