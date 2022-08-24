<!doctype html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/style.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('website/fonts/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/jquery.fancybox.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{('css/style.css')}}"/>

</head>

<body>

@php  $currentURL = url()->current();    @endphp

@if( $currentURL == url('/'))
    @include('website.partials.header')

@endif


@yield('content')


@include('website.partials.footer')

<script src="{{asset('website/js/vendor/jquery.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('website/js/vendor/bootstrap.js')}}"></script>
<script src="{{asset('website/js/vendor/slick.js')}}"></script>
<script src="{{asset('website/js/vendor/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('website/js/custom.js')}}"></script>
@yield('scripts')
</body>
</html>





