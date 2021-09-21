<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Ambeso Member | {{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('adminfrontend') }}/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminfrontend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminfrontend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminfrontend') }}/dist/css/adminlte.min.css">
  <!-- uPlot -->
  <link rel="stylesheet" href="{{ asset('adminfrontend') }}/plugins/uplot/uPlot.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminfrontend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('adminfrontend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('adminfrontend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('adminfrontend') }}/dist/img/Ambesocoffe.png" alt="AmbesoCoffeLogo" height="60" width="120">
  </div>

 @include('AdminLayouts.header')

 @include('AdminLayouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
 @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside> --}}
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 @include('AdminLayouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('adminfrontend') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminfrontend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminfrontend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminfrontend') }}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('adminfrontend') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('adminfrontend') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('adminfrontend') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('adminfrontend') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- uPlot -->
<script src="{{ asset('adminfrontend') }}/plugins/uplot/uPlot.iife.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminfrontend') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminfrontend') }}/dist/js/pages/dashboard2.js"></script>


</body>
</html>
