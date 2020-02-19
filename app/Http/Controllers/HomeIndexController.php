<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeIndexController extends Controller
{
    function index()
    {
      $all_car_info = Car::all();
      return view('home.index',compact('all_car_info'));
    }
}
