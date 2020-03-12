@extends('admin.app')
@section('title')
  Driver Information
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('driver_index') }}" class="btn btn-primary"><i class="fas fa-plus">Add New Driver</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Driver Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Image</th>
                <th>Age</th>
                <th>Permanent Address</th>
                <th>Present Address</th>
                <th>Driving Licence</th>
                <th>Experience</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                $sl =1;
              @endphp
              @foreach ($driver_info as $driver)
                <tr>
                  <td>{{ $sl++ }}</td>
                  <td>{{ $driver->driver_name }}</td>
                  <td>{{ $driver->driver_email }}</td>
                  <td>{{ $driver->driver_contact }}</td>
                  <td><img style="height:55px;width:50px;" src="{{ asset('/uploads/driver') }}/{{ $driver->driver_image }}" alt="{{ $driver->driver_name }}" /></td>
                  <td>{{ $driver->birth_date }}</td>
                  <td>{{ $driver->driver_permanent_address }}</td>
                  <td>{{ $driver->driver_present_address }}</td>
                  <td>{{ $driver->driver_licence_no }}</td>
                  <td>{{ $driver->experience }}</td>
                  <td>
                    <a href="{{ url('/dashboard/driver-info/edit') }}/{{ $driver->id }}" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
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
