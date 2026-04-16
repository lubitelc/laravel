<x-layout>
	@foreach ($post as $post)
		<li>{{ $post->$title }}</li>
	@endforeach
</x-layout>
