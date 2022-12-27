<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = [
            ['type' => 'vegetarian', 'name' => 'herbal delight', 'price' => 15],
            ['type' => 'meat', 'name' => 'mighty meaty', 'price' => 21],
            ['type' => 'meat', 'name' => 'meat feast', 'price' => 23],
        ];

        return view('new', [
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}