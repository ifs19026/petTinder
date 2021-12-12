<!doctype html>
<html class="no-js" lang="en">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pet Tinder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


		<!-- style here -->
        <link rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('style/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/owl.carousel.min.style') }}">
        <link rel="stylesheet" href="{{ asset('style/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('style/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('style/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('style/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('style/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('style/default.css') }}">
        <link rel="stylesheet" href="{{ asset('style/style.css') }}">
        <link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            .forgot{
            align-items: center;
            }

            .card{
            height: auto;
            margin: 50px auto 150px auto;
            width: auto;
            }
        </style>

    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <img src="img/preloader.gif" alt="">
        </div>
        <!-- Preloader-end -->

        <!-- JS here -->
        <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        @yield('content')