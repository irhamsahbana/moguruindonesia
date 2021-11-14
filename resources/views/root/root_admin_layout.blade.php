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

    <aside class="sidebar sidebar-expand-lg sidebar-light sidebar-sm sidebar-color-info">

      <header class="sidebar-header bg-info">
        <span class="logo">
          <a href="index.html"><strong><h4 style="color:white; font-weight:bold;">MOGURU</h4></strong> </a>
        </span>
        <span class="sidebar-toggle-fold"></span>
      </header>

      <nav class="sidebar-navigation ps-container ps-theme-default" data-ps-id="89f5ea7e-55d0-0bcc-4fd3-f2cf2438edaa">
        <ul class="menu menu-sm menu-bordery">

          <li class="menu-item active">
            <a class="menu-link" href="index.html">
              <span class="icon ti-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="clients.html">
              <span class="icon ti-user"></span>
              <span class="title">Pengguna</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="products.html">
              <span class="icon ti-receipt"></span>
              <span class="title">Tutor</span>
            </a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="products.html">
              <span class="icon ti-receipt"></span>
              <span class="title">Tutor Baru</span>
              <span class="badge badge-pill badge-info">2</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="products.html">
              <span class="icon ti-briefcase"></span>
              <span class="title">Transaksi</span>
              <span class="badge badge-pill badge-info">2</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="invoices.html">
              <span class="icon ti-write"></span>
              <span class="title">Kursus Selesai</span>

            </a>
          </li>

          <!-- <li class="menu-item">
            <a class="menu-link" href="settings.html">
              <span class="icon ti-check-box"></span>
              <span class="title">Riwayat Kursus</span>
            </a>
          </li> -->

        </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 2px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></nav>

    </aside>

    <header class="topbar">
      <div class="container">
        <div class="topbar-left">
          <span class="topbar-btn sidebar-toggler"><i>☰</i></span>
          <a class="logo d-lg-none" href="#">

          </a>
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
                <a class="dropdown-item" href="{{ route('auth.logout') }}"><i class="ti-power-off"></i> Logout</a>
              </div>
            </li>
          </ul>





        </div>
      </div>
    </header>
     <main class="main-container">
       <div class="main-content">
         @yield('content')

       </div>

     </main>



    <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/core.min.js"></script>
    <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/app.min.js"></script>
    <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/script.js"></script>

    @yield('scripts')
  </body>
</html>
