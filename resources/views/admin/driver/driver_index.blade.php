@extends('admin.app')
@section('title')
  Add Driver
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
                  <h1 class="h4 text-gray-900 mb-4">Input Driver Informations</h1>
                </div>
                <form class="user" method="post" action="{{ route('driver_insert') }}">

                  @csrf

                  <div class="form-group">
                    <input type="text" name="driver_name" class="form-control" placeholder="Diver Name">
                  </div>
                  <div class="form-group">
                    <input type="email" name="driver_email" class="form-control" placeholder="Driver Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  {{-- <div class="form-group">
                    <input type="text" name="driver_contact" class="form-control" placeholder="Driver Contact">
                  </div>
                  <div class="form-group">
                    <input type="file" name="driver_image" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="date" name="birth_date" class="form-control" placeholder="Birth Date">
                  </div>
                  <div class="form-group">
                    <textarea name="present_address" class="form-control" rows="2" placeholder="Present Address.."></textarea>
                  </div>
                  <div class="form-group">
                    <textarea name="permanent_address" class="form-control" rows="2" placeholder="Permanent Address.."></textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" name="driving_license" class="form-control" placeholder="Driving License Number">
                  </div>
                  <div class="form-group">
                    <input type="text" name="experience" class="form-control" placeholder="Experience">
                  </div> --}}

                  <input class="btn btn-primary btn-user btn-block" type="submit" value="Submit">
                  <a href="{{ route('driver_info') }}" class="btn btn-info btn-user btn-block">Cancel</a>
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
