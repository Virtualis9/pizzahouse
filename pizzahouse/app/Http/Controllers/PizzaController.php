<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = [
            ['type' => 'Hawaiian', 'base' => 'Cheesy Crust'],
            ['type' => 'Volcano', 'base' => 'Garlic crust'],
            ['type' => 'Veg supreme', 'base' => 'Thin & Crispy']
        ];


        return view('pizzas', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
