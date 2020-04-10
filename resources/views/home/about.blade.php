@extends('home.app')
@section('title')
  About
@endsection
@section('content')
  <style>

      .mission-vission-section:before {
          position: absolute;
          content: '';
          bottom: 0;
          left: 7%;
          width: 750px;
          height: 640px;
          background-image: url({{ asset('frontend/assets/user/img/frontEnd/mission_image.jpg') }});
          background-position: center;
          background-size: contain;
          background-repeat: no-repeat;
      }
  </style>
  <!-- banner-section start -->
  <section class="single-banner contact-one-banner"
           style="background-image: url({{ asset('frontend/assets/user/img/frontEnd/inner-page-bg.jpg') }});">
      <div class="banner-content-area">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-10">
                      <div class="banner-content text-center">
                          <h1 class="banner-title">ABOUT US</h1>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- banner-section end -->

  <!-- about-section start -->
  <section class="about-section section-padding about-section-bg" style="background-image: url({{ asset('frontend/assets/user/img/frontEnd/about_image.jpg') }});">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="content">
                      <h2 class="section-title">We are Best Car Rental Company to Find Car</h2>
                      <p>Lorem ipsum dolor sit amet, sit lectus risus dis aptent, vitae odio nec. Justo volutpat rutrum purus, augue cursus, turpis felis nonummy nisl. Vel justrus sed volutpat, tristique tempor scelerisque dictum dui donec urna, consequat scelerisque eu ut, ornare ut. Rutrum egetLorem ipsum dolor sit amet,</p>
                      <a href="contact.html" class="cmn-button">Contact Us</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- about-section end -->

  <!-- mission-vission-section start -->
  <section class="mission-vission-section">
      <div class="container">
          <div class="row justify-content-end">
              <div class="col-lg-6">
                  <div class="content">
                      <h2 class="section-title">Our Mission And Vision</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. The concept lorem Ipsum has been the industry standard dummy text.</p>
                      <ul class="mission-vission-list">
                        <li><i class="fa fa-check-circle"></i>Lorem ipsum nullam tortor consequat amet felis dapibus</li>
                        <li><i class="fa fa-check-circle"></i>Non ullamcorper nisi duis ut lobortis inceptos sagittis venenatis</li>
                        <li><i class="fa fa-check-circle"></i>Cubilia quisque velit primis rhoncus augue id consequat semper rutrum</li>
                        <li><i class="fa fa-check-circle"></i>Donec potenti egestas quis in libero enim aliquam</li>
                        <li><i class="fa fa-check-circle"></i>venenatis netus ultricies porta eget euismod consequat vivamus</li>
                        <li><i class="fa fa-check-circle"></i>Auctor aptent purus condimentum curabitur</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- mission-vission-section end -->


  <!-- achievement-section start -->
  <section class="achievement-section section-padding section-overlay"
           style="background-image: url({{ asset('frontend/assets/user/img/frontEnd/counter_image.jpg') }});">
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
                              <span class="counter">5466</span><span>+</span>
                          </div>
                      </div><!-- counter-item end -->
                                          <div class="col-lg-3 col-6">
                          <div class="counter-item text-center">
                              <i class="fas fa-user"></i>
                              <p>Happy Customer</p>
                              <span class="counter">6578</span><span>+</span>
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

  <!-- testimonial-section start -->
  <section class="testimonial-section section-padding">
      <div class="container">
          <div class="section-header text-center">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <h2 class="section-title">What Our Client Say</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                  </div>
              </div>
          </div>
          <div class="section-wrapper">
              <div class="owl-carousel testmonial-slider">
                                          <div class="testimonial-item style-two">
                          <div class="testimonial-head d-flex align-items-center">
                              <div class="thumb"><img
                                          src="{{ asset('frontend/assets/user/img/testimonial/201907010947_1.jpg') }}"
                                          alt="testimonial-image"></div>
                              <div class="client-details">
                                  <h4 class="name">john due</h4>
                                  <span class="designation">Social worker</span>
                              </div>
                          </div>
                          <div class="testimonial-conetnt">
                              <p>Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.</p>
                              <div class="client-star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                          </div>
                      </div><!-- testimonial-item end -->
                                          <div class="testimonial-item style-two">
                          <div class="testimonial-head d-flex align-items-center">
                              <div class="thumb"><img
                                          src="assets/user/img/testimonial/201907010913_1.jpg"
                                          alt="testimonial-image"></div>
                              <div class="client-details">
                                  <h4 class="name">mr achel</h4>
                                  <span class="designation">Creative Writer</span>
                              </div>
                          </div>
                          <div class="testimonial-conetnt">
                              <p>Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.</p>
                              <div class="client-star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                          </div>
                      </div><!-- testimonial-item end -->
                                          <div class="testimonial-item style-two">
                          <div class="testimonial-head d-flex align-items-center">
                              <div class="thumb"><img
                                          src="assets/user/img/testimonial/201908201117_201906130606_team2.jpg"
                                          alt="testimonial-image"></div>
                              <div class="client-details">
                                  <h4 class="name">ankush roy</h4>
                                  <span class="designation">web developer</span>
                              </div>
                          </div>
                          <div class="testimonial-conetnt">
                              <p>Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.</p>
                              <div class="client-star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                          </div>
                      </div><!-- testimonial-item end -->
                                          <div class="testimonial-item style-two">
                          <div class="testimonial-head d-flex align-items-center">
                              <div class="thumb"><img
                                          src="assets/user/img/testimonial/201908201122_201906120600_team1.jpg"
                                          alt="testimonial-image"></div>
                              <div class="client-details">
                                  <h4 class="name">mr akash</h4>
                                  <span class="designation">Blogger</span>
                              </div>
                          </div>
                          <div class="testimonial-conetnt">
                              <p>Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.</p>
                              <div class="client-star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                          </div>
                      </div><!-- testimonial-item end -->
                                          <div class="testimonial-item style-two">
                          <div class="testimonial-head d-flex align-items-center">
                              <div class="thumb"><img
                                          src="assets/user/img/testimonial/201909011016_49344573_1988476101244049_6236346866603130880_n.jpg"
                                          alt="testimonial-image"></div>
                              <div class="client-details">
                                  <h4 class="name">Lubna</h4>
                                  <span class="designation">Writer</span>
                              </div>
                          </div>
                          <div class="testimonial-conetnt">
                              <p>Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.</p>
                              <div class="client-star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                          </div>
                      </div><!-- testimonial-item end -->
                                  </div>
          </div><!-- section-wrapper end -->
      </div>
  </section>
  <!-- testimonial-section end -->
@endsection
