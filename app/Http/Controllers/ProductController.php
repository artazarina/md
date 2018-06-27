<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getMerch()
    {
      //laravel will create a new variable that can populate views
      $products = Product :: all();
      return view('pages.merch', ['products' => $products]);
    }
}
