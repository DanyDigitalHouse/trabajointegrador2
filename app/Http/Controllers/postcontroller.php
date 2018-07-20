<?php

namespace App\Http\Controllers;
use App\Models\Posteo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class postcontroller extends Controller
{
  public function savepost(Request $request) {
   // dd($request->all());
    $this->validate($request, [
        'nickname' => 'required|string|max:255',
        'local' => 'required|string|max:50',
        'titulopost' => 'required|string|max:255',
        'mensajeposteado' => 'required|string|max:1500',
        'fotopost' => 'string|max:255'
      ]);

   //  $ruta_imagen='';
    // dd($request->all());
      Posteo::create([
          'nickname' => $request->input('nickname'),
          'local' => $request->input('local'),
          'titulopost' => $request->input('titulopost'),
          'mensajeposteado' => $request->input('mensajeposteado'),
          'fotopost' => $request->input('linkTarget'),
      ]);


  }


}
