<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<!-- Bootstrap stylesheet -->
<link href="{{ asset('public/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<!-- icofont -->
<link href="{{ asset('public/icofont/css/icofont.css') }}" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="{{ asset('public/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="{{ asset('public/js/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
<!-- stylesheet -->
<link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('public/custom.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>

@include('Public.Includes.header')

@yield('body')

@include('Public.Includes.footer')
<!-- jquery -->
<script src="{{ asset('public/js/jquery.2.1.1.min.js') }}" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--bootstrap select-->
<script src="{{ asset('public/js/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
<!--internal js-->
<script src="{{ asset('public/js/internal.js') }}" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="{{ asset('public/js/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<!--Gallery js code-->
<script src="{{ asset('public/js/photo-gallery.js') }}" type="text/javascript"></script>
</body>

</html>
