@extends('layouts.app')

@section('title', 'Exo-United | Single-Experience')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme">
                        <div class="exp_image">
                            <img src="{{ asset($single_exp->featured_image) }}" alt="image">
                        </div>
                        @if ($single_exp->gallery_image_1)
                            <div class="exp_image">
                                <img src="{{ asset($single_exp->gallery_image_1) }}" alt="image">
                            </div>
                        @else
                        @endif
                        @if ($single_exp->gallery_image_2)
                            <div class="exp_image">
                                <img src="{{ asset($single_exp->gallery_image_2) }}" alt="image">
                            </div>
                        @else
                        @endif
                    </div>
                    @php
                        $fdate = \Illuminate\Support\Carbon::today();
                        $edate = $single_exp->end_time;
                        $date1 = new DateTime($fdate);
                        $date2 = new DateTime($edate);
                        $interval = $date1->diff($date2);
                        $days = $interval->format('%a');
                    @endphp
                    <div class="latest-result-item-footer">
                        <div class="text-center">
                            <i class="fa fa-hourglass-half"></i>
                            @if ($fdate >= $edate)
                                Already Expired
                            @else
                                {{ $days == 1 ? $days." day left" : $days." days left" }}
                            @endif
                        </div>
                    </div>
                    <div id="for-mobile" class="section-header mt-5" style="margin-bottom: 0px;">
                        <p>{{ $single_exp->exp_subtitle }}</p>
                        <h3 class="section-title" style="font-size: 30px;">
                            {{ $single_exp->exp_title }}
                        </h3>

                        <div class="content">
                            {!! $single_exp->exp_content !!}
                        </div>
                        <div class="enter_now mt-3">
                            @if ($fdate >= $edate)
                                <a class="btn btn-danger text-white btn-lg btn-block">Already Expired!</a>
                            @else
                                <a href="#entry_buy" class="btn btn-info btn-lg btn-block">Enter Now</a>
                            @endif
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="commission-area align-items-center">
                                <div class="work-steps-items-part d-flex">
                                    <div class="work-steps-item">
                                        <div class="work-steps-item-inner">
                                            <div class="icon"><img src="{{ asset('frontend/images/svg-icons/how-work-icons/1.svg') }}" alt="icon">
                                                <span class="count-num">01</span></div>
                                            <h4 class="title" style="margin-top: 10px;">choose</h4>
                                            <p>Choose your package</p>
                                        </div>
                                    </div><!-- work-steps-item end -->
                                    <div class="work-steps-item">
                                        <div class="work-steps-item-inner">
                                            <div class="icon"><img src="{{ asset('frontend/images/svg-icons/how-work-icons/2.svg') }}" alt="icon">
                                                <span class="count-num">02</span></div>
                                            <h4 class="title" style="margin-top: 10px;">buy</h4>
                                            <p>Complete your purchase</p>
                                        </div>
                                    </div><!-- work-steps-item end -->
                                    <div class="work-steps-item">
                                        <div class="work-steps-item-inner">
                                            <div class="icon"><img src="{{ asset('frontend/images/svg-icons/how-work-icons/3.svg') }}" alt="icon">
                                                <span class="count-num">03</span></div>
                                            <h4 class="title" style="margin-top: 10px;">win</h4>
                                            <p>Start dreaming</p>
                                        </div>
                                    </div><!-- work-steps-item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="affiliate-content mt-4">
                        <div class="content" style="margin-top: 50px;">
                            <h3 class="title">{{ $single_exp->info_title }}</h3>
                            <div class="info_image">
                                <img src="{{ asset($single_exp->info_image) }}" alt="image">
                            </div>
                            <div class="info_content mt-3" style="color: white;">
                                {!! $single_exp->info_content !!}
                            </div>
                        </div>
                    </div>

                    <div class="affiliate-content mt-4">
                        <div class="content" style="margin-top: 50px;">
                            <h3 class="title">{{ $single_exp->benefit_title }}</h3>
                            <div class="info_image">
                                <img src="{{ asset($single_exp->benefit_image) }}" alt="{{ $single_exp->benefit_title }}">
                            </div>
                            <div class="info_content mt-3" style="font-size: 20px;">
                                {!! $single_exp->benefit_content !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="for-desktop" class="section-header">
                        <p>{{ $single_exp->exp_subtitle }}</p>
                        <h3 class="section-title" style="font-size: 30px;">
                            {{ $single_exp->exp_title }}
                        </h3>
                        <div class="latest-result-item-footer mt-3">
                            <div class="pl-3">
                                <i class="fa fa-hourglass-half"></i>
                                @if ($fdate >= $edate)
                                    Already Expired
                                @else
                                    {{ $days == 1 ? $days." day left" : $days." days left" }}
                                @endif
                            </div>
                        </div>
                        <div class="content">
                            {!! $single_exp->exp_content !!}
                        </div>
                        <div class="enter_now mt-3">
                            @if ($fdate >= $edate)
                                <a class="btn btn-danger text-white btn-lg btn-block">Already Expired!</a>
                            @else
                                <a href="#entry_buy" class="btn btn-info btn-lg btn-block">Enter Now</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->
    @php
    $entry = \App\Models\Admin\Entrylevel::where('experience_id', $single_exp->id)->get();
    @endphp
    <!-- join-section start -->
    <section class="join-section section-padding section-bg border-top" id="entry_buy">
        <div class="container">
            <div class="row m-bottom-not-30">
                @foreach($entry as $val)
                <div class="col-lg-6">
                    <div class="join-item text-center">
                        <h3 class="title">{{ $val->entry_title }}</h3>
                        <div class="mt-3">
                            <img src="{{ asset($val->entry_image) }}" alt="{{ $val->entry_title }}" width="500px">
                        </div>
                        <p>{{ $val->entry_description }}</p>
                        <h4 class="title mt-2">${{ $val->entry_price }}</h3>
                            @if ($fdate >= $edate)
                            <a class="cmn-btn text-white">Already Expired!</a>
                        @else
                            <a href="{{ route('products.add.cart', $val->id) }}" class="cmn-btn">Enter Now!</a>
                        @endif
                    </div>
                </div><!-- join-item end -->
                @endforeach
            </div>
            @if ($fdate >= $edate)
            @else
                <div class="free-entry text-center mt-5">
                    <a href="{{ route('enter.without.fee', [Str::random(150), $single_exp->id]) }}" class="btn btn-outline-info">Enter Without Any Entry Fee</a>
                </div>
            @endif
        </div>
    </section>
    <!-- join-section end -->

    <!-- payment-method-section start -->
    <section class="payment-method-section section-padding border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Payment Method</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="payment-method-area d-flex">
                        <div class="payment-item">
                            <img src="{{ asset('frontend/images/payment-methods/1.jpg') }}" alt="payment-method-image">
                        </div><!-- payment-item end -->
                        <div class="payment-item">
                            <img src="{{ asset('frontend/images/payment-methods/2.jpg') }}" alt="payment-method-image">
                        </div><!-- payment-item end -->
                        <div class="payment-item">
                            <img src="{{ asset('frontend/images/payment-methods/3.jpg') }}" alt="payment-method-image">
                        </div><!-- payment-item end -->
                        <div class="payment-item">
                            <img src="{{ asset('frontend/images/payment-methods/4.jpg') }}" alt="payment-method-image">
                        </div><!-- payment-item end -->
                        <div class="payment-item">
                            <img src="{{ asset('frontend/images/payment-methods/5.jpg') }}" alt="payment-method-image">
                        </div><!-- payment-item end -->
                        <div class="payment-item">
                            <img src="{{ asset('frontend/images/payment-methods/6.jpg') }}" alt="payment-method-image">
                        </div><!-- payment-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- payment-method-section end -->

    <!-- testimonial-section start -->
    <section class="legal-content-section border-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="affiliate-content mt-4">
                    <div class="content m-4" style="margin-top: 50px;">
                        <h3 class="title text-center">{{ $single_exp->legal_title }}</h3>
                        <div class="info_content mt-3" style="font-size: 20px;">
                            {!! $single_exp->legal_content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->
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
        .info_content.mt-3 {
            text-align: left;
        }
        #for-mobile {
            display: none;
        }
        @media screen and (min-device-width: 281px) and (max-device-width: 991px) {
            #for-desktop {
                display: none;
            }
            #for-mobile {
                display: block;
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
