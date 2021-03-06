<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPENIN | @yield('title')</title>

     <!-- General CSS Files -->
     <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

      <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">

     <!-- Template CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo.jpg') }}">
</head>

<body>
    <!-- Main Navbar Container -->
    @include('layouts.backend.navbar')

    <div class="mt-5">
        @yield('content')
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
