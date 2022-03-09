<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{'Restoran -'}} @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="assets/backend/css/app.min.css">
    <link rel="stylesheet" href="assets/backend/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/backend/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
    <link rel="stylesheet" href="assets/backend/css/style.css">
    <link rel="stylesheet" href="assets/backend/css/components.css">
  <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/backend/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/backend/img/favicon.ico' />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="loader"></div>
<div id="app">
    <!-- content  -->
    @yield('content')
  </div>
  <!-- General JS Scripts -->
  <script src="assets/backend/js/app.min.js"></script>
    <!-- JS Libraies -->
  <script src="assets/backend/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/backend/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/backend/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/backend/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/backend/js/custom.js"></script>
</body>
</html>
