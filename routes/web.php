<?php

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
    return view('home');
});

Route::get('/contacto', function() {
   return "el peje es puto";
});

Route::get('saludos/{nombre?}', function($nombre = "Invitado"){

    $consolas = array(
        'PS4', "Xbox One", "Wii U"
    );

    return view('saludo', compact('nombre', 'consolas'));
})->where('nombre', "[A-Za-z]+");