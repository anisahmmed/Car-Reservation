@extends('admin.app')
@section('title')
  Rent Information
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rent Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Phone</th>
                <th>Customer City</th>
                <th>Customer Full Address</th>
                <th>Car Model</th>
                <th>Driver</th>
                <th>Duration</th>
                <th>Total Price</th>
                <th>Payment Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $sl =1;
              @endphp
              @foreach ($all_rent_info as $rent_info)
                <tr>
                  <td>{{ $sl++ }}</td>
                  <td>{{ $rent_info->customer_name }}</td>
                  <td>{{ $rent_info->customer_email }}</td>
                  <td>{{ $rent_info->customer_phone }}</td>
                  <td>{{ $rent_info->city }}</td>
                  <td>{{ $rent_info->full_address }}</td>
                  <td>{{ $rent_info->car_model }}</td>
                  <td>{{ $rent_info->driver }}</td>
                  <td>{{ $rent_info->duration }} Day</td>
                  <td>{{ $rent_info->total_cost }} Tk</td>
                  @if ($rent_info->payment_status == 1)
                    <td>Paid</td>
                    @else
                      <td>Pending</td>
                  @endif
                  <td>
                    <a href="{{ url('/dashboard/rent-info/delete') }}/{{ $rent_info->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"> </i>Delete</a>
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
