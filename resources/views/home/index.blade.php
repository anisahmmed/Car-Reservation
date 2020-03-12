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

    <!-- service section start -->
    <section class="welcome-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="section-title">Our Awsome Service</h2>
                        <p>Augue urna molestie mi adipiscing vulputate pede sedmassa Praesquam massa</p>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row mt-mb-15 justify-content-center">
                                            <div class="col-lg-4 col-md-6">
                            <div class="single-item-style-four">
                                <div class="single-item-head d-flex align-items-center">
                                    <div class="icon"><i class="fas fa-car"></i></div>
                                    <h5 class="item-title">emergency service</h5>
                                </div>
                                <div class="content">
                                    <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl</p>
                                </div>
                            </div>
                        </div><!--benefits-item end -->
                                            <div class="col-lg-4 col-md-6">
                            <div class="single-item-style-four">
                                <div class="single-item-head d-flex align-items-center">
                                    <div class="icon"><i class="fas fa-car"></i></div>
                                    <h5 class="item-title">Long day tour</h5>
                                </div>
                                <div class="content">
                                    <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl</p>
                                </div>
                            </div>
                        </div><!--benefits-item end -->
                                            <div class="col-lg-4 col-md-6">
                            <div class="single-item-style-four">
                                <div class="single-item-head d-flex align-items-center">
                                    <div class="icon"><i class="fab fa-servicestack"></i></div>
                                    <h5 class="item-title">best journy</h5>
                                </div>
                                <div class="content">
                                    <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl</p>
                                </div>
                            </div>
                        </div><!--benefits-item end -->
                                            <div class="col-lg-4 col-md-6">
                            <div class="single-item-style-four">
                                <div class="single-item-head d-flex align-items-center">
                                    <div class="icon"><i class="fas fa-car"></i></div>
                                    <h5 class="item-title">tour program</h5>
                                </div>
                                <div class="content">
                                    <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl</p>
                                </div>
                            </div>
                        </div><!--benefits-item end -->
                                            <div class="col-lg-4 col-md-6">
                            <div class="single-item-style-four">
                                <div class="single-item-head d-flex align-items-center">
                                    <div class="icon"><i class="fab fa-servicestack"></i></div>
                                    <h5 class="item-title">Best for travel</h5>
                                </div>
                                <div class="content">
                                    <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl</p>
                                </div>
                            </div>
                        </div><!--benefits-item end -->
                                            <div class="col-lg-4 col-md-6">
                            <div class="single-item-style-four">
                                <div class="single-item-head d-flex align-items-center">
                                    <div class="icon"><i class="fas fa-car"></i></div>
                                    <h5 class="item-title">marriage day</h5>
                                </div>
                                <div class="content">
                                    <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl</p>
                                </div>
                            </div>
                        </div><!--benefits-item end -->
                                    </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

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
                          <h5 class="course-title"><a href="car-details/audi-premium.html">{{ $car_info->car_name }}</a></h5>
                          <p>{{ $car_info->description }}</p>

                          <div class="btn-area d-flex justify-content-between">
                            <a href="{{ url('/car-detail') }}/{{ $car_info->id }}" class="simple-btn">View
                              Details</a>
                              <a href="#" class="simple-btn" data-cid="20" data-toggle="modal"
                              data-target="#reservation">Rent Now</a>
                            </div>
                          </div>
                          <div class="course-item-bottom">
                            <ul class="course-review-list d-flex">
                              <li><i class="fa fa-car"></i><span
                                class="course-love-num">{{ $car_info->chassis_no }}</span></li>
                                <li><i class="fa fa-tachometer"></i><span
                                  class="course-love-num">{{ $car_info->car_speed }}</span></li>
                                  <li><i class="fa fa-sliders"></i><span
                                    class="course-love-num">{{ $car_info->car_name }}</span></li>
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
                                <form class="reservation-form" method="post"
                                      action="http://rifat636.thesoftking.com/renten/car-reserve/id">
                                    <input type="hidden" name="_token" value="AZLoM14kwMBJtpnpE3rSH1XezLn6653bC7qLnTt8">                                    <div class="content-block">
                                        <h3 class="title m-4 text-center">select duration</h3>

                                        <input class="form-control form-control-lg mb-3" type="hidden" name="id"
                                               id="some">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Pickup Date</label>
                                                <input form-control type='date' name="pickup_date" class='form-control '
                                                       required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Drop Off Date</label>
                                                <input form-control type='date' name="drop_off_date"
                                                       class='form-control has-icon datepicker-here'
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-block">
                                        <h3 class="title m-4 text-center">personal information</h3>
                                        <div class="row">
                                            <div class="col-lg-6 form-group">
                                                <input class="form-control" type="text" name="name" placeholder="Name" required>
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <input class="form-control" type="tel" name="phone" placeholder="Phone" required>
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <input class="form-control" type="text" name="city" placeholder="City" required>
                                            </div>
                                            <div class="col-lg-12 form-group">
                                                <input class="form-control" type="text" name="address" placeholder="Full Address" required>
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

    <!-- driver start -->
    <section class="teachers-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="section-title">Our Expert Driver</h2>
                        <p>Augue urna molestie mi adipiscing vulputate pede sedmassa Praesquam massa, sodales velit turpis.</p>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="teacher-slider-one owl-carousel">

                @foreach ($all_driver_info as $driver_info)
                  <div class="teacher-single text-center">
                    <div class="teacher-thumb">
                      <img src="#"
                      alt="{{ $driver_info->driver_name }}">
                    </div>
                    <div class="teacher-content">
                      <h4 class="teacher-name"><a
                        href="{{ url('/driver-detail') }}/{{ $driver_info->id }}">{{ $driver_info->driver_name }}</a>
                      </h4>
                      <span class="teacher-designation">Experience: {{ $driver_info->experience }}</span><br>
                      <span class="teacher-designation">Age: {{ $driver_info->birth_date }}</span>
                    </div>
                  </div>
                  <!-- teacher-single end-->
                  @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- driver end -->

    <!-- achievement-section start -->
    <section class="achievement-section section-padding section-overlay"
             style="background-image: url(assets/user/img/frontEnd/counter_image.jpg);">
        <div class="container">
            <div class="section-header text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="section-title">Our Achievements</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text</p>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="counter-item text-center">
                                <i class="fas fa-car"></i>
                                <p>Total Car</p>
                                <span class="counter">{{ $all_car_info->count() }}</span><span>+</span>
                            </div>
                        </div><!-- counter-item end -->
                          <div class="col-lg-3 col-6">
                            <div class="counter-item text-center">
                                <i class="fas fa-user"></i>
                                <p>Happy Customer</p>
                                <span class="counter">{{ $all_user->count() }}</span><span>+</span>
                            </div>
                        </div><!-- counter-item end -->
                          <div class="col-lg-3 col-6">
                            <div class="counter-item text-center">
                                <i class="fas fa-clock"></i>
                                <p>Travel Time</p>
                                <span class="counter">5466</span><span>+</span>
                            </div>
                        </div><!-- counter-item end -->
                          <div class="col-lg-3 col-6">
                            <div class="counter-item text-center">
                                <i class="fas fa-check"></i>
                                <p>Solution</p>
                                <span class="counter">7657</span><span>+</span>
                            </div>
                        </div><!-- counter-item end -->

                </div>
            </div>
        </div>
    </section>
    <!-- achievement-section end -->

    <!-- sight start -->
    <section class="teachers-section section-padding section-bg">
        <div class="container">
            <div class="section-header text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="section-title">Awesome Sights Place</h2>
                        <p>Augue urna molestie mi adipiscing vulputate pede sedmassa Praesquam massa, sodales velit turpis</p>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="place-slider owl-carousel">
                    <div class="post-item">
                    <div class="post-thumb">
                        <a href="popular-location/21.html"><img
                                    src="assets/user/img/sights/201909011057_Beach-Resort-HD-Picture.jpg" alt="post-image"></a>
                    </div>
                    <div class="post-content">
                        <h5 class="post-title"><a
                                    href="popular-location/21.html">Bagha Port</a>
                        </h5>
                        <a href="popular-location/21.html"
                           class="simple-btn">See More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- post-item end -->
                <div class="post-item">
                    <div class="post-thumb">
                        <a href="popular-location/20.html"><img
                                    src="assets/user/img/sights/201909011038_26024044_1544674878954721_8334393671242773815_o_1544674878954721.jpg" alt="post-image"></a>
                    </div>
                    <div class="post-content">
                        <h5 class="post-title"><a
                                    href="popular-location/20.html">Cent Martin</a>
                        </h5>
                        <a href="popular-location/20.html"
                           class="simple-btn">See More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- post-item end -->
                <div class="post-item">
                    <div class="post-thumb">
                        <a href="popular-location/19.html"><img
                                    src="assets/user/img/sights/201908241101_Lalbagh-Fort-Historical-Place-in-Dhaka-Bangladesh.jpg" alt="post-image"></a>
                    </div>
                    <div class="post-content">
                        <h5 class="post-title"><a
                                    href="popular-location/19.html">Place Name</a>
                        </h5>
                        <a href="popular-location/19.html"
                           class="simple-btn">See More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- post-item end -->
                <div class="post-item">
                    <div class="post-thumb">
                        <a href="popular-location/18.html"><img
                                    src="assets/user/img/sights/201908241136_Bagan-Myanmar-1.jpg" alt="post-image"></a>
                    </div>
                    <div class="post-content">
                        <h5 class="post-title"><a
                                    href="popular-location/18.html">Sylhet</a>
                        </h5>
                        <a href="popular-location/18.html"
                           class="simple-btn">See More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- post-item end -->
                                                                    <div class="post-item">
                                <div class="post-thumb">
                                    <a href="popular-location/17.html"><img
                                                src="assets/user/img/sights/201908241109_sajek%20valley%203.jpg" alt="post-image"></a>
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title"><a
                                                href="popular-location/17.html">sajek valley</a>
                                    </h5>
                                    <a href="popular-location/17.html"
                                       class="simple-btn">See More<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- post-item end -->
                                                                    <div class="post-item">
                                <div class="post-thumb">
                                    <a href="popular-location/16.html"><img
                                                src="assets/user/img/sights/201908241043_1517594769_6.jpg" alt="post-image"></a>
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title"><a
                                                href="popular-location/16.html">cox&#039;s bazar</a>
                                    </h5>
                                    <a href="popular-location/16.html"
                                       class="simple-btn">See More<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- post-item end -->
                                    </div>

            </div>
        </div>
        </div>
    </section>
    <!-- sight end -->


     <!-- car Order form -->


   @endsection
