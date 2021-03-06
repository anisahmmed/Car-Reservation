@extends('admin.app')
@section('title')
  Driver Register
@endsection
@section('content')
    <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="col-lg-6 offset-lg-2">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Register Driver For Car</h1>
                </div>
                <form class="user" method="post" action="{{ route('register_driver_insert') }}">

                  @csrf

                  <div class="form-group">
                    <select class="form-control" name="car_name_id">
                      <option class="bg-info text-white">Select Car</option>
                      @foreach ($car_info as $car)
                        <option value="{{ $car->id }}">{{ $car->car_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <select id="driver_id" class="form-control" name="driver_name_id">
                      <option class="bg-info text-white">Select Driver</option>
                      @foreach ($driver_info as $driver)
                        <option value="{{ $driver->id }}">{{ $driver->driver_name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <select id="driver_email" class="form-control" name="driver_email_id">
                      <option class="bg-info text-white">Driver Email</option>
                      @foreach ($driver_info as $driver)
                        <option value="{{ $driver->driver_email }}">{{ $driver->driver_email }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="modal-footer">
                    <a href="{{ route('register_driver_info') }}" class="btn btn-danger">Cancel</a>
                    <input class="btn btn-success" type="submit" value="Register">
                  </div>
                  <hr>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection
