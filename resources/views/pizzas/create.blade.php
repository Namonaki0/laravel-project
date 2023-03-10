@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="Simple">Simple</option>
            <option value="Vegetarian">Vegetarian</option>
            <option value="Meat">Meat</option>
            <option value="Spicy">Spicy</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="Thin">Thin</option>
            <option value="Normal">Normal</option>
            <option value="Cheese">Cheese</option>
            <option value="Thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="onions">Onions<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="order pizza">
    </form>
</div>
@endsection