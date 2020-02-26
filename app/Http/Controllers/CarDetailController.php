<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\RegisterDriver;
use App\User;
use Auth;

class CarDetailController extends Controller
{
    function car_detail($id)
    {
      $all_registered_driver = RegisterDriver::findOrFail($id);
      $single_car_info = Car::findOrFail($id);
      $customer_name = User::findOrFail(Auth::id())->name;
      $customer_email = User::findOrFail(Auth::id())->email;
      return view('customer.car_detail',compact('single_car_info','all_registered_driver','customer_name','customer_email'));
    }
}
