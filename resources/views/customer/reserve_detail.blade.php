@extends('home.app')
@section('title')
  Reserve Detail
@endsection
@section('content')
  <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-md-3">
            <div class="reservation-details-area">
              <div class="content-block">
                  <h3 class="title m-4 text-center">Reserve Detail</h3>
                  <form class="reservation-form" method="post" action="{{ route('confirm_reserve') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input class="form-control" type="hidden" name="pickup_date" value="{{ $reserve_detail->pickup_date }}" required readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input class="form-control" type="hidden" name="drop_off_date" value="{{ $reserve_detail->drop_off_date }}" required readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="customer_name">Customer Name</label>
                          <input class="form-control" id="customer_name" type="text" name="customer_name" value="{{ $reserve_detail->customer_name }}" readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="customer_email">Customer Email</label>
                          <input class="form-control" type="customer_email" name="customer_email" value="{{ $reserve_detail->customer_email }}" readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="customer_phone">Customer Phone</label>
                          <input class="form-control" type="number" name="customer_phone" value="{{ $reserve_detail->customer_phone }}" required readonly>
                        </div>
                        @php
                        $fdate = $reserve_detail->pickup_date;
                        $tdate = $reserve_detail->drop_off_date;
                        $datetime1 = new DateTime($fdate);
                        $datetime2 = new DateTime($tdate);
                        $interval = $datetime1->diff($datetime2);
                        $days = $interval->format('%a');
                        @endphp
                        <div class="col-lg-6 form-group">
                          <label for="duration">Duration/ Days</label>
                            <input class="form-control" id="duration" type="text" name="duration" value="{{ $days }}" readonly>
                        </div>
                        @php
                          $total_price = $reserve_detail->total_cost * $days;
                        @endphp
                        <div class="col-lg-6 form-group">
                          <label for="total_price">Total Price/ Taka</label>
                            <input class="form-control" id="total_price" type="text" name="total_cost" value="{{ $total_price }}" readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input class="form-control" type="hidden" name="city" value="{{ $reserve_detail->city }}" required readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                            {{-- <input class="form-control" type="text" name="full_address" placeholder="Full Address" required> --}}
                            <textarea name="full_address" rows="3" required class="form-control"  readonly hidden>{{ $reserve_detail->full_address }}</textarea>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input class="form-control" type="hidden" name="car_model" value="{{ $reserve_detail->car_model }}" readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                          <input class="form-control" type="hidden" name="driver" value="{{ $reserve_detail->driver }}" readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                          <input class="form-control" type="hidden" name="driver_email" value="{{ $reserve_detail->driver_email }}" readonly>
                        </div>
                        <div class="col-lg-6 form-group">
                          <button type="submit" class="btn btn-success">Confirm Reserve</button>
                        </div>

                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
  </div>
@endsection
