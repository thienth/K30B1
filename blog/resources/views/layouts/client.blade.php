<!DOCTYPE html>
<!-- saved from url=(0065)http://massive.markup.themebucket.net/mp-index-photography-2.html -->
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="https://caodang.fpt.edu.vn/wp-content/uploads/xcropped-logo-fpt-192x192.png.pagespeed.ic.0CZgbgb8x4.webp">

    <title>Sinh viên FPT - Polytechnic</title>

    <!--common style-->
{{--    <link href="{{asset('client/css')}}" rel="stylesheet" type="text/css">--}}

<!-- inject:css -->
    <link rel="stylesheet" href="{{asset('client/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendor/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendor/elasic-slider/elastic.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendor/iconmoon/linea-icon.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendor/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendor/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendor/owl-carousel/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/default-theme.css')}}">
    <!-- endinject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('client/assets/vendor/backward/html5shiv.js')}}"></script>
    <script src="{{asset('client/vendor/backward/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="" style="">

<!--  preloader start -->

<!-- preloader end -->


<div class="wrapper">

    <!--header start-->
    <header class="l-header">

        <div id="sticky-wrapper" class="l-navbar-wrapper" style="height: 100px;"><div class="l-navbar l-navbar_expand l-navbar_t-light js-navbar-sticky" style="">
                <div class="container">
                    <nav class="menuzord js-primary-navigation menuzord-responsive" role="navigation" aria-label="Primary Navigation">
                        {{--<a href="javascript:void(0)" class="showhide" style="">--}}
                            {{--<em></em>--}}
                            {{--<em></em>--}}
                            {{--<em></em>--}}
                        {{--</a>--}}

                        <!--logo start-->
                        <a href="{{route('homepage')}}" class="logo-brand">
                            <img class="retina" src="{{asset('images/logo.png')}}" alt="FPT Polytechnic" style="height: 80px; width: auto;">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu menuzord-right c-nav_s-standard menuzord-indented scrollable" style="max-height: 400px;">
                            @foreach($majors as $navMj)
                                <li class="@if($loop->index == 0)  @endif"><a href="{{$navMj->getSlugUrl()}}">{{$navMj->name}}</a>
                                    <ul class="dropdown" style="right: auto;">
                                        @foreach($navMj->getChildSubject() as $navChild)
                                        <li><a href="{{$navChild->getSlugUrl()}}">{{$navChild->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                                    <div class="megamenu megamenu-quarter-width navbar-search" style="right: 0px; display: none;">
                                        <form role="searchform" action="{{route('client.search')}}">
                                            <input type="text" class="form-control" placeholder="Search Here" name="keyword">
                                        </form>
                                    </div>
                                </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!--header end-->

    <!--body content start-->
    <section class="body-content ">

        @yield('content')
    </section>
    <!--body content end-->

    <!--footer start -->
    <footer id="footer" class="gray footer-3">
        <div class="container">

            <div class="f-logo-center">
                <a href="{{route('homepage')}}" class="footer-logo">
                    <img class="retina" src="{{asset('images/logo.png')}}" alt="" style="height: 52px; width: auto;">
                </a>
            </div>
            <!--<div class="sub-title">THE ULTIMATE THEME WITH MASSIVE COLLECTION</div>-->

            <div class="col-md-6">
                <div class="copyright">
                    © FPT Polytechnic.
                </div>
                <div class="copyright-sub-title text-uppercase">

                </div>
            </div>
            <div class="col-md-6">
                <div class="social-link pull-right circle ">
                    <a href="https://www.facebook.com/fpt.poly/"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/user/FPTPoly"><i class="fa fa-youtube"></i></a>
                    <a href="https://plus.google.com/101925687865682399149"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
</div>

<!-- inject:js -->
<script src="{{asset('client/vendor/modernizr/modernizr.js')}}"></script>
<script src="{{asset('client/vendor/jquery/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('client/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client/vendor/bootstrap-validator/validator.min.js')}}"></script>
<script src="{{asset('client/vendor/breakpoint/breakpoint.js')}}"></script>
<script src="{{asset('client/vendor/count-to/jquery.countTo.js')}}"></script>
<script src="{{asset('client/vendor/countdown/jquery.countdown.js')}}"></script>
<script src="{{asset('client/vendor/easing/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('client/vendor/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('client/vendor/elasic-slider/jquery.eislideshow.js')}}"></script>
<script src="{{asset('client/vendor/flex-slider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('client/vendor/gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('client/vendor/images-loaded/imagesloaded.js')}}"></script>
<script src="{{asset('client/vendor/isotope/jquery.isotope.js')}}"></script>
<script src="{{asset('client/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('client/vendor/mailchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('client/vendor/menuzord/menuzord.js')}}"></script>
<script src="{{asset('client/vendor/nav/jquery.nav.js')}}"></script>
<script src="{{asset('client/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('client/vendor/parallax-js/parallax.min.js')}}"></script>
<script src="{{asset('client/vendor/smooth/smooth.js')}}"></script>
<script src="{{asset('client/vendor/sticky/jquery.sticky.min.js')}}"></script>
<script src="{{asset('client/vendor/touchspin/touchspin.js')}}"></script>
<script src="{{asset('client/vendor/typist/typist.js')}}"></script>
<script src="{{asset('client/vendor/visible/visible.js')}}"></script>
<script src="{{asset('client/vendor/wow/wow.min.js')}}"></script>
<script src="{!! asset('global/plugins/jquery-validation/js/jquery.validate.js') !!}" type="text/javascript"></script>
<script src="{{asset('client/js/scripts.js')}}"></script>


<!-- endinject -->
@yield('js')



<a data-scroll="" class="lift-off js-lift-off lift-off_hide" href="http://massive.markup.themebucket.net/mp-index-photography-2.html#"><i class="fa fa-angle-up"></i></a></body></html>