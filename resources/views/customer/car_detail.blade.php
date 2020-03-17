@extends('home.app')
@section('title')
  Car Detail
@endsection
@section('content')





    <!-- banner-section start -->
    <section class="single-banner contact-one-banner"
             style="background-image: url({{ asset('frontend/assets/user/img/frontEnd/inner-page-bg.jpg') }});">
        <div class="banner-content-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <h1 class="banner-title">Cars details</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- course-details-section start -->
    <section class="course-details-section section-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="entry-single-title ml-4">{{ $single_car_info->car_name }}</h2>
                </div>
                <div class="col-lg-8">
                    <div class="course-details-wrapper">
                        <div class="entry-single">
                            <div class="entry-single-thumb">
                                <div style="display: " class="img_lead"
                                     id="image_1">
                                    <img src="{{ asset('uploads/car') }}/{{ $single_car_info->car_scenario }}"class="img-responsive img-thumbnail">
                                </div>
                            </div>
                            <ul class="car-thumb-nav">
                                <li class="img_btn" data-id="1">
                                    <img src="{{ asset('uploads/car') }}/{{ $single_car_info->car_scenario }}">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                        {{-- <div class="comment-area">
                            <div class="fb-comments" data-href="http://rifat636.thesoftking.com/renten/car-details/audi-premium" data-width="600"
                                 data-numposts="5"></div>
                        </div> --}}

                    <div class="col-lg-4">
                        <div class="sidebar-area">
                            <div class="widget course-status-widget">
                                <h5 class="widget-title">Car Specification</h5>
                                <ul>
                                    <li>
                                        <p>Model</p>
                                        <p>
                                            <span class="course-love-num">{{ $single_car_info->car_model }}</span>
                                        </p>
                                    </li>
                                    <li>
                                        <p>Speed</p>
                                        <p>
                                            <span class="course-love-num">{{ $single_car_info->car_speed }} km</span>
                                        </p>
                                    </li>
                                    <li>
                                        <p>Category</p>
                                        <p>
                                            <span class="course-love-num">{{ $single_car_info->car_category }}</span>
                                        </p>
                                    </li>

                                    <li>
                                        <p>Per day cost</p>
                                        <p><span>{{ $single_car_info->per_day_cost }} TK</span></p>
                                    </li>
                                    <li>
                                        <p>Driver</p>
                                        <p><span>{{ App\Driver::findOrFail($all_registered_driver->driver_name_id)->driver_name }} </span></p>
                                    </li>
                                </ul>
                                <p class="widget-bottom">
                                    <a href="#" class="cmn-button btn-block text-white" data-cid="20" data-toggle="modal"
                                       data-target="#reservation">Reserve now</a>
                                </p>
                            </div>
                            <!-- widget end -->
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
                                                                          <input type='text' id="pickupdate" name="pickup_date" class='form-control' required>
                                                                      </div>

                                                                      <div class="form-group col-md-6">
                                                                          <label for="exampleInputEmail1">Drop Off Date</label>
                                                                          <input type='text' id="dropoffdate" name="drop_off_date" class='form-control' required>
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
                                                                      <div class="col-lg-12 form-group">
                                                                          {{-- <input class="form-control" type="text" name="full_address" placeholder="Full Address" required> --}}
                                                                          <textarea name="full_address" rows="3" required class="form-control" placeholder="Full Address"></textarea>
                                                                      </div>
                                                                      <div class="col-lg-12 form-group">
                                                                          <input class="form-control" type="hidden" name="car_model" value="{{ $single_car_info->car_model }}">
                                                                      </div>
                                                                      <div class="col-lg-12 form-group">
                                                                        <input class="form-control" type="hidden" name="driver" value="{{ App\Driver::findOrFail($all_registered_driver->driver_name_id)->driver_name }}">
                                                                      </div>
                                                                      <div class="col-lg-12 form-group">
                                                                        <input class="form-control" type="hidden" name="driver_email" value="{{ $all_registered_driver->driver_email_id }}">
                                                                      </div>
                                                                      <div class="col-lg-12 form-group">
                                                                          <input class="form-control" type="hidden" name="total_cost" value="{{ $single_car_info->per_day_cost }}">
                                                                      </div>

                                                                  </div>
                                                              </div>

                                                              <div class="modal-footer" style="border-top: 1px solid #f3f1f1;">
                                                                  <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                  <button type="submit" class="btn btn-success">Reserve</button>
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

                            <div class="widget share-link-widget">
                                <h5 class="widget-title">Share This Car</h5>
                                <ul class="d-flex">
                                    <li><a href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?text=my%20share%20text&amp;url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/share?url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="http://pinterest.com/pin/create/link/?url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium&amp;title=my%20share%20text&amp;summary=dit%20is%20de%20linkedin%20summary"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="https://www.instagram.com/?url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>


                            <div class="widget tags-widget">
                                <h5 class="widget-title">Car Category</h5>
                                <div class="tags">
                                    <a class="widget-tag" href="../cars/hatchback.html">Hatchback</a>
                                    <a class="widget-tag" href="../cars/volkswagen.html">Volkswagen</a>
                                    <a class="widget-tag" href="../cars/audi-prime.html">Audi Prime</a>
                                    <a class="widget-tag" href="../cars/honda-civic.html">Honda Civic</a>
                                </div>
                            </div>
                            <div class="widget tags-widget">
                                <a href="http://google.com/" data-adid="6" class="advertise" target="_blank">
                                    <img src="../assets/user/img/aads/201907010732_ad1.png" alt="image">
                                </a>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>
        <!-- events-section end -->
@endsection
