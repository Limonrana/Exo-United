@extends('layouts.app')

@section('title', 'Trending Experience | Exo-United')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">Find Your Dreams</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item active">experience</li>
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
                                    <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}">
                                        <img src="{{ asset($val->featured_image) }}" alt="{{ $val->exp_title }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="post-meta">
                                        <li><span>{{ $val->exp_subtitle }}</span></li>
                                    </ul>
                                    <h3 class="post-title">
                                        <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}">
                                            {{ $val->exp_title }}
                                        </a>
                                    </h3>
                                    <a href="{{ route('single.experience.view', [$val->slug, Str::random(20)]) }}" class="blog-btn">
                                        view more
                                    </a>
                                </div>
                            </div>
                            @php
                                $fdate = \Illuminate\Support\Carbon::today();
                                $edate = $val->end_time;
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

    <!-- brand-section start -->
    <div class="brand-section border-top border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        @forelse($charity as $val)
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{ asset($val->charity_logo) }}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-section end -->
@endsection
