<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
   public function homeindex(Request $request) {
     return view('homeindex');
   }
}
