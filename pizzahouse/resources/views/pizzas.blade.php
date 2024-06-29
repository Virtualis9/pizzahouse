@extends('layouts.layout')

@section('content')
<div class="PizzaListHeader">
    Pizza List
</div>
<div class="container">
    @foreach($pizzas as $pizza)
    <div class="pizzalist">
        {{ $pizza['type'] }} - {{ $pizza['base'] }}
    </div>
    @endforeach


</div>
@endsection