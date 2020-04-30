<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <link rel="icon" href="{{ asset('asset/images/logo-telu.png') }}">

  <!-- Bootstrap -->
  <link href="{{ asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('asset/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset('asset/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ asset('asset/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="{{ asset('asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{ asset('asset/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="{{ asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{ asset('asset/build/css/custom.min.css') }}" rel="stylesheet">

   <!-- Datatables -->
  <link href="{{ asset('asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

  <!-- PNotify -->
  <link href="{{ asset('asset/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('asset/vendors/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/vendors/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

    {{-- Sidebar --}}
    @include('admin.layouts.sidebar')

    {{-- Navbar --}}
    @include('admin.layouts.navbar')

    {{-- Modal --}}
      @include('user.layouts.modal')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('admin.layouts.footer')

    </div>
  </div>

  @include('admin.layouts.script')

</body>

</html>