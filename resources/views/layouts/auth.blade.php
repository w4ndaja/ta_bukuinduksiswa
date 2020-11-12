<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{asset("assets/images/smp_logo.png")}}">

        <!-- App css -->
        <link href="{{asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("assets/css/app.min.css")}}" rel="stylesheet" type="text/css" id="light-style" />

    </head>

    <body class="authentication-bg">

        @yield("content")
        <!-- end page -->

        <footer class="footer footer-alt">
            {{now()->format('Y')}} © {{config('school-identity.name')}}
        </footer>

        <!-- bundle -->
        <script src="{{asset("assets/js/vendor.min.js")}}"></script>
        <script src="{{asset("assets/js/app.min.js")}}"></script>

    </body>
</html>
