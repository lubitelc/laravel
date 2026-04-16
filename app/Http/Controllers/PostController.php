<?php
	namespace App\Http\Controllers;
	use App\Post;
	use App\Models\posts;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function getAll()
		{
			$post = Post::all();
    		return view('post.index', ['posts' => $post]);
		}	
        
	}
?>
