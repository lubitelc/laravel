<?php
	namespace App\Http\Controllers;
	use App\Models\messages;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class MessageController extends Controller
	{
		public function index()
		{
			$message = new Message();
			$message->name = $request->name;
			$message->message = $request->text;
			$message->save();
		}
		$messages = Message::orderBy('created_at', 'desc')->get();
        return view('message.index', ['title'=> 'Гостевая книга','message' => $messages]);
	}
?>
