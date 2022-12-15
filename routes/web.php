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
    $userName = "Benny";
    return view('home', compact("userName"));
});

Route::get('/menu', function () {
    $menuString = 'Cotoletta alla milanese, torta';
    return view('menu', compact('menuString'));
})->name('menu');

Route::get('/clienti', function () {
    $customersString = 'Donato, Fabrizio, Fabio';
    return view('clienti', compact('customersString'));
})->name('clienti');