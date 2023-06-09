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
    $name = "Gabriele";
    $surname = "Petralia";
    return view("home", compact("name","surname"));
});

Route::get('/about', function () {
    $age = 19;
    return view("about", compact("age"));
});
