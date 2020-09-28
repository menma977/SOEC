<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="--theme-deafult:#275edd;">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="{{ asset('assets/images/dashboard/favicon.png') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('assets/images/dashboard/favicon.png') }}" type="image/x-icon">
  <title>SOE Clothing</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google font-->
  <link href="{{ url('https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">
  <link href="{{ url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}" rel="stylesheet">

  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">

  <!-- jsgrid css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jsgrid.css') }}">

  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">

</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

  <!-- Page Header Start-->
  <x-app-header/>
  <!-- Page Header Ends -->

  <!-- Page Body Start-->
  <div class="page-body-wrapper">

    <!-- Page Sidebar Start-->
    <x-app-side-bar/>
    <!-- Page Sidebar Ends-->

    <div class="page-body">

      <!-- Container-fluid starts-->
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-6">
              <div class="page-header-left">
                <h3>
                  @yield('title')
                </h3>
              </div>
            </div>
            <div class="col-lg-6">
              <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item">
                  <a href="{{ url('/') }}">
                    <i data-feather="home"></i>
                  </a>
                </li>
                @yield('titleLine')
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->

      <!-- Container-fluid starts-->
      <div class="container-fluid">
        @yield('content')
      </div>
      <!-- Container-fluid Ends-->

    </div>

    <!-- footer start-->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 footer-copyright">
            <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
          </div>
          <div class="col-md-6">
            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end-->

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

<!-- Jsgrid js-->
<script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/griddata-invoice.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/jsgrid-invoice.js') }}"></script>

<!--Customizer admin-->
<script src="{{ asset('assets/js/admin-customizer.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

<!--right sidebar js-->
<script src="{{ asset('assets/js/chat-menu.js') }}"></script>

<!--script admin-->
<script src="{{ asset('assets/js/admin-script.js') }}"></script>

</body>
</html>
