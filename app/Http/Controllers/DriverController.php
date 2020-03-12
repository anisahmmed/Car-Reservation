<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Driver;

class DriverController extends Controller
{
    function driver_detail($id)
    {
      $single_driver_info = Driver::findOrFail($id);
      return view('customer.driver_detail',compact('single_driver_info'));
    }
}
