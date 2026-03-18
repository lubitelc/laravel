<?php
	namespace App\Http\Controllers;
    use Illuminate\Support\Collection;

	class ColController extends Controller
	{
		public function show()
 		{
            $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
            return strtoupper($name);
            })->reject(function ($name) {
                return empty($name);
            });
			$collection = collect([1, 2, 3]);	
		}
	}
?>
