<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    function reservation(Request $request)
    {
      Reservation::insert([
        'pickup_date' =>$request->pickup_date,
        'drop_off_date' =>$request->drop_off_date,
        'customer_name' =>$request->customer_name,
        'customer_email' =>$request->customer_email,
        'customer_phone' =>$request->customer_phone,
        'city' =>$request->city,
        'full_address' =>$request->full_address,
        'car_model' =>$request->car_model,
        'driver' =>$request->driver,
        'total_cost' =>$request->total_cost,
      ]);
      return redirect(route('index'));
    }
}
