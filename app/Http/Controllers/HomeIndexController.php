<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeIndexController extends Controller
{
    function index()
    {
      return view('home.index');
    }
}
