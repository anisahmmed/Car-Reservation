<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;


class RegisterController extends Controller
{
  //register page
    function register_page()
    {
      return view('login.register');
    }

    //Login page
    function login_page()
    {
      return view('login.login_page');
    }

    //Registration
    function register(Request $request)
    {
      $request->validate([
          'name' => 'required|string|max:80',
          'email' => 'required|email|unique:users|max:80',
          'password'=>'required|string|min:6|confirmed',
          'password_confirmation' => 'required|same:password'

      ],[
          'name.required'  =>  'User Name Is Required.',
          'email.email'    => 'You must enter your valid email address.',
          'email.required' => 'Applicant Email Is Required.',
          'password.required' => 'Password Is Required.',
          'password_confirmation.required' => 'Confirm Password Is Required.',
          'password_confirmation.same:password' => 'Confirm Password must same as Password.',
      ]);

      User::insert([
        'role_id' =>3,
        'status_id' =>1,
        'name' =>$request->name,
        'email' =>$request->email,
        'password' =>Hash::make($request->password),
      ]);
      return redirect(route('login_page'));
    }

//END
}
