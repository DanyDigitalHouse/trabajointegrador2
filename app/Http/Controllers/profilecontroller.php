<?php

namespace App\Http\Controllers;

use App\Models\Posteo;
use Illuminate\Http\Request;

class profilecontroller extends Controller
{
  public function prof(Request $request) {
    $posts = posteo::all()->sortByDesc('created_at');

    $view = view('profile');
    $view->with('posteos',$posts);

    return $view;
  }
}
