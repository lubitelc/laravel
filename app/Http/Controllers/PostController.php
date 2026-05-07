<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function delPost()
		{
			$posts = Post::find(1);
			$posts->delete();
    		return view('post.show', ['posts' => $posts]);
		}
		public function getDeletedPost()
		{
			$posts=Post::onlyTrashed()->get();
		}
		public function editPost(Request $request, $id)
		{
			$post = Post::find($id);
			
			if ($request->has('submit')) {
				$post->title = $request->title;
				$post->desc  = $request->desc;
				$post->date  = $request->date;
				$post->text  = $request->text;
				
				$post->save();
			}
			
			
			return view('post.new', ['post' => $post]);

		}

		public function getAll()
		{
			$posts = Post::all();
    		return view('post.show', ['posts' => $posts]);
		}
        
	}
?>
