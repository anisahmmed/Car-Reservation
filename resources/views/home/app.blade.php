<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
      @yield('title')
    </title>


    <meta name="csrf-token" content="AZLoM14kwMBJtpnpE3rSH1XezLn6653bC7qLnTt8">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/user/img/frontEnd/icon.png') }}" type="image/x-icon">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/admin/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/user/css/fontawesome.min.css') }}">
    <!-- flaticon css link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/user/css/flaticon.css') }}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/user/css/bootstrap.min.css') }}">
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/user/css/owl.carousel.min.css') }}">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/user/css/lightcase.css') }}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/user/css/style.css') }}">
    <!-- responsive css link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/user/css/responsive.css') }}">

    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
             rel = "stylesheet">
    <link href="{{ asset('frontend/assets/admin/css/toastr.css') }}" rel="stylesheet"/>
    <script src="{{ asset('frontend/assets/admin/js/toastr.js') }}"></script>

    <!-- customs scc -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/user/css/customs.css') }}">

    <link href="{{ asset('frontend/assets/user/css/color804e.css?color=da1c36') }}" rel="stylesheet">
</head>
<body>

<!-- preloader start -->
<div id="preloader">
    <div id="loader"></div>
</div>
<!-- preloader end -->

<!--  header-section start  -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <ul class="header-company-contact">
                        <li><i class="fa fa-phone"></i>01600179287
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i> ashraf@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-5">
                  <ul class="header-user-login-regis">
                    <li>
                      {{-- @guest
                      @else
                      <li><a style="color: #fff;">{{ Auth::user()->name }}</a>
                          <ul>
                              <li>
                                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                              </li>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </ul>
                      </li>

                      @endguest --}}
                      <div class="header-select-list">
                        <select id="langSel">
                            <option style="color: black" value="en">English</option>
                            <option value="bn" style="color: black">বাংলা</option>
                        </select>
                      </div>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div><!-- header-top end -->
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="site-logo site-title" href="#"><img
                            src="{{ asset('frontend/assets/user/img/frontEnd/logo.png') }}" alt="site-logo"
                            style="max-width: 210px; max-height: 60px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ml-auto">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li><a href="{{ route('about') }}">ABOUT</a></li>
                        <li><a href="#">CARS</a></li>
                        <li><a href="{{ route('service') }}">SERVICE</a></li>
                        <li><a href="{{ route('drivers') }}">DRIVER</a></li>
                        <li><a href="#">LOCATION</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="{{ route('login_page') }}">LOGIN</a></li>

                          @guest
                          @else
                            <li class="dropdown"><a class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">{{ Auth::user()->name }}</a>
                              <ul class="dropdown-menu" role="menu">
                                <li class="dropdown">
                                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                                </form>
                              </ul>
                            </li>

                          @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </div><!-- header-bottom end -->
</header>
<!--  header-section end  -->

@yield('content')

<!-- footer-section start -->
<footer class="footer-section">
    <div class="subscribe-area section-bg">
        <div class="container">
            <div class="subscribe-block text-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="subscribe-title">Subscribe to Our Mailing Service</h3>
                        <p>There are many variations of passages of lorem Ipsum availle suffer alteration in some</p>
                        <div class="subscribe-form-area mt-4">
                            <form class="subscribe-form" action="http://rifat636.thesoftking.com/renten/subscribers" method="post">
                                <input type="hidden" name="_token" value="AZLoM14kwMBJtpnpE3rSH1XezLn6653bC7qLnTt8">                                <input type="email" name="email" id="subs-email" placeholder="Your email address">
                                <button type="submit" class="subscribe-btn">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row footer-bottom-conetnt">
                <div class="col-xl-6">
                    <div class="">
                        <p>Copyright © 2020 | All Right Reserved</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="footer-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                        <a href="https://gsuite.google.com/"><i class="fab fa-google-plus-g"></i></a>
                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-section end -->

<!-- scroll-to-top start -->
<div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
</div>
<!-- scroll-to-top end -->
@include('sweetalert::alert')



<!-- jquery js link -->
<script src="{{ asset('frontend/assets/admin/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('frontend/assets/user/js/jquery-3.3.1.min.js') }}"></script>
<!-- bootstrap js link -->
<script src="{{ asset('frontend/assets/user/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('frontend/assets/user/js/bootstrap.min.js') }}"></script>
<!-- owl carousel js link -->
<script src="{{ asset('frontend/assets/user/js/owl.carousel.min.js') }}"></script>
<!-- lightcase js link -->
<script src="{{ asset('frontend/assets/user/js/lightcase.js') }}"></script>
<!-- waypoints js link -->
<script src="{{ asset('frontend/assets/user/js/jquery.waypoints.min.js') }}"></script>
<!-- countup js link -->
<script src="{{ asset('frontend/assets/user/js/jquery.countup.min.js') }}"></script>
<!-- circle-progress js link -->
<script src="{{ asset('frontend/assets/user/js/circle-progress.min.js') }}"></script>
<!-- countdown js link -->
<script src="{{ asset('frontend/assets/user/js/jquery.countdown.js') }}"></script>
<!-- goolg-map-activate js link -->
<script src="{{ asset('frontend/assets/user/js/goolg-map-activate.js') }}"></script>
<!-- main js link -->
<script src="{{ asset('frontend/assets/user/js/main.js') }}"></script>


<script src="{{ asset('frontend/assets/user/js/sweet.js') }}"></script>


<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script language="javascript">
    $(document).ready(function () {
        $("#pickupdate").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0
        });
    });
    $(document).ready(function () {
        $("#dropoffdate").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0
        });
    });
</script>


<script>
    $(document).on('change', '#langSel', function () {
        var code = $(this).val();
        window.location.href = "http://rifat636.thesoftking.com/renten/change-lang/" + code;
    });


    $('.advertise').on('click', function(e) {
        var id = $(this).data('adid');
        $.ajax({
            headers: {"X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")},
            type: "POST",
            url: "http://rifat636.thesoftking.com/renten/advertisement-click",
            data: "id="+id,
            success: function (response) {
            }
        });

    });

</script>



    <script>
        $('#reservation').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget);
            var cid = button.data('cid');
            $('#some').val(cid);
        })
    </script>

</body>

</html>
