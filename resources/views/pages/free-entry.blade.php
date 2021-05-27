@extends('layouts.app')

@section('title', 'Exo-United | Free Entry Page')

@section('content')
    <!-- cart-section start -->
    <section class="cart-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-area d-flex">
                            <div class="col-lg-8">
                                <div class="cart-table" style="background-color: #2B2D5C; padding: 15px;">
                                    <h3 class="title">Alternative Method of Entry</h3>
                                    <form class="contact-form mt-4" action="{{ route('free.entry.order', [Str::random(150), $exp->id]) }}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-grp col-md-6">
                                                <label for="name" class="text-white pl-3">Full Name</label>
                                                <input type="text" name="name" id="name" placeholder="Full Name" required>
                                                <input type="hidden" name="exp_id" id="exp_id" value="{{ $exp->id }}">
                                            </div>
                                            <div class="form-grp col-md-6 mt-0">
                                                <label for="phone" class="text-white pl-3">Phone Number</label>
                                                <input type="tel" name="phone" id="phone" maxlength="14" onkeypress="return isNumberKey(event)" placeholder="Phone No" required>
                                            </div>
                                        </div>
                                        <div class="form-grp mt-3">
                                            <label for="email" class="text-white pl-3">Email Address</label>
                                            <input type="email" name="email" id="email" placeholder="Email Address" required>
                                        </div>
                                            <div class="form-grp mt-3">
                                                <label for="address_1" class="text-white pl-3">Street Address</label>
                                                <input type="text" name="address" id="address" placeholder="Street Address" required>
                                            </div>
                                        <div class="form-row mt-3">
                                            <div class="form-grp col-md-6">
                                                <label for="city" class="text-white pl-3">City</label>
                                                <input type="text" name="city" id="city" placeholder="City" required>
                                            </div>
                                            <div class="form-grp col-md-6 mt-0">
                                                <label for="zip" class="text-white pl-3">Zip/Postal Code</label>
                                                <input type="text" name="zip" id="zip" placeholder="Zip/Postal Code" required>
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="form-grp col-md-6">
                                                <label for="country" class="text-white pl-3">Country</label>
                                                <input type="text" name="country" id="country" placeholder="Country" required>
                                            </div>
                                            <div class="form-grp col-md-6 mt-0">
                                                <label for="state" class="text-white pl-3">State</label>
                                                <input type="text" name="state" id="state" placeholder="State" required>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cart-summary-area">
                                    <h3 class="summary-area-title" style="padding-left: 0px;">Entry Summary</h3>
                                    <div class="sub-total-amount">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset($exp->featured_image) }}" width="140px" alt="{{ $exp->exp_title }}">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="amount">Free Entries</span>
                                                <span class="title">
                                                    {{ Str::limit($exp->exp_title, 22) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-total-amount">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span><b>Subtotal</b></span>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span class="amount text-right">$0.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-amount">
                                        <span class="title">Total Payment</span>
                                        <span class="amount">$0.00</span>
                                    </div>
                                    <div class="card-area text-center" style="padding: 0px; padding-top: 20px">
                                        <button type="submit" class="cmn-btn btn-block">Submit Entry</button>
                                        </form>
                                        <p class="mt-5">By continuing, you agree to our <a href="{{ route('terms.page') }}" target="_blank"><u>Terms of Use</u></a>
                                            and our <a href="{{ route('privacy.page') }}" target="_blank"><u>Privacy Policy</u></a>.</p>
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
