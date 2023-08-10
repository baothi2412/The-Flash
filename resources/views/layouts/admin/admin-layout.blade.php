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

<link rel="stylesheet" href="/assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="/assets/vendor/c3/c3.min.css"/>
<link rel="stylesheet" href="/assets/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="/assets/css/mooli.min.css">

{{-- Resize SVG Icon --}}
<link rel="stylesheet" href="/css/icons/resize.css">

</head>
<body>
    
<div id="body" class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="/assets/images/icon.svg" width="40" height="40" alt="Mooli"></div>
            <p>Please wait...</p>        
        </div>
    </div>

    <!-- Theme Setting -->
    <div class="themesetting">
        <a href="javascript:void(0);" class="theme_btn"><i class="fa fa-gear fa-spin"></i></a>
        <ul class="list-group">
            <li class="list-group-item">
                <ul class="choose-skin list-unstyled mb-0">
                    <li data-theme="green"><div class="green"></div></li>
                    <li data-theme="orange"><div class="orange"></div></li>
                    <li data-theme="blush"><div class="blush"></div></li>
                    <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                    <li data-theme="timber"><div class="timber"></div></li>
                    <li data-theme="blue"><div class="blue"></div></li>
                    <li data-theme="amethyst"><div class="amethyst"></div></li>
                </ul>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>Light Sidebar</span>
                <label class="switch sidebar_light">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>Gradient</span>
                <label class="switch gradient_mode">
                    <input type="checkbox" checked="">
                    <span class="slider round"></span>
                </label>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>Dark Mode</span>
                <label class="switch dark_mode">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>RTL version</span>
                <label class="switch rtl_mode">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </li>
        </ul>
        <hr>
        <div>
            <a href="javascript:void(0);" class="btn btn-dark btn-block" target="_blank">Buy this item</a>
            <a href="javascript:void(0);" target="_blank" class="btn btn-primary theme-bg gradient btn-block">View Portfolio</a>
        </div>
    </div>

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
<script src="/assets/bundles/flotscripts.bundle.js"></script><!-- flot charts Plugin Js -->
<script src="/assets/bundles/c3.bundle.js"></script>
<script src="/assets/bundles/apexcharts.bundle.js"></script>
<script src="/assets/bundles/jvectormap.bundle.js"></script>
<script src="/assets/vendor/toastr/toastr.js"></script>

<!-- Project core js file minify with grunt --> 
<script src="/assets/bundles/mainscripts.bundle.js"></script>
<script src="../js/index.js"></script>
</body>
</html>
