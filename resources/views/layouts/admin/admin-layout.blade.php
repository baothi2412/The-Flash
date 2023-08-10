<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<title>{{$title}} | Soccer Verse Admin</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/vendor/animate-css/vivify.min.css">

<link rel="stylesheet" href="/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/vendor/sweetalert/sweetalert.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="/assets/css/mooli.min.css">

{{-- Components CSS --}}
<link rel="stylesheet" href="/css/components/button.css">

<style>
    td.details-control {
    background: url('assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('assets/images/details_close.png') no-repeat center center;
    }
</style>

{{-- Resize SVG Icon --}}
<link rel="stylesheet" href="/css/icons/resize.css">

</head>
<body>

<div id="body" class="theme-cyan">
    <!-- Page Loader -->
    {{-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="/assets/images/icon.svg" width="40" height="40" alt="Mooli"></div>
            <p>Please wait...</p>
        </div>
    </div> --}}

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Page top navbar -->
        @include('partials.header')
        <!-- Main left sidebar menu -->
        @include('partials.left-sidebar')
        <!-- Right bar chat  -->
        @include('partials.rightbar')
        <!-- Stiky note div  -->
        @include('partials.sticky-note')
        <!-- Main body part  -->
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Hi, Welcome to Soccer Verse!</h1>
                            <span>The Soccer Verse Data Management</span>
                        </div>
                    </div>
                </div>

                @yield('content')
            </div>
        </div>

    </div>
</div>

<!-- Javascript -->
<script src="/assets/bundles/libscripts.bundle.js"></script>
<script src="/assets/bundles/vendorscripts.bundle.js"></script>

<!-- Vedor js file and create bundle with grunt  -->

<script src="/assets/bundles/datatablescripts.bundle.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="/assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->


<!-- Project core js file minify with grunt -->
<script src="/assets/bundles/mainscripts.bundle.js"></script>

<script src="/js/jquery-data-table.js"></script>

</body>
</html>
