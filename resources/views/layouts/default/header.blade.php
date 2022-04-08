<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }} | {{ config('sximo')['cnf_appname'] }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link id="favicon" type="image/vnd.microsoft.icon" href="{{ asset('uploads/images/'.$setting->favicon)}}" rel="shortcut icon"/>

    <link rel="stylesheet" href="{{ asset('assets') }}/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css">

    <script src="https://kit.fontawesome.com/9575f77c5e.js" crossorigin="anonymous"></script>

</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

	@include('layouts.default.navigation')
   


	


















