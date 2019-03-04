<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="title" content="@yield('meta_title')">
    <meta name="author" content="Geosmarone">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Geosmarone">

    <!-- Favicons -->
    <link href="{{ 'frontend/img/favicon.png' }}" rel="icon">
    <link href="{{ 'frontend/img/apple-touch-icon.png' }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ 'frontend/lib/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ 'frontend/lib/font-awesome/css/font-awesome.min.css' }}" rel="stylesheet">
    <link href="{{ 'frontend/lib/animate/animate.min.css' }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ 'frontend/css/style.css' }}" rel="stylesheet">
    <link href="{{ 'frontend/css/custom.css' }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    @yield('styles')
</head>
<body>

<!-- Header -->
<header id="header">
    @include('frontend.partials.header')
</header>

<!-- Content -->
<section id="layout-content">
    @yield('content')
</section>

<!-- Footer -->
<footer id="layout-footer">
    @include('frontend.partials.footer')
</footer>

<!-- Scripts -->

<!-- JavaScript Libraries -->
<script src="{{ asset('frontend/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/lib/bootstrap/js/bootbox.min.js') }}"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('frontend/lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('frontend/lib/superfish/superfish.min.js') }}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{ asset('frontend/contactform/contactform.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

<!-- Custom Javascript File -->
<script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>

@yield('scripts')

</body>
</html>
