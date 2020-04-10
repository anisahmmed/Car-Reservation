<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Driver;
use App\User;

class HomeIndexController extends Controller
{

    function index()
    {
      $all_car_info = Car::all();
      $all_driver_info = Driver::all();
      $all_user = User::where('role_id', 3)->get();
      return view('home.index',compact('all_car_info','all_driver_info','all_user'));
    }
    //About Page
    function about()
    {
      return view('home.about');
    }
    //Service page
    function service()
    {
      return view('home.service');
    }
    //Drivers Page
    function drivers()
    {
      $all_driver_info = Driver::all();
      return view('home.drivers',compact('all_driver_info'));
    }
//END
}
