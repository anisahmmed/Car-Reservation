<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Driver;

class AdminController extends Controller
{
  // function __construct()
  // {
  //   $this->middleware('auth');
  //   $this->middleware('restrictuser');
  // }
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
        return redirect(route('driver_info'));
      }

      //Drivre Information Edit
      function driver_info_edit($id)
      {
        $single_driver_info = Driver::findOrFail($id);
        return view('admin.driver.edit_driver',compact('single_driver_info'));
      }

      //Driver Profile
      function driver_profile()
      {
        return view('admin.driver.driver_profile');
      }
}
