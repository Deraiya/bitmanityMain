<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>


    <title>Bitmanity | @yield('title')</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    @include('user.includes.css')
    @yield('css')
</head>


<body class="fixed-header horizontal-menu horizontal-app-menu ">
<!-- START PAGE-CONTAINER -->
@include('user.includes.nav')


<div class="page-container w-b">
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content w-b">
            @yield('content')
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        @include('user.includes.footer')
        <!-- END COPYRIGHT -->

    </div>

    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->


<!-- BEGIN VENDOR JS -->
@include('user.includes.js')
@yield('js')

<!-- END PAGE LEVEL JS -->
</body>
</html>