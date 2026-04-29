<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function editPost(Request $request, $id)
		{
			$post = Post::find($id); // получаем запись по id
			return view('test.editPost', ['post' => $post]);

		}

		public function save()
		{
			$posts = Post::find(1);
			$posts->title = 'Новый заголовок записи с id 1';
			$posts->desc = 'Новая запись с id 1';
			$posts->save();

		}
		public function newPost()
		{
			return view('post.new');
		}
		public function store(Request $request)
		{
			$posts = new Post;
    		$posts->title = $request->title;
			$posts->desc = $request->desc;
			$posts->text = $request->text;
    		$posts->save();
		}
		public function getAll()
		{
			$posts = Post::all();
    		return view('post.show', ['posts' => $posts]);
		}
		public function show()
		{
			$posts = Post::where('id', 1)->first();
			return $posts;
			return view('post.show', ['posts' => $posts]);
		}
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
