<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/images/smp_logo.png')}}">

    <!-- App css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />

</head>

{{-- <body class="loading"> --}}
<body>
    <!-- Pre-loader -->
    {{-- <div id="preloader">
        <div id="status">
            <div class="bouncing-loader"><div ></div><div ></div><div ></div></div>
        </div>
    </div> --}}
    <!-- End Preloader-->
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" id="left-side-menu-container" data-simplebar>
                <!-- LOGO -->
                <x-side-bar-logo></x-side-bar-logo>
                <x-side-bar></x-side-bar>
                <!-- End Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <x-top-bar></x-top-bar>

                <!-- Start Content-->
                <div class="container-fluid">
                    <x-alert name="success" type="success"></x-alert>
                    @yield('content')
                </div> <!-- container -->

            </div> <!-- content -->

            @include('partials.layouts.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- bundle -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>
