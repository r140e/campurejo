<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Campurejo') }}</title>

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('/theme/oxygen/css/animate.css') }}">

	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('/theme/oxygen/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">

	<!-- Uikit  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.7/css/uikit.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('/theme/oxygen/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('/theme/oxygen/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/theme/oxygen/css/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('/theme/oxygen/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
</head>
<body>
	<div class="gtco-loader"></div>
	@component('layouts.partials.nav')
        @slot('navbarModel')
			uk-navbar-transparent uk-position-top uk-position-z-index
        @endslot
    @endcomponent
    @yield('content')
	@include('layouts.partials.sponsors')
	@include('layouts.partials.footer')
	@include('layouts.partials.modalnav')

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
    <!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js"></script>
	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="{{ asset('/theme/oxygen/js/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('/theme/oxygen/js/magnific-popup-options.js') }}"></script>
	<!-- UIkit -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.7/js/uikit.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.7/js/uikit-icons.min.js" type="text/javascript"></script>
	<!-- Main -->
	<script src="{{ asset('/theme/oxygen/js/main.js') }}"></script>
</body>
</html>