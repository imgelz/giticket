<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gitick.id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="/frontend/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/animate.css">

    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="/frontend/css/aos.css">
    <link rel="stylesheet" href="/frontend/css/ionicons.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/frontend/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/frontend/css/flaticon.css">
    <link rel="stylesheet" href="/frontend/css/icomoon.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    @yield('css')
    <style>
        .hero-wrap .overlay{
            opacity: .3;
            background: linear-gradient(135deg, #000000 0%, #000000 100%);
        }
    </style>
  </head>
  <body>

	  @include('layouts.Frontend.navbar')
    <!-- END nav -->
    @yield('content')


    @include('layouts.Frontend.footer')



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/frontend/js/jquery.min.js"></script>
  <script src="/frontend/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/frontend/js/popper.min.js"></script>
  <script src="/frontend/js/bootstrap.min.js"></script>
  <script src="/frontend/js/jquery.easing.1.3.js"></script>
  <script src="/frontend/js/jquery.waypoints.min.js"></script>
  <script src="/frontend/js/jquery.stellar.min.js"></script>
  <script src="/frontend/js/owl.carousel.min.js"></script>
  <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
  <script src="/frontend/js/aos.js"></script>
  <script src="/frontend/js/jquery.animateNumber.min.js"></script>
  <script src="/frontend/js/bootstrap-datepicker.js"></script>
  <script src="/frontend/js/jquery.timepicker.min.js"></script>
  <script src="/frontend/js/scrollax.min.js"></script>
  <script src="/frontend/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/frontend/js/google-map.js"></script>
  <script src="/frontend/js/main.js"></script>
    @yield('js')
  </body>
</html>
