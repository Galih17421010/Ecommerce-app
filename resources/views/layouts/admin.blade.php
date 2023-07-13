<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    {{-- <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT"> --}}
    <title>Ecommerce Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/colors/palette-gradient.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    @yield('css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    @include('partials.sidebar')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                
                @yield('content')

            </div>
            
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2023 
                <a class="text-bold-800 grey darken-2" href="#" target="_blank">Ecommerce </a></span>
                <span class="float-md-right d-none d-lg-block">Galih Agus Saputra <i class="feather icon-github"></i></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/jquery.knob.min.js')}}"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/extensions/knob.js')}}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{ asset('backend/app-assets/data/jvector/visitor-data.js')}}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/chart.min.js')}}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/unslider-min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/colors/palette-climacon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/simple-line-icons/style.min.css')}}">
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('backend/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    @yield('js')

</body>
<!-- END: Body-->

</html>