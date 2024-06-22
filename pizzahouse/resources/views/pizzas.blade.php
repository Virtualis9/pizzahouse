@extends('layouts.layout')

@section('content')
<div>
    Pizza List
</div>
<div>
    @foreach($pizzas as $pizza)
    <div>
        {{ $pizza['type'] }} - {{ $pizza['base'] }}
    </div>
    @endforeach


</div>
@endsection