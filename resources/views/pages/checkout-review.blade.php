@extends('layouts.app')

@section('title', 'Exo-United | Payment Page')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">Payment Page</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item active">Payment</li>
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
                    <div class="cart-area">
                        <div class="cart-table" style="background-color: #2B2D5C; padding: 15px;">
                            <h3 class="title">Payment Information</h3>
                            <div class="alert alert-success mt-3" role="alert">
                                Billing Email    : <b>{{ Auth::user()->email }}</b><br>
                                Billing Address  : <b>{{ Auth::user()->address_1.Auth::user()->city.Auth::user()->zip.Auth::user()->country }}</b><br>
                            </div>
                            <div class="cart-summary-area">
                                <h3 class="summary-area-title">Cart Summary</h3>
                                <div class="sub-total-amount">
                                    <div class="row">
                                        @foreach ($cart as $val)
                                            <div class="col-md-2">
                                                <img src="{{ asset($val->options->image) }}" width="140px" alt="">
                                            </div>
                                            <div class="col-md-8 mt-3">
                                                <span class="title">
                                                    {{ $val->options->entry_number }} Entries<br>
                                                    {{ Str::limit($val->name, 80) }}
                                                </span>
                                            </div>
                                            <div class="col-md-2 mt-4">
                                                <span class="amount">${{ $val->price }} x {{ $val->qty }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="total-amount">
                                    <div class="row">
                                        <div class="col-md-10 mt-2">
                                            <span class="title">total payment</span>
                                        </div>
                                        <div class="col-md-2">
                                            <span class="amount">${{ Cart::Subtotal() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('order.payment') }}" method="post" class="contact-form mt-4" id="payment-form">
                                @csrf
                                <div class="checkout-step-shipping">
                                    <h5 class="step-title">Payment Methods:</h5>

                                    <table class="table table-step-shipping mt-3">
                                        <tbody>
                                        <tr>
                                            <td><input type="radio" id="stripe" name="payment_type" value="stripe" checked></td>
                                            <td><strong>Stripe</strong></td>
                                            <td>Credit Or Debit Card</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" id="paypal" name="payment_type" value="paypal"></td>
                                            <td><strong>Paypal</strong></td>
                                            <td>Paypal/Credit and Debit Card</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- End .checkout-step-shipping -->
                                <div id="formstripe" class="pay_form">
                                    <div class="alert alert-success" role="alert">
                                        <strong>Pay via Stripe,</strong> you can pay with your credit card or debit card.
                                    </div><!-- End .alert -->
                                </div><!-- End #checkout-shipping-address -->

                                <div id="formpaypal" class="pay_form">
                                    <div class="alert alert-success" role="alert">
                                        <strong>Pay via PayPal,</strong> you can pay with your credit card if you don’t have a PayPal account.
                                    </div><!-- End .alert -->
                                </div><!-- End #checkout-shipping-address -->
                                <div class="form-grp">
                                    <input class="submit-btn" type="submit" value="Place Order">
                                </div>
                            </form>
                            <div class="card-area text-center mt-4">
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
    </section>
    <!-- cart-section end -->
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

    <script>
        $(document).ready(function() {
            $('#formstripe').show();
            $('#formpaypal').hide();
            $("input[name$='payment_type']").click(function() {
                var test = $(this).val();
                $("div.pay_form").hide();
                $("#form" + test).show();
            });
        });
    </script>

@endsection
