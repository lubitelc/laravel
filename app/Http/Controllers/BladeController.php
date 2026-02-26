<!DOCTYPE html>
<html>
    <head>
        <title>my view</title>
    </head>
    <body>
        my view
    </body>
</html>

<?php
    namespace App\Http\Controllers;

	class PostController extends Controller
	{
		public function show()
		{
			return view('test');
		}
	}
?>
