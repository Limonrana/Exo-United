@extends('layouts.app')

@section('title', 'Exo United - Our Giveaway Website')

@section('content')
    <!-- banner-section start -->
    <section class="banner-section" @if ($banner->is_bg_main == 0) style="background-image: url('{{ asset($banner->bg_image) }}')" @else @endif>
        @if ($banner->is_bg_main == 1)
            <div class="banner-elements-part has_bg_image" data-background="{{ asset($banner->bg_image) }}">

            </div>
        @else
        @endif
        <div class="banner-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-content">
                            <h1 class="title">{{ $banner->banner_heading }}</h1>
                            <p>{{ $banner->banner_subheading }}</p>
                            <a href="{{ $banner->button_link }}" class="cmn-btn">{{ $banner->button_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- offer-section start -->
    <section class="jackpot-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $home->offer_title }}</h2>
                        <p>
                            {{ $home->offer_content }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="jackpot-item text-center">
                        <img src="{{ asset($home->offer_image_1) }}" width="120px" alt="image">
                        <h5 class="title">{{ $home->offer_heading_1 }}</h5>
                        <p class="next-draw-time">{{ $home->offer_subheading_1 }}</p>
                        <a href="{{ $home->offer_button_link_1 }}" class="cmn-btn">{{ $home->offer_button_text_1 }}</a>
                    </div>
                </div><!-- jackpot-item end -->
                <div class="col-lg-4 col-md-6">
                    <div class="jackpot-item text-center">
                        <img src="{{ asset($home->offer_image_2) }}" width="120px" alt="image">
                        <h5 class="title">{{ $home->offer_heading_2 }}</h5>
                        <p class="next-draw-time">{{ $home->offer_subheading_2 }}</p>
                        <a href="{{ $home->offer_button_link_2 }}" class="cmn-btn">{{ $home->offer_button_text_2 }}</a>
                    </div>
                </div><!-- jackpot-item end -->
                <div class="col-lg-4 col-md-6">
                    <div class="jackpot-item text-center">
                        <img src="{{ asset($home->offer_image_3) }}" width="120px" alt="image">
                        <h5 class="title">{{ $home->offer_heading_3 }}</h5>
                        <p class="next-draw-time">{{ $home->offer_subheading_3 }}</p>
                        <a href="{{ $home->offer_button_link_3 }}" class="cmn-btn">{{ $home->offer_button_text_3 }}</a>
                    </div>
                </div><!-- jackpot-item end -->
            </div>
        </div>
    </section>
    <!-- offer-section start -->


    <!-- featured-exp-section start -->
    @if (count($featured) > 0)
    <section class="online-ticket-section section-padding has_bg_image" data-background="{{ asset('frontend/images/dark-bg-two.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $home->featured_exp_title }}</h2>
                        <p>{{ $home->featured_exp_subtitle }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="owl-carousel owl-theme">
                    @forelse($featured as $val)
                        <div class="post-item m-bottom-30">
                            <div class="thumb">
                                <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}">
                                    <img src="{{ asset($val->featured_image) }}" alt="{{ $val->exp_title }}">
                                </a>
                            </div>
                            <div class="content">
                                <p>{{ Str::limit($val->exp_subtitle, 35) }}</p>
                                <h3 class="post-title">
                                    <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}">
                                        {{ Str::limit($val->exp_title, 48) }}
                                    </a>
                                </h3>
                                <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}" class="blog-btn">read more</a>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    @else
    @endif
    <!-- featured-exp-section end -->

    <!-- with-exo-united-section start -->
    @if (count($with_exo) > 0)
    <section class="online-ticket-section section-padding has_bg_image" data-background="{{ asset('frontend/images/dark-bg-two.jpg') }}" style="padding-top: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $home->exo_exp_title }}</h2>
                        <p>{{ $home->exo_exp_subtitle }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="owl-carousel owl-theme">
                    @forelse($with_exo as $val)
                        <div class="post-item m-bottom-30">
                            <div class="thumb">
                                <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}">
                                    <img src="{{ asset($val->featured_image) }}" alt="{{ $val->exp_title }}">
                                </a>
                            </div>
                            <div class="content">
                                <p>{{ Str::limit($val->exp_subtitle, 35) }}</p>
                                <h3 class="post-title">
                                    <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}">
                                        {{ Str::limit($val->exp_title, 48) }}
                                    </a>
                                </h3>
                                <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}" class="blog-btn">
                                    read more
                                </a>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    @else
    @endif
    <!-- with-exo-united-section end -->

    <!-- for-last-time-section start -->
    @if (count($last) >0)
    <section class="online-ticket-section section-padding has_bg_image" data-background="{{ asset('frontend/images/dark-bg-two.jpg') }}" style="padding-top: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $home->last_exp_title }}</h2>
                        <p>{{ $home->last_exp_subtitle }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                    @forelse($last as $val)
                        <div class="col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}">
                                        <img src="{{ asset($val->featured_image) }}" alt="{{ $val->exp_title }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <p>{{ $val->exp_subtitle }}</p>
                                    <h3 class="post-title">
                                        <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}">
                                            {{ $val->exp_title }}
                                        </a>
                                    </h3>
                                    <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}" class="blog-btn">
                                        read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                <div class="col-lg-12 text-center">
                    <a href="{{ route('shop.page') }}" class="text-btn">Browse All Experience</a>
                </div>
            </div>
        </div>
    </section>
    @else
    @endif
    <!-- for-last-time-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding">
        <div class="choose-us-image"><img src="{{ asset($home_2->choose_us_bg) }}" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $home_2->choose_us_title }}</h2>
                        <p>{{ $home_2->choose_us_subtitle }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row mt-mb-15">
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <i class="{{ $home_2->choose_icon_1 }}"></i>
                                    </div>
                                    <h4 class="title">{{ $home_2->choose_title_1 }}</h4>
                                </div>
                                <div class="back">
                                    <p>{{ $home_2->choose_content_1 }}</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <i class="{{ $home_2->choose_icon_2 }}"></i>
                                    </div>
                                    <h4 class="title">{{ $home_2->choose_title_2 }}</h4>
                                </div>
                                <div class="back">
                                    <p>{{ $home_2->choose_content_2 }}</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <i class="{{ $home_2->choose_icon_3 }}"></i>
                                    </div>
                                    <h4 class="title">{{ $home_2->choose_title_3 }}</h4>
                                </div>
                                <div class="back">
                                    <p>{{ $home_2->choose_content_3 }}</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <i class="{{ $home_2->choose_icon_4 }}"></i>
                                    </div>
                                    <h4 class="title">{{ $home_2->choose_title_4 }}</h4>
                                </div>
                                <div class="back">
                                    <p>{{ $home_2->choose_content_4 }}</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <i class="{{ $home_2->choose_icon_5 }}"></i>
                                    </div>
                                    <h4 class="title">{{ $home_2->choose_title_5 }}</h4>
                                </div>
                                <div class="back">
                                    <p>{{ $home_2->choose_content_5 }}</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
                                <div class="front">
                                    <div class="icon">
                                        <i class="{{ $home_2->choose_icon_6 }}"></i>
                                    </div>
                                    <h4 class="title">{{ $home_2->choose_title_6 }}</h4>
                                </div>
                                <div class="back">
                                    <p>{{ $home_2->choose_content_6 }}</p>
                                </div>
                            </div>
                        </div><!-- choose-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->

    <!-- work-steps-section start -->
    <section class="work-steps-section section-padding border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $home_2->work_step_title }}</h2>
                        <p>{{ $home_2->work_step_subtitle }}</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-steps-items-part d-flex">
                        <div class="line"><img src="{{ asset('frontend/images/elements/line.png') }}" alt="line-image"></div>
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><i class="{{ $home_2->work_step_icon_1 }}"></i>
                                    <span class="count-num">01</span></div>
                                <h4 class="title">{{ $home_2->work_step_heading_1 }}</h4>
                                <p>{{ $home_2->work_step_subheading_1 }}</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><i class="{{ $home_2->work_step_icon_2 }}"></i>
                                    <span class="count-num">02</span></div>
                                <h4 class="title">{{ $home_2->work_step_heading_2 }}</h4>
                                <p>{{ $home_2->work_step_subheading_2 }}</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><i class="{{ $home_2->work_step_icon_3 }}"></i>
                                    <span class="count-num">03</span></div>
                                <h4 class="title">{{ $home_2->work_step_heading_3 }}</h4>
                                <p>{{ $home_2->work_step_subheading_3 }}</p>
                            </div>
                        </div><!-- work-steps-item end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-steps-thumb-part">
                        <img src="{{ asset($home_2->work_step_bg) }}" alt="work-step-image">
                        <a href="https://www.youtube.com/embed/{{ $home_2->work_step_video_link }}" data-rel="lightcase:myCollection" class="play-btn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-steps-section end -->

    <!-- latest-winner-section start -->
    <section class="lottery-result-section section-padding has_bg_image" data-background="{{ asset('frontend/images/dark-bg-one.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $home_2->winner_sec_title }}</h2>
                        <p>{{ $home_2->winner_sec_subtitle }}</p>
                    </div>
                </div>
            </div>
            <!-- latest-winner-section start -->
            <section class="latest-winner-section">
                <div class="container">
                    <div class="row m-bottom-not-30">
                        @foreach($l_winner as $val)
                        <div class="col-lg-6 col-md-6 col-sm-6 my-padding">
                            <div class="winner-item m-bottom-30">
                                <div class="thumb">
                                    <a href="{{ route('single.winner.page', [$val->slug, Str::random(20)]) }}">
                                    <img src="{{ asset($val->featured_image) }}" alt="{{ $val->title }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="name"><a href="{{ route('single.winner.page', [$val->slug, Str::random(20)]) }}">{{ $val->winner_name }}</a></span>
                                    <span class="amount" style="font-size: 25px"><a href="{{ route('single.winner.page', [$val->slug, Str::random(20)]) }}">{{ $val->title }}</a></span>
                                    <a href="{{ route('single.winner.page', [$val->slug, Str::random(20)]) }}" class="game-name cmn-btn mt-2">
                                        View Details>>
                                        </a>
                                </div>
                            </div>
                        </div><!-- winner-item end -->
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="load-more-btn-area">
                                <a href="{{ route('winner.page') }}" class="cmn-btn">{{ $home_2->winner_sec_btn_text }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- latest-winner-section end -->
        </div>
    </section>
    <!-- latest-winner-section-section end -->

    <!-- active-user-section start -->
    <section class="active-user-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $home_2->user_sec_title }}</h2>
                        <p>{{ $home_2->user_sec_subtitle }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="vmap">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="active-item text-center">
                        <span class="amount">{{ $home_2->countdown_value_1 }}</span>
                        <p>{{ $home_2->countdown_title_1 }}</p>
                    </div>
                </div><!-- active-item end -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="active-item text-center">
                        <span class="amount">{{ $home_2->countdown_value_2 }}</span>
                        <p>{{ $home_2->countdown_title_2 }}</p>
                    </div>
                </div><!-- active-item end -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="active-item text-center">
                        <span class="amount">{{ $home_2->countdown_value_3 }}</span>
                        <p>{{ $home_2->countdown_title_3 }}</p>
                    </div>
                </div><!-- active-item end -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="active-item text-center">
                        <span class="amount">{{ $home_2->countdown_value_4 }}</span>
                        <p>{{ $home_2->countdown_title_4 }}</p>
                    </div>
                </div><!-- active-item end -->
                <div class="col-lg-12 text-center">
                    <a href="{{ route('login') }}" class="cmn-btn">{{ $home_2->user_sec_btn_text }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- active-user-section end -->

    <!-- brand-section start -->
    <div class="brand-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        @foreach($charity as $val)
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset($val->charity_logo) }}" alt="Charity Logo">
                            </div>
                        </div><!-- single-slide end -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-section end -->
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <style>
        .main-dark-version .banner-elements-part {
            background-position: 70% 100% !important;
        }
        .banner-elements-part {
            position: absolute;
            right: 7%;
            bottom: -25px;
            width: 710px !important;
            height: 775px;
            background-position: center;
            background-size: cover;
        }
        section.banner-section {
            background-position: center;
            background-size: cover;
        }
        @media screen and (min-device-width: 281px) and (max-device-width: 575px) {
            .post-item.m-bottom-30 {
                margin-left: 10px;
                margin-right: 10px;
            }
            .col-lg-6.col-md-6.col-sm-6.my-padding {
                padding-left: 0px;
                padding-right: 0px;
            }
        }

    </style>
@endsection

@section('js')
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true
                },
                1000:{
                    items:3,
                    nav:true
                }
            }
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>
@endsection
