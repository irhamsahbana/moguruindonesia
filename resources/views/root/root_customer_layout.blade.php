<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><script src="http://thetheme.io/theadmin/samples/invoicer/../../assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script><script src="http://thetheme.io/theadmin/samples/invoicer/../../assets/vendor/moment/moment.min.js"></script><script src="http://thetheme.io/theadmin/samples/invoicer/../../assets/vendor/chartjs/Chart.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TheAdmin - Responsive admin and web application ui kit">
    <meta name="keywords" content="admin, dashboard, web app, sass, ui kit, ui framework, bootstrap">

    <title>Moguru Indonesia</title>

    <!-- Styles -->
    <link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/css/core.min.css" rel="stylesheet">
    <link href=".{{ asset('assets/vendors') }}/admin/theme/src/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/css/app.min.css" rel="stylesheet">
    <link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/customStyle.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/vendors') }}/admin/theme/src/assets/img/apple-touch-icon.png">
    <link rel="icon" href="{{ asset('assets/vendors') }}/admin/theme/src/assets/img/favicon.png">
    <style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  </head>
  <body>

    <header class="topbar">
      <div class="container">
        <div class="topbar-left">
          <!-- <span class="topbar-btn sidebar-toggler"><i>☰</i></span> -->
          <!-- <a class="logo d-lg-none" href="#"> -->
            <img src="{{ asset('assets/img') }}/brand/brand-logo.png" alt="" width="auto" height="30px">
          <!-- </a> -->
        </div>

        <div class="topbar-right" style="width:100%; padding: 0 0 0 10px;">

          <ul class="topbar-btns">
            <li class="dropdown">
              <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="{{ asset('assets/img') }}/account.png" alt="..."></span>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                <!-- <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="ti-help"></i> Help</a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
              </div>
            </li>
          </ul>

          <p class="nav-item"> <a class="nav-link" href="#"> My Dashboard</a> </p>
          <p class="nav-item"> <a class="nav-link" href="#"> Katalog Tutor</a> </p>

          <!-- <form class="lookup lookup-right search-bar" action="index.html" method="post">
            <input class="search-input" type="text" name="" value="" placeholder="lokasi anda" style="width:40%;">
            <input class="search-input" type="text" name="" value="" placeholder="Kursus" style="width:60%;">
          </form> -->





        </div>
      </div>
    </header>

    @yield('content')

    <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/core.min.js"></script>
    <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/app.min.js"></script>
    <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/script.js"></script>
  </body>
</html>
