<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Car;
use Carbon\Carbon;

class ReservationController extends Controller
{
    // function __construct()
    // {
    //   $this->middleware('auth');
    //   $this->middleware('check_role');
    // }
    function reservation(Request $request)
    {
      $reserve_detail = $request;
      return view('customer.reserve_detail',compact('reserve_detail'));
    }

    //Confirm Reserve
    function confirm_reserve(Request $request)
    {
      $check = Reservation::insert([
        'pickupdate' =>$request->pickup_date,
        'dropoffdate' =>$request->drop_off_date,
        'customer_name' =>$request->customer_name,
        'customer_email' =>$request->customer_email,
        'customer_phone' =>$request->customer_phone,
        'city' =>$request->city,
        'full_address' =>$request->full_address,
        'car_chassis' =>$request->car_model,
        'driver' =>$request->driver,
        'driver_email' =>$request->driver_email,
        'duration' =>$request->duration,
        'total_cost' =>$request->total_cost,
        'payment_status' =>0,
        'created_at' =>Carbon::now(),
      ]);
      if ($check) {
        $customer_phone = $request->customer_phone;
        $total_price = $request->total_cost;
        // $car_name = Car::findOrFail($request->car_chassis)->car_name;
        $car_model = $request->car_model;
        return view('stripe',compact('check','customer_phone','total_price','car_model'));
      }
      else {
        echo "Fail";
      }
    }

    //Reserve Detail
    function reserve_detail()
    {
      return view('customer.reserve_detail');
    }
    // $fdate=$request->Fdate;
    // $tdate=$request->Tdate;
    //
    // $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $fdate);
    // $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $tdate);
    // $diff_in_days = $to->diffInDays($from);
    // dd($diff_in_days);


//END
}
