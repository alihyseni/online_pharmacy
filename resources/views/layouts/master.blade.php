<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>

        <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

        {{--Bootstrap Reset--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-reboot.min.css" >
        <!-- Animate.css -->
        <link rel="stylesheet" href={{asset('css/animate.css')}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <!-- Ion Icon Fonts-->
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <!-- Flexslider  -->
        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
        <!-- Flaticons  -->
        <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
        <!-- Theme style  -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}" >
         
        @yield('styles')
    </head>

    <body>
    <div class="colorlib-loader"></div>

    <div id="page">
        @include('layouts.header')
    </div>
        @yield('content')

        @include('layouts.footer')

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- jQuery -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- popper -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- bootstrap 4.1 -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- jQuery easing -->
        <script src="j{{asset('js/jquery.easing.1.3.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <!-- Flexslider -->
        <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
        <!-- Owl carousel -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
        <!-- Stellar Parallax -->
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <!-- Main -->
        <script src="{{asset('js/main.js')}}"></script>

        @yield('scripts')
    </body>
</html>