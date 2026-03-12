<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
	    
    {{-- <p><input style="{{ $name }}"></p> --}}
    @if ($age >18)
     <p>вам больше 18</p>
    @elseif($age == 18)
     <p>вам ровно 18</p>
    @else
     <p>вам меньше 18</p>
    @endif
    @unless ($age<18)
     <p>вы совершеннолетний</p>
    @endunless
    @if (count($arr)>=1)
    <p>Сумма элементов массива:{{ $arr[0] + $arr[1] + $arr[2] }}</p>
    @else
    <p>В массиве нет элементов</p>
    @endif
    <ul>
	@foreach ($arr as $elem)
		<li>{{ $elem*$elem*$elem }}</li>
	@endforeach
    </ul>
    @foreach ($arr as $key => $elem)
	<p>{{ $key + 1 }} {{ $elem }}</p>
    @endforeach
    <ul>
	@foreach ($arr as $elem)
		@if ($elem > 0)
			<li>{{ $elem }}</li>
		@endif
	@endforeach
    </ul>
	@if (count($data)>=1)
		<li>{{ $data }}</li>
    @elseif($data>=1)
       <p>{{ $data }}</p>
	@endif

</x-layout>