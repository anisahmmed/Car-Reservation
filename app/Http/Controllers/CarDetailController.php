<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarDetailController extends Controller
{
    function car_detail($id)
    {
      $single_car_info = Car::findOrFail($id);
      return view('customer.car_detail',compact('single_car_info'));
    }
}
