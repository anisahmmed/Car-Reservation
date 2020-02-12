@extends('admin.app')
@section('title')
  Car Category Infos
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('car_category_index') }}" class="btn btn-primary"><i class="fas fa-plus">Add New Car Category</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Car Category Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Car Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_category_info as $category_info)
                <tr>
                  <td>{{ $category_info->id }}</td>
                  <td>{{ $category_info->category_name }}</td>
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
