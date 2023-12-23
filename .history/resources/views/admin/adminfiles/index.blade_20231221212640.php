<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  @include('admin.adminfiles.css')
</head>
<body>

  <!-- ======= Header ======== -->
@include('admin.adminfiles.navbar')


  <!-- ======= Sidebar ======= -->
  {{-- @include('admin.adminfiles.sidebar') --}}

  @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
@include('admin.adminfiles.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('admin.adminfiles.js')

</body>

</html>
