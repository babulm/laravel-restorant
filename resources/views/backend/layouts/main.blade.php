<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <base href="{{asset('/')}}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{'Restoran -'}} @yield('title') </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/backend/css/app.min.css">
  <link rel="stylesheet" href="assets/backend/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/backend/css/style.css">
  <link rel="stylesheet" href="assets/backend/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/backend/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/backend/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">

    <!-- navbar menu part  -->
    @include('backend.include.header')

    <!-- sidebar menu part -->
    @include('backend.include.sidebar')

      <!-- Main Content -->
      <div class="main-content">
    @yield('content')

    <!-- deshbord setting part -->
    @include('backend.include.setting')

      </div>

      <!-- footer part -->
    @include('backend.include.footer')


    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/backend/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/backend/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/backend/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/backend/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/backend/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>