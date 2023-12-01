<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Tasaka Software</title>

        <!-- Favicons -->
        <link href="{{ asset('img/logo.jpeg') }}" class="rounded-5" rel="icon">
        <link href="{{ asset('Vesperr') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('Vesperr') }}/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="{{ asset('Vesperr') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('Vesperr') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="{{ asset('Vesperr') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="{{ asset('Vesperr') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="{{ asset('Vesperr') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="{{ asset('Vesperr') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('Vesperr') }}/assets/css/style.css" rel="stylesheet">

        {{-- style --}}
        {{-- <link rel="stylesheet" href="/css/style.css"> --}}

        <!-- =======================================================
  * Template Name: Vesperr
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>

        @include('layouts.partials.header')
        <div class="mt-5">

            @yield('content')

        </div>

        @include('layouts.partials.footer')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('Vesperr') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="{{ asset('Vesperr') }}/assets/vendor/aos/aos.js"></script>
        <script src="{{ asset('Vesperr') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('Vesperr') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ asset('Vesperr') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{ asset('Vesperr') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('Vesperr') }}/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('Vesperr') }}/assets/js/main.js"></script>

    </body>

</html>
