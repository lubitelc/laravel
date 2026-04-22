<x-layout>
	<div>
		<table>
	@foreach ($posts as $post)
	<tr>
		<td>{{ $post->id }}</td>
		<td>{{ $post->title }}</td>
		<td>{{ $post->desc }}</td>
		<td>{{ $post->text }}</td>
		<td>{{ $post->date }}</td>
	</tr>
	@endforeach
	</table>
	</div>
</x-layout>
