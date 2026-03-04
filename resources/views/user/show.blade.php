<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
	
    <p>{{ $name }}</p>
    <p>{{ $age }}</p>
    <p>{{ $salary }}</p>
    <a href="{{ $name }}">{{ $name }}</a>
    <p>{{ $name }}</p>
	<p><input class="{{ $name }}"></p>
    <p><input value="{{ $age }}"></p>
    <p><input value="{{ $salary }}"></p>
    <p><input style="{{ $name }}"></p>

    current timestamp: {{ time() }}
</x-layout>
