<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'Hawaiian', 'base' => 'Cheesy Crust'],
        ['type' => 'Volcano', 'base' => 'Garlic crust'],
        ['type' => 'Veg supreme', 'base' => 'Thin & Crispy']
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});
