<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posteo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = posteo::all();
      $usuarios = user::all();
      //dd($peliculas);
      $view = view('home');
      $view->with('posteos',$posts)
            ->with('usuario',$usuarios);

      return $view;

    }
}
