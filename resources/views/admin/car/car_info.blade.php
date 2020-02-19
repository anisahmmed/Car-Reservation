@extends('admin.app')
@section('title')
  Car Infos
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('car_index') }}" class="btn btn-primary"><i class="fas fa-plus">Add New Car Info</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Car Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Chassis No</th>
                <th>Car Name</th>
                <th>Car Model</th>
                <th>Car Category</th>
                <th>Car Speed</th>
                <th>Per Day Cost</th>
                <th>Scenario</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_car_info as $car_info)
                <tr>
                  <td>{{ $car_info->id }}</td>
                  <td>{{ $car_info->chassis_no }}</td>
                  <td>{{ $car_info->car_name }}</td>
                  <td>{{ $car_info->car_model }}</td>
                  <td>{{ $car_info->car_category }}</td>
                  <td>{{ $car_info->car_speed }}</td>
                  <td>{{ $car_info->per_day_cost }} Tk</td>
                  <td><img style="height:55px;width:50px;" src="{{ asset('/uploads/car') }}/{{ $car_info->car_scenario }}" alt="{{ $car_info->car_name }}" /></td>
                  <td>{{ $car_info->description }}</td>
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
