<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RCH</title>

    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('css/theme/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-webfont.woff')}}">
    <link rel="stylesheet" href="{{asset('css/theme/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Styles -->
    
</head>

<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')


</body>
<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/theme/jquery-1.4.3.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/theme/jquery.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/popper.min.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/jquery.fancybox.pack.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/jquery.fancybox-media.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/portfolio/jquery.quicksand.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/portfolio/setting.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/jquery.flexslider.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/animate.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('js/theme/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/theme/owl.carousel.min.js')}}"></script>
</html>