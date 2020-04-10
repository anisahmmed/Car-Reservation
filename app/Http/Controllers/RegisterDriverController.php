<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Car;
use App\Driver;
use App\RegisterDriver;

class RegisterDriverController extends Controller
{
    function __construct()
    {
      $this->middleware('auth');
      $this->middleware('restrictuser');
    }
  //Register Driver info
    function register_driver_info()
    {
      $all_registered_driver = RegisterDriver::all();
      return view('admin.register_driver.registered_driver_info',compact('all_registered_driver'));
    }

    //Register Driver Index
    function register_driver()
    {
      $car_info = Car::all();
      $driver_info = Driver::all();
      return view('admin.register_driver.register_index',compact('car_info','driver_info'));
    }
    //Register Driver Insert
    function register_driver_insert(Request $request)
    {
      RegisterDriver::insert([
        'car_model_id' =>$request->car_name_id,
        'driver_name_id' =>$request->driver_name_id,
        'driver_email_id' =>$request->driver_email_id,
      ]);
      alert()->success('Register Driver Information','Registered Successfully!');
      return redirect(route('register_driver_info'));
    }
    function driver_email($driver_id)
    {
      $driver_email = Driver::findOrFail($driver_id);
      $data = [
        'driver_email' =>$driver_email,
      ];
       return $driver_email->toJson();
    }
}
