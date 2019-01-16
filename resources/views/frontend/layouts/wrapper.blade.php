<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="@yield('meta_description', 'Football Social ')">
    <meta name="author" content="@yield('meta_author', 'Mudassir Adili')">
    <meta name="author" content="@yield('meta_author', 'Isha Labbo')">
    <meta name="author" content="@yield('meta_author', 'Abdulraheem Abdulrasheed')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') - {{ config('app.name', 'Football Social') }}</title>
    <!-- Styles -->
    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
	<link href="{{ asset('css/fonts.min.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-reboot.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/dist/css/bootstrap-grid.css')}}">
    <!-- Our Stylesheet -->
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    
    
</head>

<body class="landing-page">
    <!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>

<!-- ... end Preloader -->
<div class="content-bg-wrap"></div>

    @yield('body')
     <!-- Scripts -->
    <!-- JS Scripts -->
<script src="{{ asset('js/jquery-3.2.1.js')}}"></script>
<script src="{{ asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('js/jquery.matchHeight.js')}}"></script>
<script src="{{asset('js/svgxuse.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.js')}}"></script>
<script src="{{asset('js/Headroom.js')}}"></script>
<script src="{{asset('js/velocity.js')}}"></script>
<script src="{{asset('js/ScrollMagic.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/material.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/smooth-scroll.js')}}"></script>
<script src="{{asset('js/selectize.js')}}"></script>
<script src="{{asset('js/swiper.jquery.js')}}"></script>
<script src="{{asset('js/moment.js')}}"></script>
<script src="{{asset('js/daterangepicker.js')}}"></script>
<script src="{{asset('js/simplecalendar.js')}}"></script>
<script src="{{asset('js/fullcalendar.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.js')}}"></script>
<script src="{{asset('js/ajax-pagination.js')}}"></script>
<script src="{{asset('js/Chart.js')}}"></script>
<script src="{{asset('js/chartjs-plugin-deferred.js')}}"></script>
<script src="{{asset('js/circle-progress.js')}}"></script>
<script src="{{asset('js/loader.js')}}"></script>
<script src="{{asset('js/run-chart.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/jquery.gifplayer.js')}}"></script>
<script src="{{asset('js/mediaelement-and-player.js')}}"></script>
<script src="{{asset('js/mediaelement-playlist-plugin.min.js')}}"></script>
<script src="{{asset('js/ion.rangeSlider.js')}}"></script>

<script src="{{asset('js/base-init.js')}}"></script>
<script defer src="fonts/fontawesome-all.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
