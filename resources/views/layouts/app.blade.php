<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Blog App</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('../admin/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('../admin/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject {{ asset('js/app.js') }}-->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('../admin/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('../admin/images/favicon.png') }}" />
</head>

<body>

<main class="py-4">
            @yield('content')
        </main>


<!-- base:js -->
<script src="{{ asset('../admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('../admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('../admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('../admin/js/template.js') }}"></script>
  <script src="{{ asset('../admin/js/settings.js') }}"></script>
  <script src="{{ asset('../admin/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>
</html>