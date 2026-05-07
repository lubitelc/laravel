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
		<td><a href="/post/edit/{{ $post->id }}">Редактировать</a></td>
		<td><a href="/post/del/{{ $post->id }}">Удалить</a></td>
	</tr>
	@endforeach
	</table>
	</div>
</x-layout>
