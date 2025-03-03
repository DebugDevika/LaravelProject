<h1>This is admin login view page</h1>
<h2>{{ $name }}</h2>
<h2>{{rand()}}</h2>
<h2>{{$array[0]}}</h2>

@if($name == 'Devika')
    <h2>Yes, I am Devika</h2>
@elseif($name == 'Rushabh')
    <h2>Yes, I am Rushabh</h2>
@else
    <h2>Yes, I am someone else</h2>
@endif


<div>
    @foreach($array as $value)
        <h3>
            The current value is {{ $value }}
        </h3><br>
    @endforeach
</div>

<div>
    @for ($i = 0; $i < 10; $i++)
        <h3>The current value is {{ $i }}</h3><br>
    @endfor
</div>
