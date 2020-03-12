<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Driver;
use App\User;

class HomeIndexController extends Controller
{
    // function __construct()
    // {
    //   $this->middleware('auth');
    //   $this->middleware('check_role');
    // }
    function index()
    {
      $all_car_info = Car::all();
      $all_driver_info = Driver::all();
      $all_user = User::where('role_id', 3)->get();
      return view('home.index',compact('all_car_info','all_driver_info','all_user'));
    }
}
