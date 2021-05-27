@extends('layouts.app')

@section('title', 'About Us | Exo-United')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">About Us</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- about-section start -->
    <section class="about-section section-padding">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-xl-5 p-xl-0">
                    <div class="thumb">
                        <img src="{{ asset($get->about_sec_image) }}" alt="about_page">
                    </div>
                </div>
                <div class="col-xl-6 p-xl-0">
                    <div class="content">
                        <h2 class="title">{{ $get->about_sec_title }}</h2>
                        <div class="content">
                            {!! $get->about_sec_content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding border-top border-bottom has_bg_image">
        <div class="container">
            <div class="row mt-mb-15">
                <div class="content">
                    {!! $get->about_details_content !!}
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding border-top border-bottom has_bg_image">
        <div class="container">
            <div class="row mt-mb-15">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="choose-item text-center choose-item--gray-border">
                        <a href="{{ $get->service_link_1 }}">
                            <div class="front">
                                <div class="icon">
                                    <i class="{{ $get->service_icon_1 }}"></i>
                                </div>
                                <h4 class="title">{{ $get->service_title_1 }}</h4>
                            </div>
                            <div class="back">
                                <p>{{ $get->service_content_1 }}</p>
                            </div>
                        </a>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <a href="{{ $get->service_link_2 }}">
                            <div class="front">
                                <div class="icon">
                                    <i class="{{ $get->service_icon_2 }}"></i>
                                </div>
                                <h4 class="title">{{ $get->service_title_2 }}</h4>
                            </div>
                            <div class="back">
                                <p>{{ $get->service_content_2 }}</p>
                            </div>
                        </a>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="choose-item text-center choose-item--gray-border">
                        <a href="{{ $get->service_link_3 }}">
                            <div class="front">
                                <div class="icon">
                                    <i class="{{ $get->service_icon_3 }}"></i>
                                </div>
                                <h4 class="title">{{ $get->service_title_3 }}</h4>
                            </div>
                            <div class="back">
                                <p>{{ $get->service_content_3 }}</p>
                            </div>
                        </a>
                    </div>
                </div><!-- choose-item end -->
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->

    <!-- testimonial-section start -->
    <section class="testimonial-section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="testimonial-slide-header d-flex">
                                <div class="client-details" style="padding-left: 0px;">
                                    <h5 class="name">Albert G.</h5>
                                    <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                                </div>
                            </div>
                            <div class="testimonial-slide-body">
                                <p>I've played with Sorteo for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  Sorteo!"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="testimonial-slide-header d-flex">
                                <div class="client-details" style="padding-left: 0px;">
                                    <h5 class="name">Albert G.</h5>
                                    <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                                </div>
                            </div>
                            <div class="testimonial-slide-body">
                                <p>I've played with Sorteo for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  Sorteo!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->

    <!-- brand-section start -->
    <div class="brand-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        @foreach($charity as $val)
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset($val->charity_logo) }}" alt="image">
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
