<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\User;
use App\Reservation;
use Auth;
use Image;
use Carbon\Carbon;

class DriversController extends Controller
{
    // function __construct()
    // {
    //   $this->middleware('auth');
    //   $this->middleware('check_role');
    // }
    function driver_index()
    {
      // $driver_info = Driver::where(Auth::user()->email, driver_email)->get();
      $driver_info = Driver::all();
      // if (Auth::user()->email == $driver_info->driver_email) {
      //
      // }
      return view('drivers.index',compact('driver_info'));
    }
    //Edit Driver Information
    // function driver_info_edit($id)
    // {
    //   $single_driver_info = Driver::findOrFail(Auth::id())->all();
    //   return view('drivers.index',compact('single_driver_info'));
    // }
    //Driver Info Update
    function driver_info_update(Request $request)
    {

       Driver::findOrFail($request->id)->update([
        'driver_image' =>$request->driver_image,
        'driver_contact' =>$request->driver_contact,
        'birth_date' =>$request->birth_date,
        'driver_permanent_address' =>$request->driver_permanent_address,
        'driver_present_address' =>$request->driver_present_address,
        'driver_licence_no' =>$request->driver_licence_no,
        'experience' =>$request->experience,
      ]);

      $last_inserted_id =  $request->id;
      if ($request->hasFile('driver_image')){
           $photo_upload     =  $request->driver_image;
           $photo_extension  =  $photo_upload->getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(730,408)->save(base_path('public/uploads/driver/'.$photo_name),100);
           Driver::find($last_inserted_id)->update([
           'driver_image' => $photo_name,
         ]);
       }
       alert()->success('Profile Updated!');
      return redirect(route('driver_index_page'));
    }

    //Driver Trip Information
    function trip_info()
    {
      $trip_info = Reservation::all();
      return view('drivers.trip_info',compact('trip_info'));
    }
}
