<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{

		public function getOne($id)
		{
			 
			$posts = Post::find($id);
			return $posts;
			return view('post.show', ['posts' => $posts]);
		}

		public function index()
		{
			$posts = Post::all();
    		return view('post.show', ['posts' => $posts]);
		}	
        
	}
?>
