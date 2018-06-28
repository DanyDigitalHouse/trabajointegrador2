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
    echo 'Cualquier cosa';
    echo '<br><br>';
    echo 'Hola estoy escribiendo dentro de ejemplo de laravel';
});


Route::get('/miPrimerRuta', function () {
    echo 'Creé mi primer ruta en Laravel';
});

Route::get('/resultado/{numero}', function ($input) {

    if ($input%2==0){
        return "El numero ingresado  $input  es par";
    }else{
        return "El numero ingresado  $input  es impar";
    }

});

/*
Route::get('holis/{numero}/{numeropcional?}', function($input1, $input2 = 1){

if ($input2 == 1)
{
  if ($input1%2==0){
      return "El numero ingresado  $input1  es par";
  }else{
      return "El numero ingresado  $input1  es impar";
  }
}
  else {  $resultado= $input1*$input2;
          return "El numero ingresado  es $input1 y es $input2, resultando $resultado";
  }
}); */

Route::get('/homeIndex', 'homecontroller@homeindex');

Route::get('/homepage', 'homepagecontroller@homepage');

Route::get('/primeratabla', 'dbusercontroller@listar');

Route::get('/publicaciones', 'addpublication@pub');

Route::post('/publicaciones', 'addpublication@save');
