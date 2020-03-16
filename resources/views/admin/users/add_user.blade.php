@extends('admin.app')
@section('title')
  Add New User
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
                  <h1 class="h4 text-gray-900 mb-4">User Information</h1>
                </div>

                <!-- Error Message Start-->
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
              @endif
                <!--Error Message End-->

                <form class="user" method="post" action="{{ route('new_user_insert') }}">

                  @csrf

                  <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" id="name" class="form-control" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="email" id="email" class="form-control" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                  <div class="form-group">
                    <label for="user_status">User Role</label>
                    <select class="form-control" name="user_role" required>
                      <option>Select</option>
                      <option value="1">Admin</option>
                      <option value="3">Customer</option>
                    </select>
                  </div>
                    <input class="btn btn-success btn-user btn-block" type="submit" value="Submit">
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
