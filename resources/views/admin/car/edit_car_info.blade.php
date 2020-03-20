@extends('admin.app')
@section('title')
  Edit Car Informations
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
                  <h1 class="h4 text-gray-900 mb-4">Edit Car Informations</h1>
                </div>
                <form class="user" method="post" action="{{ route('car_info_update') }}">

                  @csrf

                  <div class="form-group">
                    <input type="text" name="chassis_no" class="form-control" value="{{ $single_car_info->chassis_no }}" placeholder="Chassis Number">
                    <input type="hidden" name="id" class="form-control" value="{{ $single_car_info->id }}">
                  </div>
                  <div class="form-group">
                    <input type="text" name="car_name" class="form-control" value="{{ $single_car_info->car_name }}" placeholder="Car Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="car_model" class="form-control" value="{{ $single_car_info->car_model }}" placeholder="Car Model">
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="car_category">
                      <option class="bg-success text-white">{{ $single_car_info->car_category }}</option>
                      <option>First Class</option>
                      <option>Middle Class</option>
                      <option>Lower Class</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="number" name="car_speed" class="form-control" value="{{ $single_car_info->car_speed }}" placeholder="Car Speed">
                  </div>
                  <div class="form-group">
                    <input type="number" name="per_day_cost" class="form-control" value="{{ $single_car_info->per_day_cost }}" placeholder="Per Day Cost">
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control" name="car_scenario" value="{{ $single_car_info->car_scenario }}">
                    <img style="height: 50px; width: 70px;" src="{{ asset('uploads/car') }}/{{ $single_car_info->car_scenario }}" alt="">
                  </div>
                  <div class="form-group">
                    <textarea name="description" class="form-control" rows="3">{{ $single_car_info->description }}</textarea>
                  </div>
                  <input class="btn btn-success btn-user btn-block" type="submit" value="Save Change">
                  <a href="{{ route('car_info') }}" class="btn btn-danger btn-user btn-block">Cancel</a>
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
