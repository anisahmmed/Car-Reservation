@extends('home.app')
@section('title')
  Drivers
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
                          <h1 class="banner-title">Our Driver</h1>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- banner-section end -->



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
              <div class="row mt-mb-15">
                @foreach ($all_driver_info as $drivers)
                <div class="col-lg-3 col-sm-6">
                  <div class="teacher-single text-center">
                    <div class="teacher-thumb">
                      <img src="{{ asset('uploads/driver') }}/{{ $drivers->driver_image }}"
                      alt="{{ $drivers->driver_name }}">
                    </div>
                    <div class="teacher-content">
                      <h4 class="teacher-name"><a href="{{ url('/driver-detail') }}/{{ $drivers->id }}">{{ $drivers->driver_name }}</a></h4>
                      <span class="teacher-designation">Experience: {{ $drivers->experience }} years</span><br>
                      <span class="teacher-designation">Age: {{ \Carbon\Carbon::parse($drivers->birth_date)->age }}</span>
                    </div>
                  </div>
                </div><!-- teacher-single end-->
              @endforeach
              </div>
            </div>
          <nav class="d-pagination" aria-label="Page navigation example">
              <ul class="pagination justify-content-center">

              </ul>
          </nav>
      </div>
  </section>
  <!-- driver end -->
@endsection
