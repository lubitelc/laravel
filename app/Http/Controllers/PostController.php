<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{

		public function getOne()
		{
			 
			$posts = Post::find(1);
			return view('post.show', ['posts' => $posts]);
		}

		public function index()
		{
			$posts = Post::all();
    		return view('post.show', ['posts' => $posts]);
		}	
        
	}
?>
