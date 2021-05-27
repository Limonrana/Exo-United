@php
    $header = \App\Models\Admin\Header::where('id', 1)->first();
    $menu       = \App\Models\Admin\Menu::where('id', 1)->first();
@endphp
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
