<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = 'Welcome to our page!';
      return view('pages.index')->with('title', $title);
    }

    public function news(){
      $title = 'Newsletter';
      return view('pages.news')->with('title', $title);
    }

    public function merch(){
      $title = 'Merch';
      return view('pages.merch')->with('title', $title);
    }

    public function shoppingCart(){
      $title = 'Shopping Cart';
      return view('pages.shoppingCart')->with('title', $title);
    }

    public function signUp(){
      $title = 'Not a Member?';
      return view('pages.signUp')->with('title', $title);
    }

    public function signIn(){
      $title = 'Already a Member?';
      return view('pages.signIn')->with('title', $title);
    }
}
