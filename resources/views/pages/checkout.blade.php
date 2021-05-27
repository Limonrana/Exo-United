@extends('layouts.app')

@section('title', 'Exo-United | Checkout Page')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">Checkout Page</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item active">checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- cart-section start -->
    <section class="cart-section section-padding" style="padding-top: 50px; padding-bottom: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-area d-flex">
                            <div class="col-lg-8">
                                <div class="cart-table" style="background-color: #2B2D5C; padding: 15px;">
                                    <h3 class="title">Billing Information</h3>
                                    <form class="contact-form mt-4" action="{{ route('order.page') }}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-grp col-md-6">
                                                <label for="name" class="text-white pl-3">Full Name</label>
                                                @if (Auth::user()->name)
                                                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" readonly>
                                                @else
                                                    <input type="text" name="name" id="name" placeholder="Full Name" required>
                                                @endif
                                            </div>
                                            <div class="form-grp col-md-6 mt-0">
                                                <label for="phone" class="text-white pl-3">Phone Number</label>
                                                @if (Auth::user()->phone)
                                                    <input type="tel" name="phone" id="phone" value="{{ Auth::user()->phone }}" readonly>
                                                @else
                                                    <input type="tel" name="phone" id="phone" maxlength="14" onkeypress="return isNumberKey(event)" placeholder="Phone No" required>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-grp mt-3">
                                            <label for="email" class="text-white pl-3">Email Address</label>
                                            @if (Auth::user()->email)
                                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" readonly>
                                            @else
                                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                            @endif
                                        </div>
                                            <div class="form-grp mt-3">
                                                <label for="address_1" class="text-white pl-3">Street Address</label>
                                                @if (Auth::user()->address_1)
                                                    <input type="text" name="address_1" id="address_1" value="{{ Auth::user()->address_1 }}" readonly>
                                                @else
                                                    <input type="text" name="address_1" id="address_1" placeholder="Street Address" required>
                                                @endif
                                            </div>
                                        <div class="form-row mt-3">
                                            <div class="form-grp col-md-6">
                                                <label for="city" class="text-white pl-3">City</label>
                                                @if (Auth::user()->city)
                                                    <input type="text" name="city" id="city" value="{{ Auth::user()->city }}" readonly>
                                                @else
                                                    <input type="text" name="city" id="city" placeholder="City" required>
                                                @endif
                                            </div>
                                            <div class="form-grp col-md-6 mt-0">
                                                <label for="zip" class="text-white pl-3">Zip/Postal Code</label>
                                                @if (Auth::user()->zip)
                                                    <input type="text" name="zip" id="zip" value="{{ Auth::user()->zip }}" readonly>
                                                @else
                                                    <input type="text" name="zip" id="zip" placeholder="Zip/Postal Code" required>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="form-grp col-md-6">
                                                <label for="country" class="text-white pl-3">Country</label>
                                                @if (Auth::user()->country)
                                                    <input type="text" name="country" id="country" value="{{ Auth::user()->country }}" readonly>
                                                @else
                                                    <input type="text" name="country" id="country" placeholder="Country" required>
                                                @endif
                                            </div>
                                            <div class="form-grp col-md-6 mt-0">
                                                <label for="state" class="text-white pl-3">State</label>
                                                @if (Auth::user()->state)
                                                    <input type="text" name="state" id="state" value="{{ Auth::user()->state }}" readonly>
                                                @else
                                                    <input type="text" name="state" id="state" placeholder="State" required>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-grp">
                                            <input class="submit-btn" type="submit" value="Go To Payment Page">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cart-summary-area">
                                    <h3 class="summary-area-title">Cart Summary</h3>
                                    <div class="sub-total-amount">
                                        <div class="row">
                                        @foreach ($cart as $val)
                                            <div class="col-md-4">
                                                <img src="{{ asset($val->options->image) }}" width="140px" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="title">
                                                    {{ $val->options->entry_number }} Entries<br>
                                                    {{ Str::limit($val->name, 22) }}
                                                </span>
                                                <span class="amount">${{ $val->price }} x {{ $val->qty }}</span>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="sub-total-amount">
                                        <span class="title">Subtotal</span>
                                        <span class="amount">${{ Cart::Subtotal() }}</span>
                                    </div>
                                    <div class="total-amount">
                                        <span class="title">total payment</span>
                                        <span class="amount">${{ Cart::Subtotal() }}</span>
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
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- cart-section end -->
@endsection

@section('css')
    <style>
        select#country {
            background-color: #303266;
            color: #ffffff;
            border: none;
            padding: 20px 0px 20px 25px;
            border-radius: 35px;
        }
        select#state {
            background-color: #303266;
            color: #ffffff;
            border: none;
            padding: 20px 0px 20px 25px;
            border-radius: 35px;
            width: 100%;
        }
        .sub-total-amount {
            padding: 0px !important;
        }
    </style>
@endsection
@section('js')
    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@endsection
