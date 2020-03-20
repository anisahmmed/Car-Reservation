<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Driver;
use App\Reservation;
use Alert;

class AdminController extends Controller
{
    function __construct()
    {
      $this->middleware('auth');
      $this->middleware('restrictuser');
    }
  //Dashboard Index
    function index()
    {
      return view('admin.index');
    }

    //Driver Information
      function driver_info()
      {
        $driver_info = Driver::all();
        return view('admin.driver.driver_info',compact('driver_info'));
      }

      //Driver Insert Form
      function driver_index()
      {
        return view('admin.driver.driver_index');
      }
      //Driver Insert
      function driver_insert(Request $request)
      {
        // $request->validate([
        //     'name' => 'required|string|max:80',
        //     'email' => 'required|email|unique:users|max:80',
        //     'password'=>'required|string|min:6',
        //
        // ],[
        //     'name.required'  =>  'User Name Is Required.',
        //     'email.email'    => 'You must enter your valid email address.',
        //     'email.required' => 'Applicant Email Is Required.',
        //     'password.required' => 'Password Is Required.',
        // ]);

        $driver = User::insert([
          'role_id' =>2,
          'status_id' =>1,
          'name' =>$request->driver_name,
          'email' =>$request->driver_email,
          'password' =>Hash::make($request->password),
        ]);
        if ($driver) {
          Driver::insert([
            'driver_name' =>$request->driver_name,
            'driver_email' =>$request->driver_email,
          ]);
        }
        alert()->success('Driver Information','Added Successfully!');
        return redirect(route('driver_info'));
      }

      //Drivre Information Edit
      function driver_info_edit($id)
      {
        $single_driver_info = Driver::findOrFail($id);
        return view('admin.driver.edit_driver',compact('single_driver_info'));
      }

      //Driver Information Update
      function driver_update(Request $request)
      {
        Driver::findOrFail($request->id)->update([
          'driver_name' =>$request->driver_name,
          'driver_email' =>$request->driver_email,
          'driver_contact' =>$request->driver_contact,
          'birth_date' =>$request->birth_date,
          'present_address' =>$request->present_address,
          'permanent_address' =>$request->permanent_address,
          'driver_licence_no' =>$request->driving_license,
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
        alert::success('Driver Information','Updated Successfully!');
        return redirect(route('driver_info'));
      }

      //Driver Profile
      function driver_profile()
      {
        return view('admin.driver.driver_profile');
      }

      //User Information
      function user_info()
      {
        $all_user_info = User::all();
        return view('admin.users.user_info',compact('all_user_info'));
      }
      //User Information Edit
      function user_info_edit($id)
      {
        $single_user_info = User::findOrFail($id);
        return view('admin.users.edit_user',compact('single_user_info'));
      }

      //Update USer information
      function user_info_update(Request $request)
      {
        $check = User::findOrFail($request->id)->update([
          'name' =>$request->name,
          'email' =>$request->email,
          'status_id' =>$request->user_status,
        ]);

        // if ($check) {
        //   Driver::findOrFail($request->id)->update([
        //     'name' =>$request->name,
        //     'email' =>$request->email,
        //   ]);
        // }
        alert::success('User Information','Updated Successfully!');
        return redirect(route('user_info'));
      }

      //Add New User
      function new_user()
      {
        return view('admin.users.add_user');
      }
      //New User Insert
      function new_user_insert(Request $request)
      {
        $check = User::insert([
          'name' =>$request->name,
          'email' =>$request->email,
          'password' =>Hash::make($request->email),
          'status_id' =>1,
          'role_id' =>$request->user_role,
        ]);
        alert::success('User','Created Successfully!');
        return redirect(route('user_info'));
      }

      //Rent Information
    function rent_info()
      {
        $all_rent_info = Reservation::all();
        return view('admin.rent.rent_info',compact('all_rent_info'));
      }

      //Delete Rent Information
      function rent_info_delete($id)
      {
        Reservation::findOrFail($id)->delete();
        alert::error('Reserve Information','Deleted!');
        return back();
      }
}
