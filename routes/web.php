<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    $pizzas = [
        ['type' => 'vegetarian', 'name' => 'herbal delight', 'price' => 15],
        ['type' => 'meat', 'name' => 'mighty meaty', 'price' => 21],
        ['type' => 'meat', 'name' => 'meat feast', 'price' => 23],
    ];
    return view('new', ['pizzas' => $pizzas]);
});