<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilecontroller extends Controller
{
  public function prof(Request $request) {
    return view('profile');
  }
}
