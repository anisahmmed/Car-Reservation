<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Image;

class CarController extends Controller
{
    //input form
    function index()
    {
      return view('admin.car.index');
    }

    //car Information view
    function car_info()
    {
      $all_car_info = Car::all();
      return view('admin.car.car_info',compact('all_car_info'));
    }

    //Car Info insert
    function car_info_insert(Request $request)
    {
      $last_inserted_id = Car::insertGetId([
        'chassis_no' =>$request->chassis_no,
        'car_name' =>$request->car_name,
        'car_category' =>$request->car_category,
        'car_speed' =>$request->car_speed,
        'per_day_cost' =>$request->per_day_cost,
        'car_scenario' =>$request->car_scenario,
        'description' =>$request->description,
      ]);

      if ($request->hasFile('car_scenario')){
           $photo_upload     =  $request->car_scenario;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(360,360)->save(base_path('public/uploads/car/'.$photo_name),100);
           Car::find($last_inserted_id)->update([
           'car_scenario' => $photo_name,
         ]);
       }
      return redirect(route('car_info'));
    }
}
