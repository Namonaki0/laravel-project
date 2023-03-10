@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Pizza ordered by {{ $pizza->name }}</h1>
    <p>type: {{ $pizza->type }}</p>
    <p>base: {{ $pizza->base }}</p>
    <p class="toppings">extra toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
        <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas" class="back">
    <-- back to pizzas</a>
        @endsection