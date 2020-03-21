@extends('home.app')
@section('title')
  Trip Information
@endsection
@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="">
      <a href="{{ route('driver_pannel') }}" class="btn btn-success">Go to Profile Again</a>
    </div>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Trip Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Customer Name</th>
                <th>PickUP Date</th>
                <th>DropOff Date</th>
                <th>Customer Email</th>
                <th>Customer Contact</th>
                <th>Full Address</th>
                <th>Duration</th>
                <th>Total Price</th>
                <th>Payment Status</th>
              </tr>
            </thead>
            <tbody>
              @php
                $sl =1;
              @endphp
              @foreach ($trip_info as $trip)
                @if (Auth::user()->email == $trip->driver_email && $trip->payment_status == 1)
                  <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $trip->customer_name }}</td>
                    <td>{{ date('d-M-Y', strtotime($trip->pickupdate)) }}</td>
                    <td>{{ date('d-M-Y', strtotime($trip->dropoffdate)) }}</td>
                    <td>{{ $trip->customer_email }}</td>
                    <td>0{{ $trip->customer_phone }}</td>
                    <td>{{ $trip->full_address }}</td>
                    <td>{{ $trip->duration }} Days</td>
                    <td>{{ $trip->total_cost }} Tk</td>
                    @if ($trip->payment_status == 1)
                      <td>Done</td>
                      @else
                        <td>Pending</td>
                    @endif
                    {{-- <td>
                    <a href="" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"> </i>Delete</a>
                  </td> --}}
                </tr>
                @endif
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
