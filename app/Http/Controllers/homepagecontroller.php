<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
  public function homepage(Request $request) {
    return view('layout.default');
  }
}
