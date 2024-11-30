<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HBIM Jakarta | Disbud DKI Jakarta</title>

  <!-- favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo.png') }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.png') }}" />

  <!-- Fonts URL -->
  <link
    href="https://fonts.googleapis.com/css?family=Karla:400,700%7CPlayfair+Display:400,500,600,700,800,900%7CWork+Sans:300,400,500,600,700,800,900&display=swap"
    rel="stylesheet" />

  <!-- Plugins CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/hover-min.css" />
  <link rel="stylesheet" href="assets/css/muzex-icons.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div><!-- /.preloader -->
  <div class="page-wrapper">
    {{-- Navbar --}}
    @if (request()->is('/'))
      @include('layouts.sections.navbar-landing')
    @else
      @include('layouts.sections.navbar')
    @endif
    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('layouts.sections.footer')
  </div>
  <!-- /.page-wrapper -->

  <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Template JS -->

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/bootstrap-select.min.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/TweenMax.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.lettering.min.js"></script>
  <script src="assets/js/jquery.circleType.js"></script>

  <!-- Custom Scripts -->
  <script src="assets/js/theme.js"></script>
</body>

</html>
