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
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/argon.css?v=1.1.0') }}" type="text/css">
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #printable, #printable * {
                visibility: visible;
            }
            #printable {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>

<body>
<!-- Sidenav -->
@include('base_admin_sidebar')
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('base_admin_topnav')
    <!-- Content -->
    @yield('content')
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ url('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/vendor/js-cookie/js.cookie.js') }}"></script>
<script src="{{ url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{ url('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ url('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<!-- Axios -->
<script src="{{ url('assets/js/vendor/axios/axios.min.js') }}"></script>
<!-- Argon JS -->
<script src="{{ url('assets/js/argon.js?v=1.1.0') }}"></script>
<!-- Admin Script -->
<script>
    $('#logout').on('click', function () {
        axios.post('/logout').then(() => {
            window.location.href = '/login'
        })
    })
</script>
<!-- Page JS -->
@yield('page-js')
</body>

</html>