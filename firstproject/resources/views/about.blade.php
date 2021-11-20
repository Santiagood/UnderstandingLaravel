{{-- @switch($name)
    @case("john")
        <h2>name is john</h2>
        @break
    @case("rainier")
        <h2>name is rainier</h2>
        @break
    @case("santiago")
        <h2>name is santiago</h2>
    @default

@endswitch --}}

{{--
    for loop
    foreach loop
    for else loop
    while loop
     --}}

{{-- @for ($i = 0; $i <= 10; $i++)
    <h2>
        The number is {{$i}}
    </h2>
@endfor --}}

{{-- @foreach ($names as $name)
    <h2>
        name is {{$name}}
    </h2>
@endforeach --}}

{{-- @forelse ($names as $name)
    <h2>
        the name is {{ $name }}
    </h2>
@empty
    <h2>
        there are no names
    </h2>
@endforelse --}}

{{-- {{ $i = 0 }}
@while ($i < 10)
    <h2>{{$i}}</h2>
    {{$i++}}
@endwhile --}}
