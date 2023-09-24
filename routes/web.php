<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');\
    $data = [
        "nome" => "paolo",
        "cognome" => "flore",
        "eta" => "24"
    ];

    $lista = [
        "cosa1" => "cosa1",
        "cosa2" => "cosa2",
        "cosa3" => "cosa3"
    ];//qui metto il nome del file da mostrare 
    // return'<h1>Hello world</h1>';
    return view('homepage' , $data , $lista) ;
    // return view('ciao');
});
