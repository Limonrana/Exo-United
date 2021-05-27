@extends('layouts.app')

@section('title', 'Trending Experience | Exo-United')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">Your All Dreams</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item">experience</li>
                                <li class="breadcrumb-item active">trending</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- lottery-result-section start -->
    <section class="lottery-result-section section-padding">
        <div class="container">
            <div class="row mt-mb-15">
                @forelse($trending as $val)
                <div class="col-lg-6">
                    <div class="latest-result-item">
                            <div class="post-item my-product">
                                <div class="thumb">
                                    <img src="{{ asset('frontend/images/blog/2.jpg') }}" alt="image">
                                </div>
                                <div class="content">
                                    <ul class="post-meta">
                                        <li><span>Support DonorsChoose and</span></li>
                                    </ul>
                                    <h3 class="post-title"><a href="#0">
                                            Win $200,000 to Help You & Your Loved Ones
                                        </a></h3>
                                    <p>
                                        You’ve won $100,000. You read that right. One hundred. Thousand. Big ones. Now, take a deep breath and think of the massive difference this could make in your life...
                                    </p>
                                    <a href="#0" class="blog-btn">view more</a>
                                </div>
                            </div>
                        <div class="latest-result-item-footer">
                            <div class="text-center"><i class="fa fa-hourglass-half"></i>49 days left</div>
                        </div>
                    </div>
                </div><!-- latest-trending-item end -->
                @empty
                    <h2>Trending experience is empty.</h2>
                @endforelse
                <div class="col-lg-12 mt-5">
                    {{ $trending->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- lottery-result-section end -->

    <!-- question-section start -->
    <section class="question-section border-top section-padding section-bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="thumb text-lg-right text-center">
                        <img src="{{ asset('frontend/images/elements/faq.png') }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content">
                        <h2 class="title">If you have any questions</h2>
                        <p>Our top priorities are to protect your privacy, provide secure transactions, and safeguard your data. When you're ready to play, registering an account is required so we know you're of legal age and so no one else can use your account.We answer the most commonly asked lotto questions..</p>
                        <a href="#0" class="cmn-btn">Get Support</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- question-section end -->

    <!-- brand-section start -->
    <div class="brand-section border-top border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset('frontend/images/brand/1.png') }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset('frontend/images/brand/2.png') }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset('frontend/images/brand/3.png') }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset('frontend/images/brand/4.png') }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset('frontend/images/brand/5.png') }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset('frontend/images/brand/3.png') }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset('frontend/images/brand/4.png') }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset('frontend/images/brand/5.png') }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-section end -->
@endsection
