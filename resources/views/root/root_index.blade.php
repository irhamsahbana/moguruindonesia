<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bikin Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/vendors/bikin/assets') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('assets/vendors/bikin/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendors/bikin/assets') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets/vendors/bikin/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets/vendors/bikin/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets/vendors/bikin/assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('assets/vendors/bikin/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('assets/vendors/bikin/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/vendors/bikin/assets') }}/css/style.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/css/customStyle.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bikin - v4.3.0
  * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

    <body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">Bikin</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
            <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Testimoni</a></li>
            <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
            <li><a class="nav-link scrollto" href="#pricing">Kontak</a></li>
            <li><a class="nav-link scrollto" href="#contact">Masuk</a></li>
            <li><a class="getstarted scrollto" href="#about">Daftar</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header>

    @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container d-md-flex py-4">

                <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Bikin</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bikin-free-simple-landing-page-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendors/bikin/assets') }}/vendor/aos/aos.js"></script>
        <script src="{{ asset('assets/vendors/bikin/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/vendors/bikin/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ asset('assets/vendors/bikin/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{ asset('assets/vendors/bikin/assets') }}/vendor/php-email-form/validate.js"></script>
        <script src="{{ asset('assets/vendors/bikin/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/vendors/bikin/assets') }}/js/main.js"></script>

    </body>

</html>