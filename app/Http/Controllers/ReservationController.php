<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
    function reservation(Request $request)
    {
      $check = Reservation::insert([
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
        'payment_status' =>0,
        'created_at' =>Carbon::now(),
      ]);
      if ($check) {
        $customer_phone = $request->customer_phone;
        $total_price = $request->total_cost;
        return view('stripe',compact('check','customer_phone','total_price'));
      }
      else {
        echo "Fail";
      }
    }
}
