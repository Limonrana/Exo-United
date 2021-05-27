@php
    $meta = \App\Models\Admin\Seo::where('id', 1)->first();
    $header = \App\Models\Admin\Header::where('id', 1)->first();
    $menu       = \App\Models\Admin\Menu::where('id', 1)->first();
    $footer   = \App\Models\Admin\Footer::where('id', 1)->first();
    $f_menu   = \App\Models\Admin\Menu::where('id', 1)->first();
    $meta_author = null;
    $meta_keywords = null;
    $meta_description = null;
    $meta_title = null;
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
<div class="main-dark-version">
    <!--  header-section start  -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="header-top-left d-flex">
                            <div class="support-part">
                                <a href="tel:{{ $header->phone }}"><i class="fa fa-headphones"></i>Support: {{ $header->phone }}</a>
                            </div>
                            <div class="email-part">
                                <a href="mailto:{{ $header->email }}"><i class="fa fa-envelope"></i>{{ $header->email }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="header-top-right">
                            <div class="header-cart-count">
                                <a href="{{ route('cart.page') }}">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>{{ $menu->h_menu_9 }} ({{ Cart::Count() }})</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-xl">
                    <a class="site-logo site-title" href="{{ route('site_url') }}"><img src="{{ asset($header->logo) }}" width="{{ $header->logo_size }}" alt="site-logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu ml-auto">
                            @if ($menu->h_menu_1)
                                <li class="hover @if($menu->h_menu_1_link) {{ Request::is('experience/'.$menu->h_menu_1_link) ? 'active' : '' }} @else @endif">
                                    <a href="{{ route('category.taxonomy', $menu->h_menu_1_link ? $menu->h_menu_1_link : '') }}">
                                        {{ $menu->h_menu_1 }}
                                    </a>
                                </li>
                            @else
                            @endif
                            @if ($menu->h_menu_2)
                                <li class="hover @if($menu->h_menu_2_link) {{ Request::is('experience/'.$menu->h_menu_2_link) ? 'active' : '' }} @else @endif">
                                    <a href="{{ route('category.taxonomy', $menu->h_menu_2_link ? $menu->h_menu_2_link : '') }}">
                                        {{ $menu->h_menu_2 }}
                                    </a>
                                </li>
                            @else
                            @endif
                            @if ($menu->h_menu_3)
                                <li class="hover @if($menu->h_menu_3_link) {{ Request::is('experience/'.$menu->h_menu_3_link) ? 'active' : '' }} @else @endif">
                                    <a href="{{ route('category.taxonomy', $menu->h_menu_3_link ? $menu->h_menu_3_link : '') }}">
                                        {{ $menu->h_menu_3 }}
                                    </a>
                                </li>
                            @else
                            @endif
                            @if ($menu->h_menu_4)
                                <li class="hover @if($menu->h_menu_4_link) {{ Request::is('experience/'.$menu->h_menu_4_link) ? 'active' : '' }} @else @endif">
                                    <a href="{{ route('category.taxonomy', $menu->h_menu_4_link ? $menu->h_menu_4_link : '') }}">
                                        {{ $menu->h_menu_4 }}
                                    </a>
                                </li>
                            @else
                            @endif
                            @if ($menu->h_menu_5)
                                <li class="hover {{ Request::is('winners') ? 'active' : '' }}"><a href="{{ route('winner.page') }}">{{ $menu->h_menu_5 }}</a></li>
                            @else
                            @endif
                            @if ($menu->h_menu_6)
                                <li class="hover {{ Request::is('blog') ? 'active' : '' }}"><a href="{{ route('blog.page') }}">{{ $menu->h_menu_6 }}</a></li>
                            @else
                            @endif
                            @if ($menu->h_menu_7)
                                <li class="hover {{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about.page') }}">{{ $menu->h_menu_7 }}</a></li>
                            @else
                            @endif
                        </ul>
                        @if ($menu->h_menu_8)
                            @guest()
                                <div class="header-join-part">
                                    <a href="{{ route('login') }}" class="cmn-btn">{{ $menu->h_menu_8 }}</a>
                                </div>
                            @else
                                <div class="header-join-part">
                                    <a href="{{ route('home') }}" class="cmn-btn">Account</a>
                                </div>
                            @endguest
                        @else
                        @endif
                    </div>
                </nav>
            </div>
        </div><!-- header-bottom end -->
    </header>
    <!--  header-section end  -->

<!-- error-section start -->
    <section class="error-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-content text-center">
                        <img src="{{ asset('frontend/images/elements/404.png') }}" alt="404 page">
                        <h3 class="title">Oops... It looks  like you ‘re lost ! </h3>
                        <p>The page you were looking for dosen’t exist.</p>
                        <a href="{{ route('site_url') }}" class="cmn-btn">GO BACK</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error-section end -->
    <!-- footer-section start -->
    <footer class="footer-section">
        <div class="footer-top has_bg_image">
            <div class="footer-top-first">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-4 text-center text-sm-left">
                            <a href="{{ route('site_url') }}" class="site-logo"><img src="{{ asset($footer->footer_logo) }}" width="{{ $footer->footer_logo_size }}" alt="logo"></a>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-8">
                            <div class="number-count-part d-flex">
                                <div class="number-count-item">
                                    <span class="number">{{ $footer->footer_right_number_1 }}</span>
                                    <p>{{ $footer->footer_right_text_1 }}</p>
                                </div>
                                <div class="number-count-item">
                                    <span class="number">{{ $footer->footer_right_number_2 }}</span>
                                    <p>{{ $footer->footer_right_text_2 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top-second text-left">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 my-new-sm text-left">
                            <div class="footer-widget widget-about text-left">
                                <h3 class="widget-title my-title">About Exo</h3>
                                <ul class="footer-list-menu">
                                    <li><a href="{{ route('about.page') }}">{{ $f_menu->f_menu_1 }}</a></li>
                                    <li><a href="{{ route('winner.page') }}">{{ $f_menu->f_menu_2 }}</a></li>
                                    <li><a href="{{ route('shop.page') }}">{{ $f_menu->f_menu_3 }}</a></li>
                                    <li><a href="{{ route('blog.page') }}">{{ $f_menu->f_menu_4 }}</a></li>
                                    <li><a href="{{ route('contact.page') }}">{{ $f_menu->f_menu_5 }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 my-new-sm text-left">
                            <div class="footer-widget widget-links text-left">
                                <h3 class="widget-title my-title">Quick links</h3>
                                <ul class="footer-list-menu">
                                    @guest
                                        <li><a href="{{ route('login') }}">{{ $f_menu->f_menu_6 }}</a></li>
                                    @else
                                        <li><a href="{{ route('home') }}">My Account</a></li>
                                    @endguest
                                    <li><a href="{{ route('contact.page') }}">{{ $f_menu->f_menu_7 }}</a></li>
                                    <li><a href="{{ route('terms.page') }}">{{ $f_menu->f_menu_8 }}</a></li>
                                    <li><a href="{{ route('privacy.page') }}">{{ $f_menu->f_menu_9 }}</a></li>
                                    <li><a href="{{ route('roles.page') }}">{{ $f_menu->f_menu_10 }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget widget-subscribe">
                                <h3 class="widget-title">{{ $footer->newsletter_heading }}</h3>
                                <div class="subscribe-part">
                                    <p>{{ $footer->newsletter_subheading }}</p>
                                    <form class="subscribe-form" action="{{ route('newsletter.store') }}" method="post">
                                        @csrf
                                        <input type="email" name="email" id="email" placeholder="Email address">
                                        <input type="submit" value="subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom border-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-sm-7">
                        <div class="copy-right-text">
                            <p>{!! $footer->copyright_text !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5">
                        <ul class="footer-social-links d-flex justify-content-end">
                            <li><a href="{{ $footer->social_icon_link_1 }}"><i class="{{ $footer->social_icon_1 }}"></i></a></li>
                            <li><a href="{{ $footer->social_icon_link_2 }}"><i class="{{ $footer->social_icon_2 }}"></i></a></li>
                            <li><a href="{{ $footer->social_icon_link_3 }}"><i class="{{ $footer->social_icon_3 }}"></i></a></li>
                            <li><a href="{{ $footer->social_icon_link_4 }}"><i class="{{ $footer->social_icon_4 }}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-section end -->
</div>

<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
</div>
<!-- scroll-to-top end -->

<!-- jquery library js file -->
<script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
<!-- bootstrap js file -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- flipclock js file -->
<script src="{{ asset('frontend/js/flipclock.min.js') }}"></script>
<!-- countdown js file -->
<script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
<!-- slick js file -->
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<!-- swiper js file -->
<script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
<!-- lightcase js file -->
<script src="{{ asset('frontend/js/lightcase.js') }}"></script>
<!-- wow js file -->
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<!-- vamp js files -->
<script src="{{ asset('frontend/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.vmap.world.js') }}"></script>
<!-- main script js file -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('//unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
@yield('js')
<script>
    var clock = $('.clock').FlipClock(99000 * 24 * 3, {
        clockFace: 'DailyCounter',
        countdown: true
    });
</script>
<script>
    jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
            map: 'world_en',
            color: '#434574',
            backgroundColor: '#f7fcff',
            hoverOpacity: 0.8,
            selectedColor: '#eaedef',
            scaleColors: ['#434574', '#434574'],
            normalizeFunction: 'polynomial'
        });
    });
</script>
<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you want to delete?",
            text: "Once Delete, This will be Permanently Delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Safe Data!");
                }
            });
    });

    $(document).on("click", "#cancel", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you want to cancel order?",
            text: "Once cancel, This will be permanently cancel!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Safe your Order!");
                }
            });
    });
</script>
</body>

</html>
