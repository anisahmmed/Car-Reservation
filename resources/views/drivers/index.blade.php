@extends('home.app')
@section('title')
  Car | Reservation
@endsection
@section('content')
<!-- profile-section start -->
<section class="teachers-section section-padding">
    <div class="container">
      <div class="section-header text-center">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <h2 class="section-title">Profile</h2>
          </div>
          <div class="col-lg-2">
              <a href="{{ route('trip_info') }}" class="btn btn-info">View Trip Info</a>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- course-details-section start -->
@foreach ($driver_info as $driver_infos)
  @if (Auth::user()->email == $driver_infos->driver_email && Auth::user()->role_id == 2)
<section class="course-details-section section-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="entry-single-title ml-4">{{ $driver_infos->driver_name }}</h2>
            </div>
            <div class="col-lg-8">
                <div class="course-details-wrapper">
                    <div class="entry-single">
                        <div class="entry-single-thumb">
                            <div style="display: " class="img_lead"
                                 id="image_1">
                                <img style="height: 400px; width: 356px;" src="{{ asset('/uploads/driver') }}/{{ $driver_infos->driver_image }}"class="img-responsive img-thumbnail">
                            </div>
                        </div>
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
                            <h5 class="widget-title">Driver Details</h5><a href="#" data-cid="20" data-toggle="modal"
                            data-target="#driverinfo" class="widget-title">Edit</a>
                            <ul>
                                <li>
                                    <p>Name</p>
                                    <p>
                                        <span class="course-love-num">{{ $driver_infos->driver_name }}</span>
                                    </p>
                                </li>
                                <li>
                                    <p>Email</p>
                                    <p>
                                        <span class="course-love-num">{{ $driver_infos->driver_email }}</span>
                                    </p>
                                </li>
                                <li>
                                    <p>Contact</p>
                                    <p>
                                        <span class="course-love-num">{{ $driver_infos->driver_contact }}</span>
                                    </p>
                                </li>
                                @php
                                  $years = \Carbon\Carbon::parse($driver_infos->birth_date)->age;
                                @endphp
                                <li>
                                    <p>Age</p>
                                    <p><span class="course-love-num">{{ $years }}</span></p>
                                </li>
                                <li>
                                    <p>Permanent Address</p>
                                    <p><span class="course-love-num">{{ $driver_infos->driver_permanent_address }}</span></p>
                                </li>
                                <li>
                                    <p>Present Address</p>
                                    <p><span class="course-love-num">{{ $driver_infos->driver_present_address }}</span></p>
                                </li>
                                <li>
                                    <p>Driving License No</p>
                                    <p><span class="course-love-num">{{ $driver_infos->driver_licence_no }}</span></p>
                                </li>
                                <li>
                                    <p>Experience</p>
                                    <p><span class="course-love-num">{{ $driver_infos->experience }} Year</span></p>
                                </li>
                            </ul>

                            <div class="modal modal-danger fade" id="driverinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h4 class="modal-title text-center" id="myModalLabel">Driver Information</h4>
                                      </div>
                                      <!-- reservation-section start -->

                                      <div class="container">
                                          <div class="row">
                                              <div class="col-lg-12">
                                                  <div class="reservation-details-area">

                                                      <div class="content">
                                                          <form class="reservation-form" method="post" action="{{ route('driver_info_update') }}" enctype="multipart/form-data">

                                                            @csrf
                                                              <h3 class="title m-4 text-center"><img style="height: 200px; width: 190px;" class="m-4 text-center" src="{{ asset('/uploads/driver') }}/{{ $driver_infos->driver_image }}" alt="{{ $driver_infos->driver_name }}"></h3>
                                                              <div class="form-group text-center">
                                                                <label for="image_upload">Upload Image</label>
                                                                <input type="file" name="driver_image" value="{{ $driver_infos->driver_image }}">
                                                                {{-- <i class="fas fa-upload">Upload</i> --}}
                                                              </div>

                                                              <div class="content-block">
                                                                  <h3 class="title m-4 text-center">Detail Informations</h3>
                                                                  <div class="row">
                                                                      <div class="col-lg-6 form-group">
                                                                          <input class="form-control" type="text" name="driver_name" value="{{ $driver_infos->driver_name }}" placeholder="Name" readonly>
                                                                          <input class="form-control" type="hidden" name="id" value="{{ $driver_infos->id }}">
                                                                      </div>
                                                                      <div class="col-lg-6 form-group">
                                                                          <input class="form-control" type="email" name="driver_email" value="{{ $driver_infos->driver_email }}" placeholder="Email Address" readonly>
                                                                      </div>
                                                                      <div class="col-lg-6 form-group">
                                                                          <input class="form-control" type="number" name="driver_contact" value="{{ $driver_infos->driver_contact }}" placeholder="Phone">
                                                                      </div>
                                                                      <div class="col-lg-6 form-group">
                                                                          <input class="form-control" type="date" name="birth_date" value="{{ $driver_infos->birth_date }}" placeholder="Date of Birth">
                                                                      </div>
                                                                      <div class="col-lg-6 form-group">
                                                                          <textarea name="driver_permanent_address" class="form-control" rows="3" placeholder="Permanent Address">{{ $driver_infos->driver_permanent_address }}</textarea>
                                                                      </div>
                                                                      <div class="col-lg-6 form-group">
                                                                          <textarea name="driver_present_address" class="form-control" rows="3" placeholder="Present Address">{{ $driver_infos->driver_present_address }}</textarea>
                                                                      </div>
                                                                      <div class="col-lg-6 form-group">
                                                                          <input class="form-control" type="text" name="driver_licence_no" value="{{ $driver_infos->driver_licence_no }}" placeholder="Driving License Number">
                                                                      </div>
                                                                      <div class="col-lg-6 form-group">
                                                                          <input class="form-control" type="number" name="experience" value="{{ $driver_infos->experience }}" placeholder="Experience">
                                                                      </div>

                                                                  </div>
                                                              </div>

                                                              <div class="modal-footer" style="border-top: 1px solid #f3f1f1;">
                                                                  <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                  <button type="submit" class="btn btn-success">Save Change</button>
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
                        <!-- widget end -->

                        <div class="widget share-link-widget">
                            <h5 class="widget-title">Share This Information</h5>
                            <ul class="d-flex">
                                <li><a href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text=my%20share%20text&amp;url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/share?url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="http://pinterest.com/pin/create/link/?url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium&amp;title=my%20share%20text&amp;summary=dit%20is%20de%20linkedin%20summary"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="https://www.instagram.com/?url=http%3A%2F%2Frifat636.thesoftking.com%2Frenten%2Fcar-details%2Faudi-premium"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>


                        {{-- <div class="widget tags-widget">
                            <h5 class="widget-title">Car Category</h5>
                            <div class="tags">
                                <a class="widget-tag" href="../cars/hatchback.html">Hatchback</a>
                                <a class="widget-tag" href="../cars/volkswagen.html">Volkswagen</a>
                                <a class="widget-tag" href="../cars/audi-prime.html">Audi Prime</a>
                                <a class="widget-tag" href="../cars/honda-civic.html">Honda Civic</a>
                            </div>
                        </div> --}}
                        {{-- <div class="widget tags-widget">
                            <a href="http://google.com/" data-adid="6" class="advertise" target="_blank">
                                <img src="../assets/user/img/aads/201907010732_ad1.png" alt="image">
                            </a>
                        </div> --}}


                    </div>
                </div>
        </div>
    </div>
</section>
@endif
@endforeach
    <!-- events-section end -->

@endsection
