@extends('admin.app')
@section('title')
  Edit User
@endsection
@section('content')
    <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="col-lg-6 offset-lg-3">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Edit User Information</h1>
                </div>
                <form class="user" method="post" action="{{ route('user_info_update') }}">

                  @csrf

                  <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ $single_user_info->name }}">
                    <input type="hidden" class="form-control" name="id" value="{{ $single_user_info->id }}">
                  </div>
                  <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="email" id="email" class="form-control" name="email" value="{{ $single_user_info->email }}">
                  </div>
                  <div class="form-group">
                    <label for="user_status">User Status</label>
                    <select class="form-control" name="user_status">
                      @if ($single_user_info->status_id == 1)
                        <option value="1" class="bg-success text-white">Active</option>
                        @else
                          <option value="1" class="bg-danger text-white">Deactive</option>
                      @endif
                      <option value="1">Active</option>
                      <option value="1">Deactive</option>
                    </select>
                  </div>
                    <input class="btn btn-success btn-user btn-block" type="submit" value="Save Change">
                    <a href="{{ route('user_info') }}" class="btn btn-danger btn-user btn-block">Cancel</a>
                  <hr>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection
