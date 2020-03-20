@extends('admin.app')
@section('title')
  Edit Driver Informations
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
                  <h1 class="h4 text-gray-900 mb-4">Edit Driver Informations</h1>
                </div>
                <form class="user" method="post" action="{{ route('driver_update') }}">

                  @csrf

                  <div class="form-group">
                    <input type="text" name="driver_name" class="form-control" value="{{ $single_driver_info->driver_name }}" readonly>
                    <input type="hiddent" name="id" class="form-control" value="{{ $single_driver_info->id }}">
                  </div>
                  <div class="form-group">
                    <input type="email" name="driver_email" class="form-control" value="{{ $single_driver_info->driver_email }}" readonly>
                  </div>
                  <div class="form-group">
                    <input type="text" name="driver_contact" class="form-control" value="{{ $single_driver_info->driver_contact }}" placeholder="Driver Contact">
                  </div>
                  <div class="form-group">
                    <input type="file" name="driver_image" class="form-control" value="{{ $single_driver_info->driver_image }}">
                    <img style="height:50px; width: 60px;" src="{{ asset('uploads/driver') }}/{{ $single_driver_info->driver_image }}" alt="">
                  </div>
                  <div class="form-group">
                    <input type="date" name="birth_date" class="form-control" value="{{ $single_driver_info->birth_date }}">
                  </div>
                  <div class="form-group">
                    <textarea name="present_address" class="form-control" rows="2" placeholder="Present Address..">{{ $single_driver_info->driver_present_address }}</textarea>
                  </div>
                  <div class="form-group">
                    <textarea name="permanent_address" class="form-control" rows="2" placeholder="Permanent Address">{{ $single_driver_info->driver_permanent_address }}</textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" name="driving_license" class="form-control" value="{{ $single_driver_info->driver_licence_no }}" placeholder="Driving Licence No">
                  </div>
                  <div class="form-group">
                    <input type="number" name="experience" class="form-control" value="{{ $single_driver_info->experience }}" placeholder="Experience">
                  </div>

                  <input class="btn btn-success btn-user btn-block" type="submit" value="Submit">
                  <a href="{{ route('driver_info') }}" class="btn btn-danger btn-user btn-block">Cancel</a>
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
