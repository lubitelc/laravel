<x-layout>
	<div>		
	@foreach ($posts as $post)
	<div>{{ $post }}</div>
	@endforeach
	</div>
</x-layout>
