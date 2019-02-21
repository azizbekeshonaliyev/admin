<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="authors" content="Shaxzodbek,Azizbek">
    <title>bek96 | @yield('title')</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ config('bek96.bek96_admin_assets_path') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('bek96.bek96_admin_assets_path') }}/css/style.css">
    <!-- Qo`shimcha css -->
    <link rel="stylesheet" href="{{ config('bek96.bek96_admin_assets_path') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ config('bek96.bek96_admin_assets_path') }}/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ config('bek96.bek96_admin_assets_path') }}/css/sb-admin.css">


    @yield('style')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body style="background-color: #eeeeee;">

<!-- TopPanel -->
<!-- End TopPanel -->

@include('bek96::components.main_nav')
<!-- Content -->
<!-- Sugurtalar -->
<div class="content-wrapper" style="padding-top: 80px;">
   @yield('content')
</div>
<!-- End Content -->

<!-- Sozlovchi JavaScript -->
<!-- jQuery birinchi, keyin Popper js, keyin Bootstrap js -->
<script src="{{ config('bek96.bek96_admin_assets_path') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ config('bek96.bek96_admin_assets_path') }}/js/popper.min.js"></script>
<script src="{{ config('bek96.bek96_admin_assets_path') }}/js/bootstrap.min.js"></script>
<!-- Qo`shimcha js -->
<script src="{{ config('bek96.bek96_admin_assets_path') }}/js/Chart.min.js"></script>
<script src="{{ config('bek96.bek96_admin_assets_path') }}/js/jquery.dataTables.js"></script>
<script src="{{ config('bek96.bek96_admin_assets_path') }}/js/dataTables.bootstrap4.js"></script>
<script src="{{ config('bek96.bek96_admin_assets_path') }}/js/jquery.easing.min.js"></script>
<script src="{{ config('bek96.bek96_admin_assets_path') }}/js/sb-admin.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

</body>
