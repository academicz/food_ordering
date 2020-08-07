<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://use.fontawesome.com/015f09638c.js"></script>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">

    <!-- ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/admin/nifty.min.css') }}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('css/admin/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('css/admin/demo/nifty-demo.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/admin/custom.css') }}" rel="stylesheet">

    <!--Morris.js [ OPTIONAL ]-->
    <link href="{{ asset('plugins/morris-js/morris.min.css') }}" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="{{ asset('plugins/magic-check/css/magic-check.min.css') }}" rel="stylesheet">


    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="{{ asset('js/admin/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/admin/nifty.min.js') }}"></script>

@yield('header')

<!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{{ asset('js/admin/demo/nifty-demo.min.js') }}"></script>


    <!--Morris.js [ OPTIONAL ]-->
    <script src="{{ asset('plugins/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/morris-js/raphael-js/raphael.min.js') }}"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="{{ asset('js/admin/demo/dashboard.js') }}"></script>


    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg footer-fixed">

    <!--NAVBAR-->
@include('Admin.Includes.header')
<!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <div id="content-container">

            @yield('contents')

        </div>
        <!--END CONTENT CONTAINER-->



        <!--ASIDE-->
    @include('Admin.Includes.aside')
    <!--END ASIDE-->


        <!--MAIN NAVIGATION-->
    @include('Admin.Includes.nav')
    <!--END MAIN NAVIGATION-->

    </div>



    <!-- FOOTER -->
@include('Admin.Includes.footer')
<!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>

</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


<!-- SETTINGS -->
@include('Admin.Includes.settings')
<!-- END SETTINGS -->

@yield('scripts')

<!-- moment datatime api -->
<script src="{{ asset('js/admin/moment.min.js') }}"></script>
<script src="{{ asset('js/moment-timezone.min.js') }}"></script>

<!-- Vue -->
<script src="{{ asset('js/admin/app.js') }}"></script>
<script>
    $("#notificationDropDown").on('click', function (e) {
        e.stopPropagation();
    });

</script>

</body>


</html>
