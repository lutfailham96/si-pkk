<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>SI PKK | @yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ url('assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/argon.css?v=1.1.0') }}" type="text/css">
</head>

<body class="bg-default">
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--9 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                @yield('main-card')
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="py-5" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2020 <a href="https://www.sttrcepu.ac.id" class="font-weight-bold ml-1" target="_blank">STTR Cepu</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="https://www.pcmgroup.my.id" class="nav-link" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.pcmgroup.my.id/license" class="nav-link" target="_blank">License</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ url('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/vendor/js-cookie/js.cookie.js') }}"></script>
<script src="{{ url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
<!-- Argon JS -->
<script src="{{ url('assets/js/argon.js?v=1.1.0') }}"></script>
</body>

</html>