@extends('layouts.app')

@section('title', 'Winners | Exo-United')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner my-banner has_bg_image" data-background="{{ asset('frontend/images/winner/winner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- latest-winner-section start -->
    <section class="latest-winner-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">Our Sweepstakes Winners </h2>
                        <p>Our biggest winners have won sweepstakes jackpots and million-dollar prizes - read their stories below. Perhaps your sweepstakes win will soon be added to our list!</p>
                    </div>
                </div>
            </div>
            <div class="row m-bottom-not-30">
                @foreach($winner as $val)
                    <div class="col-lg-6 col-md-6 col-sm-6">
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
                                    View Details<
                                </a>
                            </div>
                        </div>
                    </div><!-- winner-item end -->
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="load-more-btn-area">
                        {{ $winner->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-winner-section end -->
@endsection
