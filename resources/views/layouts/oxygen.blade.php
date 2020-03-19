<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="theme/oxygen/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="theme/oxygen/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="theme/oxygen/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="theme/oxygen/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="theme/oxygen/css/owl.carousel.min.css">
	<link rel="stylesheet" href="theme/oxygen/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="theme/oxygen/css/style.css">

	<!-- Modernizr JS -->
	<script src="theme/oxygen/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div id="page">
	@include('layouts.partials.nav')
        @yield('content')
	@include('layouts.partials.footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
    </div>
    	<!-- jQuery -->
	<script src="theme/oxygen/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="theme/oxygen/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="theme/oxygen/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="theme/oxygen/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="theme/oxygen/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="theme/oxygen/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="theme/oxygen/js/jquery.magnific-popup.min.js"></script>
	<script src="theme/oxygen/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="theme/oxygen/js/main.js"></script>
</body>
</html>