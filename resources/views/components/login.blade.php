<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="--theme-deafult:#275edd;">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="{{ asset('assets/images/dashboard/favicon.png') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('assets/images/dashboard/favicon.png') }}" type="image/x-icon">
  <title>SOE Clothing</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google font-->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">
  <link href="{{ url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}" rel="stylesheet">

  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">

  <!-- slick icon-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

  <!-- jsgrid css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jsgrid.css') }}">

  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">

  @yield('addCss')
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">
  <div class="authentication-box">
    <div class="container">
      @yield('content')
      <a href="{{ url('/') }}" class="btn btn-primary back-btn">
        <i data-feather="arrow-left"></i>back
      </a>
    </div>
  </div>
</div>

<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>

<!-- Jsgrid js-->
<script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/griddata-invoice.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/jsgrid-invoice.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

<!--right sidebar js-->
<script src="{{ asset('assets/js/chat-menu.js') }}"></script>

<!--script admin-->
<script src="{{ asset('assets/js/admin-script.js') }}"></script>
<script>
  $('.single-item').slick({
      arrows: false,
      dots: true
    }
  );
</script>
@yield('addJs')
</body>
</html>