<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Route es facade, es una clase estatica que me permite usar la peticion por get
| Esto es una funcion anonimas
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    echo 'Saludar';
});
