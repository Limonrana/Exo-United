@extends('layouts.app')

@section('title', 'Exo-United | Single-Winner')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item active">winner</li>
                            </ol>
                        </nav>
                        <h3 class="page-title">{{ $winner->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- winner-content start -->
    <section class="inner-page-banner" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="exp_image">
                    <img src="{{ asset($winner->featured_image) }}" alt="{{ $winner->title }}">
                </div>
            </div>
        </div>
    </section>
    <!-- winner-content end -->

    <!-- winner-datails-section start -->
    <section class="payment-method-section section-padding border-top" style="padding-top: 0px; padding-bottom: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="commission-area align-items-center">
                        <div class="commission-items-wrapper align-items-center">
                            <div class="commission-items align-items-center">
                                <div class="text-center" style="margin-top: 0px;">
                                    <h3 class="title">Winner: {{ $winner->winner_name }}</h3>
                                    <h3>{{ $winner->title }}</h3>
                                    <h5 class="mt-2">Address: {{ $winner->winner_address }}</h5>
                                    <h5 class="mt-2">Experience Date: {{ date('M d, Y', strtotime($winner->exp_date)) }}</h5>
                                </div>
                            </div><!-- commission-items end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- winner-datails-section end -->

    <!-- winner-content start -->
    <section class="inner-page-banner" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="affiliate-content mt-4 text-center">
                    <div class="content" style="margin-top: 50px;">
                        <div class="exp_image">
                            <img src="{{ asset($winner->gallery_image_1) }}" alt="{{ $winner->title }}">
                        </div>
                        <div class="info_content mt-5" style="font-size: 20px;">
                            {!! $winner->winner_content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- winner-content end -->

    <!-- Quote-section start -->
    <section class="join-section section-padding section-bg border-top">
        <div class="container">
            <div class="row m-bottom-not-30">
                <div class="col-lg-12">
                    <div class="join-item text-center">
                        <h3 class="title">{{ $winner->winner_review_title }}'s Quote</h3>
                        <div class="exp_image mt-4">
                            <img src="{{ asset($winner->gallery_image_2) }}" alt="{{ $winner->title }}">
                        </div>
                        <h2 class="title mt-4">
                            <i>" {{ $winner->winner_review }} "</i>
                        </h2>
                        <p class="text-white"> {{ $winner->winner_review_title }}, WINNER</p>
                    </div>
                </div><!-- Quote-item end -->
            </div>
        </div>
    </section>
    <!-- Quote-section end -->

    <!-- donation-section start -->
    <section class="payment-method-section section-padding border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="section-title">Where you are helping?</h2>
                        <div class="exp_image mt-4">
                            <img src="{{ asset($winner->donation_image) }}" alt="payment-method-image">
                        </div>
                        <h3 class="section-title mt-4">{{ $winner->donation_title }}</h3>
                        <p>{!! $winner->donation_content !!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="button-find">
                        <a href="{{ route('shop.page') }}" class="btn cmn-btn btn-block text-center">Find Your Experience Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- donation-section end -->
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <style>
        ul, ol {
            margin: 0;
            list-style: square;
            color: #ffffff !important;
        }
        .info_content.mt-3 ul li {
            color: white !important;
        }
        .info_content.mt-3 ul {
            padding: 30px; !important;
        }
        .content ul li{
            color: white !important;
        }
        .content ul{
            padding: 10px; !important;
        }
        .exp_image img {
            width: 1200px !important;
        }
        h3.page-title {
            font-size: 35px;
        }
        .commission-area .commission-items-wrapper {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 100% !important;
        }
        @media screen and (min-device-width: 281px) and (max-device-width: 1199px) {
            .commission-items {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 100%;
                justify-content: center;
                text-align: center;
            }
        }
        @media screen and (min-device-width: 281px) and (max-device-width: 575px) {
            .affiliate-content.mt-4.text-center {
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    </style>
@endsection

@section('js')
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:1,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            nav: true,
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>
@endsection
