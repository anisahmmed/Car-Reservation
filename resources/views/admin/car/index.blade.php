@extends('admin.app')
@section('title')
  Car Information
@endsection
@section('content')
  <body class="bg-gradient-primary">

    <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="col-lg-7 offset-lg-2">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Input Car Infos</h1>
                </div>
                <form class="user" method="post" action="{{ route('car_info_insert') }}" enctype="multipart/form-data">

                  @csrf

                  <div class="form-group">
                    <input type="text" name="chassis_no" class="form-control" placeholder="Car Chassis No">
                  </div>
                  <div class="form-group">
                    <input type="text" name="car_name" class="form-control" placeholder="Car Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="car_model" class="form-control" placeholder="Car Model">
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="car_category">
                      <option class="bg-success text-white">Select Category</option>
                      <option>First Class</option>
                      <option>Middle Class</option>
                      <option>Lower Class</option>
                    </select>
                  </div>


                  ****Age Calculation code from date of birth****
                  \Carbon\Carbon::parse($user->birth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');
                  ****Age Calculation code from date of birth****


                  <div class="form-group">
                    <input type="text" name="car_speed" class="form-control" placeholder="Car Speed">
                  </div>
                  <div class="form-group">
                    <input type="number" name="per_day_cost" class="form-control" placeholder="Per Day Cost">
                  </div>
                  <div class="form-group">
                    <input type="file" name="car_scenario" class="form-control">
                  </div>
                  <div class="form-group">
                    <textarea name="description" rows="3" class="form-control" placeholder="Write description here.."></textarea>
                  </div>
                  <input class="btn btn-primary btn-user btn-block" type="submit" value="Submit">
                  <hr>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


  </body>
@endsection
