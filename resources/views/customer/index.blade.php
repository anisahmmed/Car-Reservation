@extends('home.app')
@section('title')
  Car | Reservation
@endsection
@section('content')
  <!-- banner-section start -->
  <section class="banner-section"
           style="background-image: url({{ asset('frontend/assets/user/img/frontEnd/background_image.jpg')}}">
      <div class="banner-content-area">
          <div class="container">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-12">
                          <div class="banner-content text-center">
                              <h1 class="banner-title">We are first car rental service provider</h1>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since .</p>
                          </div>
                      </div>
                      <div class="col-lg-10">
                          <div class="select-option-box-area">
                              <form class="course-apply-form" method="get" action="http://rifat636.thesoftking.com/renten/car-search">
                                  <div class="row justify-content-sm-center">
                                      <div class="col-md-4">
                                          <div class="frm-group apply-options">

                                              <select name="category" required>
                                                  <option value="">Select car type</option>
                                                  <option value="hatchback">Hatchback</option>
                                                  <option value="volkswagen">Volkswagen</option>
                                                  <option value="audi-prime">Audi Prime</option>
                                                  <option value="honda-civic">Honda Civic</option>
                                              </select>

                                          </div>
                                      </div><!-- frm-group end -->
                                      <div class="col-md-3">
                                          <div class="frm-group">
                                              <input type="text" class="form-control form-control-lg my_search"
                                                     name="min_rent" placeholder="Min Rent" required>
                                          </div>
                                      </div><!-- frm-group end -->
                                      <div class="col-md-3">
                                          <div class="frm-group">
                                              <input type="text" class="form-control form-control-lg my_search"
                                                     name="max_rent" placeholder="Max Rent" required>
                                          </div>
                                      </div><!-- frm-group end -->
                                      <div class="col-lg-2">
                                          <div class="frm-group">
                                              <button type="submit" class="apply-btn">Search Now</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- banner-section end -->

  <!-- feature care start -->
  <section class="course-section section-padding section-bg">
      <div class="container">
          <div class="section-header text-center">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <h2 class="section-title">Featured Awesome Cars</h2>
                      <p>Super Cool Luxury Car Features Which Prove That We’re Living In The Future.</p>
                  </div>
              </div>
          </div>
          <div class="section-wrapper">
              <div class="row mt-mb-15">
                @foreach ($all_car_info as $car_info)
                  <div class="col-lg-4 col-sm-6">
                    <div class="course-item">
                      <div class="course-thumb">
                        <a href="{{ url('/car-detail') }}/{{ $car_info->id }}"><img src="{{ asset('uploads/car') }}/{{ $car_info->car_scenario }}" alt="{{ $car_info->car_name }}"></a>
                      </div>
                      <div class="course-content">
                        <h5 class="course-title"><a href="{{ url('/car-detail') }}/{{ $car_info->id }}">{{ $car_info->car_name }}</a></h5>
                        <p>{{ $car_info->description }}</p>

                        <div class="btn-area d-flex justify-content-between">
                          <a href="{{ url('/car-detail') }}/{{ $car_info->id }}" class="simple-btn">View
                            Details</a>
                            {{-- <a href="#" class="simple-btn" data-cid="20" data-toggle="modal"
                            data-target="#reservation">Rent Now</a> --}}
                        </div>
                      </div>
                      <div class="course-item-bottom">
                        <ul class="course-review-list d-flex">
                          <li><i class="fa fa-car"></i><span
                            class="course-love-num">{{ $car_info->chassis_no }}</span></li>
                          <li><i class="fa fa-tachometer"></i><span
                              class="course-love-num">{{ $car_info->car_speed }}</span></li>
                          <li><i class="fa fa-sliders"></i><span class="course-love-num">{{ $car_info->car_name }}</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- course-item end -->
                  @endforeach

                <div class="modal modal-danger fade" id="reservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title text-center" id="myModalLabel">Reservation form</h4>
                          </div>
                          <!-- reservation-section start -->

                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="reservation-details-area">

                                          <div class="content">
                                            <form class="reservation-form" method="post" action="{{ route('reservation') }}">
                                              @csrf
                                                <div class="content-block">
                                                    <h3 class="title m-4 text-center">select duration</h3>

                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Pickup Date</label>
                                                            <input type='date' name="pickup_date" class='form-control' required>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Drop Off Date</label>
                                                            <input type='date' name="drop_off_date" class='form-control has-icon datepicker-here' required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-block">
                                                    <h3 class="title m-4 text-center">personal information</h3>
                                                    <div class="row">
                                                        <div class="col-lg-6 form-group">
                                                            <input class="form-control" type="text" name="customer_name" value="{{ $customer_name }}" readonly>
                                                        </div>
                                                        <div class="col-lg-6 form-group">
                                                            <input class="form-control" type="email" name="customer_email" value="{{ $customer_email }}" readonly>
                                                        </div>
                                                        <div class="col-lg-6 form-group">
                                                            <input class="form-control" type="tel" name="customer_phone" placeholder="Phone" required>
                                                        </div>
                                                        <div class="col-lg-6 form-group">
                                                            <input class="form-control" type="text" name="city" placeholder="City" required>
                                                        </div>
                                                        <div class="col-lg-12 form-group"

                                                            <input class="form-control" type="text" name="full_address" placeholder="Full Address" required>
                                                            <textarea name="full_address" rows="3">Full Address</textarea>
                                                        </div>
                                                        <div class="col-lg-12 form-group">
                                                            <input class="form-control" type="hidden" name="car_model" value="">
                                                        </div>
                                                        <div class="col-lg-12 form-group">
                                                          <input class="form-control" type="hidden" name="driver" value="">
                                                        </div>
                                                        <div class="col-lg-12 form-group">
                                                            <input class="form-control" type="hidden" name="total_cost" value="">
                                                        </div>

                                                    </div>
                                                  </div>

                                                  <div class="modal-footer" style="border-top: 1px solid #f3f1f1;">
                                                      <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel                                        </button>
                                                      <button type="submit" class="btn btn-success">reservation</button>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- reservation-section end -->
                      </div>
                  </div>
                </div>

              </div>
          </div>
      </div>
  </section>
  <!-- feature care end -->

@endsection
