<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\User;
use App\RegisterDriver;
use Auth;
class PassengerController extends Controller
{
    function passenger_index()
    {

      $all_car_info = Car::all();
      $customer_name = User::findOrFail(Auth::id())->name;
      $customer_email = User::findOrFail(Auth::id())->email;
      return view('customer.index',compact('all_car_info','customer_name','customer_email'));
    }

    //car info
    function car_info($id)
    {
      $all_registered_driver = RegisterDriver::findOrFail($id);
      $single_car_info = Car::findOrFail($id);
      return view('customer.index',compact('all_registered_driver','single_car_info'));
    }
}
