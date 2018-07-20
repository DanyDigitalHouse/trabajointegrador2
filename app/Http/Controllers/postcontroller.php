<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
  public function save(Request $request) {
     //dd($request);
     return view('/posteo');
  }

}
