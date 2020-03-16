@extends('admin.app')
@section('title')
  Registered Driver Information
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('register_driver_index') }}" class="btn btn-primary"><i class="fas fa-plus">Register New Driver</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Register Driver & Car Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Car Name</th>
                <th>Driver Name</th>
                <th>Driver Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                $sl =1;
              @endphp
              @foreach ($all_registered_driver as $registered_driver)
                <tr>
                  <td>{{ $sl++ }}</td>
                  <td>{{ App\Car::findOrFail($registered_driver->car_model_id)->car_name }}</td>
                  <td>{{ App\Driver::findOrFail($registered_driver->driver_name_id)->driver_name }}</td>
                  <td>{{ $registered_driver->driver_email_id }}</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"> </i>Delete</a>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
