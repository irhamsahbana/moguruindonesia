<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="blank, starter">

    <title>Blank page &mdash; TheAdmin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/vendors') }}/admin/starter/src/assets/css/core.min.css" rel="stylesheet">
    <link href="{{ asset('assets/vendors') }}/admin/starter/src/assets/css/app.min.css" rel="stylesheet">
    <link href="{{ asset('assets/vendors') }}/admin/starter/src/assets/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/customStyle.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/vendors') }}/admin/starter/src/assets/img/apple-touch-icon.png">
    <link rel="icon" href="{{ asset('assets/vendors') }}/admin/starter/src/assets/img/favicon.png">
  </head>

  @yield('content')

  <body>
    <!-- Scripts -->
    <script src="{{ asset('assets/vendors') }}/admin/starter/src/assets/js/core.min.js"></script>
    <script src="{{ asset('assets/vendors') }}/admin/starter/src/assets/js/app.min.js"></script>
    <script src="{{ asset('assets/vendors') }}/admin/starter/src/assets/js/script.min.js"></script>

  </body>
</html>
