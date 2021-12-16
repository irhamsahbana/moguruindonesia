<!DOCTYPE html>
<html lang="en" dir="ltr">

<script
      src="http://thetheme.io/theadmin/samples/invoicer/../../assets/vendor/bootstrap-select/js/bootstrap-select.min.js">
</script>___scripts_1______scripts_2___
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="TheAdmin - Responsive admin and web application ui kit">
  <meta name="keywords" content="admin, dashboard, web app, sass, ui kit, ui framework, bootstrap">

  <title>@yield('title', 'Moguru Indonesia')</title>

  <!-- Styles -->
  <link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/css/core.min.css" rel="stylesheet">
  <link href=".{{ asset('assets/vendors') }}/admin/theme/src/assets/vendor/ionicons/css/ionicons.min.css"
    rel="stylesheet">
  <link
    href="{{ asset('assets/vendors') }}/admin/theme/src/assets/vendor/bootstrap-select/css/bootstrap-select.min.css"
    rel="stylesheet">
  <link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/css/app.min.css" rel="stylesheet">
  <link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css') }}/customStyle.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="{{ asset('assets/vendors') }}/admin/theme/src/assets/img/apple-touch-icon.png">
  <link rel="icon" href="{{ asset('assets/vendors') }}/admin/theme/src/assets/img/favicon.png">
  <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    @keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      -webkit-animation: chartjs-render-animation 0.001s;
      animation: chartjs-render-animation 0.001s;
    }

  </style>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <aside class="sidebar sidebar-expand-lg sidebar-light sidebar-sm sidebar-color-info">

    <header class="sidebar-header bg-info">
      <span class="logo">
        <a href="index.html"><strong>
            <h4 style="color:white; font-weight:bold;">MOGURU</h4>
          </strong> </a>
      </span>
      <span class="sidebar-toggle-fold"></span>
    </header>

    <nav class="sidebar-navigation ps-container ps-theme-default" data-ps-id="89f5ea7e-55d0-0bcc-4fd3-f2cf2438edaa">
      <ul class="menu menu-sm menu-bordery">

        <li class="menu-item active">
          <a class="menu-link" href="{{ route('dashboard.tutor.profile') }}">
            <span class="icon ti-user"></span>
            <span class="title">Profile</span>
          </a>
        </li>

        <li class="menu-item">
          <a class="menu-link" href="products.html">
            <span class="icon ti-receipt"></span>
            <span class="title">Orderan Terbuka</span>
            <span class="badge badge-pill badge-info">2</span>
          </a>
        </li>

        <li class="menu-item">
          <a class="menu-link" href="{{ route('dashboard.tutor.course.request') }}">
            <span class="icon ti-briefcase"></span>
            <span class="title">Permintaan Kursus</span>
            @if ($incomingOrders > 0)
              <span class="badge badge-pill badge-info">{{ $incomingOrders }}</span>
            @endif
          </a>
        </li>

        <li class="menu-item">
          <a class="menu-link" href="{{ route('dashboard.tutor.course.ongoing') }}">
            <span class="icon ti-write"></span>
            <span class="title">Kursus Anda</span>
            @if ($acceptedOrders > 0)
              <span class="badge badge-pill badge-info">{{ $acceptedOrders }}</span>
            @endif
          </a>
        </li>

        <li class="menu-item">
          <a class="menu-link" href="{{ route('dashboard.tutor.course.complete') }}">
            <span class="icon ti-check-box"></span>
            <span class="title">Riwayat Kursus</span>
          </a>
        </li>

        <li class="menu-item">
          <a class="menu-link" href="{{ route('dashboard.tutor.course.complete') }}">
            <span class="icon ti-desktop"></span>
            <span class="title">Kembali ke Beranda</span>
          </a>
        </li>

      </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
      </div>
      <div class="ps-scrollbar-y-rail" style="top: 0px; right: 2px;">
        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
      </div>
    </nav>

  </aside>

  <header class="topbar">
    <div class="container">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>☰</i></span>
        <a class="logo d-lg-none" href="index.html"><img src="{{ asset('assets/img') }}/brand/brand-logo.png" width="200" height="auto" alt="logo"></a>

      </div>

      <div class="topbar-right" style="width:100%; padding: 0 0 0 10px;">

        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar"
                src="{{ asset('assets/img') }}/account.png" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('auth.logout') }}"><i class="ti-power-off"></i> Logout</a>
            </div>
          </li>
        </ul>

        <li class="dropdown d-none d-lg-block">
          <span class="topbar-btn has-new" data-toggle="dropdown" aria-expanded="false"><i
              class="ti-bell"></i></span>
          <div class="dropdown-menu" x-placement="bottom-start"
            style="position: absolute; will-change: top, left; top: 65px; left: 0px;">

            <div class="media-list media-list-hover media-list-divided media-list-xs">
              <a class="media media-new" href="#">
                <span class="avatar bg-success"><i class="ti-user"></i></span>
                <div class="media-body">
                  <p>New user registered</p>
                  <time datetime="2018-07-14 20:00">Just now</time>
                </div>
              </a>

              <a class="media" href="#">
                <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                <div class="media-body">
                  <p>New order received</p>
                  <time datetime="2018-07-14 20:00">2 min ago</time>
                </div>
              </a>

              <a class="media" href="#">
                <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
                <div class="media-body">
                  <p>Refund request from <b>Ashlyn Culotta</b></p>
                  <time datetime="2018-07-14 20:00">24 min ago</time>
                </div>
              </a>

              <a class="media" href="#">
                <span class="avatar bg-primary"><i class="ti-money"></i></span>
                <div class="media-body">
                  <p>New payment has made through PayPal</p>
                  <time datetime="2018-07-14 20:00">53 min ago</time>
                </div>
              </a>
            </div>

            <div class="dropdown-footer">
              <div class="left">
                <a href="#">Read all notifications</a>
              </div>

              <div class="right">
                <a href="#" data-provide="tooltip" title="" data-original-title="Mark all as read"><i
                    class="fa fa-circle-o"></i></a>
                <a href="#" data-provide="tooltip" title="" data-original-title="Update"><i
                    class="fa fa-repeat"></i></a>
                <a href="#" data-provide="tooltip" title="" data-original-title="Settings"><i
                    class="fa fa-gear"></i></a>
              </div>
            </div>

          </div>
        </li>





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
