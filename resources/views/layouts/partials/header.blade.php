@php
$meta = \App\Models\Admin\Seo::where('id', 1)->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--====================
    All Meta Tags start
    ====================-->
    <!-- SEO meta tags -->
    <meta name="author" content="@if ($meta_author) {{ $meta_author }} @else {{ $meta->meta_author }}@endif">
    <meta name="keywords" content="@if ($meta_keywords) {{ $meta_keywords }} @else @endif">
    <meta name="description" content="@if ($meta_description) {{ $meta_description }} @else {{ $meta->meta_description }}@endif">
    {!! $meta->meta_tag ? $meta->meta_tag : ' ' !!}
    <title>@if ($meta_title) {{ $meta_title }} @else @yield('title', 'Exo United - Our Giveaway Website') @endif</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/favicon.jpg') }}">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- animate css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/lightcase.css') }}">
    <!-- slick css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <!-- swiper css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <!-- flipclock css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/flipclock.css') }}">
    <!-- jqvmap css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jqvmap.min.css') }}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/my-style.css') }}">
    <!-- dark version css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/dark-version.css') }}">
    <!-- responsive css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    @yield('css')
    <script>
        // Google $ FB pixel meta tags
        {!! $meta->google_analytics ? $meta->google_analytics : ' ' !!}
        {!! $meta->fb_pixel ? $meta->fb_pixel : ' ' !!}
    </script>
</head>
<body>

<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->
