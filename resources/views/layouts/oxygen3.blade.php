<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.7/css/uikit.min.css"/>
	<link rel="stylesheet" href="{{ asset('/js/leaflet/leaflet.css') }}"/>
  	<script src="{{ asset('/js/leaflet/leaflet.js') }}"></script>
	<style>
	body {
		background-color: #f8f8f8;
	}
	.uk-divider-small::after {
    	border: 2px solid #1e87f0;
	}
	@media screen and (min-width: 960px) {
		.inverse-color {
			color: #f8f8f8;
		}
	}
	</style>
</head>
<body">
	
	@include('layouts.partials.navSticky')
        @yield('content')
	@include('layouts.partials.modalnav')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.7/js/uikit.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.7/js/uikit-icons.min.js" type="text/javascript"></script>
</body>
</html>