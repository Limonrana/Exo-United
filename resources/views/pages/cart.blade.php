@extends('layouts.app')

@section('title', 'Exo-United | Cart Page')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}" style="padding-top: 60px; padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">Cart Page</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item active">cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- cart-section start -->
    <section class="cart-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-area d-flex">
                        @if (count($cart) != 0)
                        <div class="col-lg-8">
                            <div class="cart-table">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @forelse($cart as $val)
                                        @php
                                        $related = \App\Models\Admin\Product::where('category_id', $val->options->category_id)->where('status', 1)->where('drawn', 0)->take(3)->get();
                                        @endphp
                                    <tr>
                                        <td><img src="{{ asset($val->options->image) }}" width="120px" alt="{{ $val->name }}"></td>
                                        <td class="text-left pl-4">
                                            <p>{{ $val->options->entry_number }} Entries</p>
                                            <h6>{{ $val->name }}</h6>
                                        </td>
                                        <td>${{ $val->price }}</td>
                                        <td><a href="{{ route('cart.remove', $val->rowId) }}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td style="padding-top: 7%; padding-bottom: 7%;">
                                                <h2 class="text-center">Your cart is currently empty.</h2>
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-summary-area">
                                <h3 class="summary-area-title">Cart Summary</h3>
                                <div class="sub-total-amount">
                                    <span class="title">Subtotal</span>
                                    <span class="amount">${{ Cart::Subtotal() }}</span>
                                </div>
                                <div class="discount-amount">
                                    <span class="title">discount</span>
                                    <span class="amount">$0.00</span>
                                </div>
                                <div class="total-amount">
                                    <span class="title">total payment</span>
                                    <span class="amount">${{ Cart::Subtotal() }}</span>
                                    <a href="{{ route('checkout.page') }}" class="payment-btn">Continue To Checkout</a>
                                </div>
                                <div class="card-area">
                                    <div class="card-list">
                                        <a><img src="{{ asset('frontend/images/payment-methods/1.jpg') }}" alt="image"></a>
                                        <a><img src="{{ asset('frontend/images/payment-methods/2.jpg') }}" alt="image"></a>
                                        <a><img src="{{ asset('frontend/images/payment-methods/3.jpg') }}" alt="image"></a>
                                        <a><img src="{{ asset('frontend/images/payment-methods/4.jpg') }}" alt="image"></a>
                                        <a><img src="{{ asset('frontend/images/payment-methods/5.jpg') }}" alt="image"></a>
                                        <a><img src="{{ asset('frontend/images/payment-methods/6.jpg') }}" alt="image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                            <div class="col-lg-12">
                                <h3>Your cart is currently empty.</h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart-section end -->

    <!-- jackpot-section start -->
    <section class="jackpot-section section-padding border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Exclusive Win Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse($related as $val)
                    <div class="col-md-4">
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
    <!-- jackpot-section start -->
@endsection
