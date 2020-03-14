<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarCategory;
class CarCategoryController extends Controller
{
  //category form
    function index()
    {
      return view('admin.car_category.index');
    }
    //car category info view
    function car_category_info()
    {
      $all_category_info = CarCategory::all();
      return view('admin.car_category.category_info',compact('all_category_info'));
    }

    //category insert
    function insert(Request $request)
    {
      CarCategory::insert([
        'category_name' =>$request->category_name,
      ]);
      alert()->success('Car Category','Added Successfully!');
      return redirect(route('car_category_info'));
    }

}
