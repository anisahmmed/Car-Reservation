@extends('admin.app')
@section('title')
  User Information
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('new_user') }}" class="btn btn-primary"><i class="fas fa-plus"> New User</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>User Name</th>
                <th>Email</th>
                <th>User Role</th>
                <th>User Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                $sl =1;
              @endphp
              @foreach ($all_user_info as $user_info)
                <tr>
                  <td>{{ $sl++ }}</td>
                  <td>{{ $user_info->name }}</td>
                  <td>{{ $user_info->email }}</td>
                  @if ($user_info->role_id == 1)
                    <td>Admin</td>
                  @elseif ($user_info->role_id ==2)
                    <td>Driver</td>
                    @else
                      <td>Customer</td>
                  @endif
                  @if ($user_info->status_id == 1)
                    <td>Active</td>
                    @else
                      <td>Deactive</td>
                  @endif
                  <td>
                    <a href="{{ url('/dashboard/user-info/edit') }}/{{ $user_info->id }}" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
                    {{-- <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"> </i>Delete</a> --}}
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
