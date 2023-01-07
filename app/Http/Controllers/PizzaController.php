<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();  // order - asc or desc
        // $pizzas = Pizza::where('type', 'spicy')->get();  // based on a certain condition
        $pizzas = Pizza::latest()->get();  // order of latest record

        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));
        return redirect('/');
    }
}