<!DOCTYPE html>
<html lang="en" dir="ltr">

<script
src="http://thetheme.io/theadmin/samples/invoicer/../../assets/vendor/bootstrap-select/js/bootstrap-select.min.js">
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="TheAdmin - Responsive admin and web application ui kit">
<meta name="keywords" content="admin, dashboard, web app, sass, ui kit, ui framework, bootstrap">

<title>Moguru Indonesia</title>

<!-- Styles -->
<link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/css/core.min.css" rel="stylesheet">
<link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/vendor/ionicons/css/ionicons.min.css"
  rel="stylesheet">
<link href="{{ asset('assets/vendors') }}/admin/theme/src/assets/vendor/bootstrap-select/css/bootstrap-select.min.css"
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

  <header class="topbar">
    <div class="container">
      <div class="topbar-left">
        <!-- <span class="topbar-btn sidebar-toggler"><i>☰</i></span> -->
        <!-- <a class="logo d-lg-none" href="#"> -->
        <img src="{{ asset('assets/img') }}/brand/brand-logo.png" alt="" width="auto" height="30px">
        <!-- </a> -->
      </div>

      <div class="topbar-right" style="width:100%; padding: 0 0 0 10px;">

        <p class="nav-item"> <a class="nav-link btn btn-info rounded-corner2" href="{{ route('auth.login') }}" style="color: white;"> Masuk </a>
        </p>
        <p class="nav-item"> <a class="nav-link " href=""> Kontak Kami </a>
        </p>
        <p class="nav-item"> <a class="nav-link " href=""> Testimoni </a>
        </p>
        <p class="nav-item"> <a class="nav-link " href=""> Layanan Kami </a>
        </p>
        <p class="nav-item"> <a class="nav-link " href=""> Tentang Kami </a>
        </p>

      </div>
    </div>
  </header>

  @yield('content')

  <footer class="site-footer" style="background-color: black; height: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="text-center text-md-left" style="color: white">Copyright © 2021 Moguru Indonesia. All rights reserved.</p>
        </div>

        <div class="col-md-6">
        
        </div>
      </div>
    </div>
  </footer>
  
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
  <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/core.min.js"></script>
  <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/app.min.js"></script>
  <script src="{{ asset('assets/vendors') }}/admin/theme/src/assets/js/script.js"></script>
  <script defer src="{{ asset('assets/vendors') }}/admin/theme/src/assets/vendor/bootstrap-select/js/bootstrap-select.js"></script>

  @yield('scripts')

  @stack('js')
</body>

</html>
