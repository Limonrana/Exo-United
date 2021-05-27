@php
$footer   = \App\Models\Admin\Footer::where('id', 1)->first();
$f_menu   = \App\Models\Admin\Menu::where('id', 1)->first();
@endphp
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
