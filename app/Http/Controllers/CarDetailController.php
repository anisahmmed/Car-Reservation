<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\RegisterDriver;
use App\User;
use App\Driver;
use Auth;

class CarDetailController extends Controller
{
      // function __construct()
      // {
      //   $this->middleware('auth');
      //   $this->middleware('check_role');
      // }
    function car_detail($id)
    {
      $all_registered_driver = RegisterDriver::findOrFail($id);
      $single_car_info = Car::findOrFail($id);
      $customer_name = User::findOrFail(Auth::id())->name;
      $customer_email = User::findOrFail(Auth::id())->email;
      $all_driver_info = Driver::all();
      return view('customer.car_detail',compact('single_car_info','all_registered_driver','customer_name','customer_email','all_driver_info'));
    }
}
