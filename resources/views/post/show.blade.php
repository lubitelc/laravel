<x-layout>
	@foreach ($users as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				{{ $post->text }}
			</div>
		</div>
	@endforeach
</x-layout>
