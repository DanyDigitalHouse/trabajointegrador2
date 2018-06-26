<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dbusercontroller extends Controller
{
  public function listar(Request $request) {
    $users = User::all();
    //dd($peliculas);
    $view = view('dbuser');
    $view->with('mensaje', 'estas son las pelicuias')
         ->with('users',$users);

    return $view;
  }
}
