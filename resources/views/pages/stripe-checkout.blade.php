@extends('layouts.app')

@section('title', 'Exo-United | Stripe Payment')

@section('content')
    <!-- cart-section start -->
    <section class="cart-section section-padding" style="padding-top: 150px; padding-bottom: 150px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="cart-area">
                        <div class="cart-table" style="background-color: #2B2D5C; padding: 15px;">
                            <h3 class="title">Card Information</h3>
                            <form action="{{ route('stripe.payment.success') }}" method="post" class="contact-form mt-4" id="payment-form">
                                @csrf
                                <div id="formstripe" class="pay_form">
                                    <!-- STRIPE PAYMENT START -->
                                    <div class="credit" id="credit_card_form">
                                        <label for="card-element" class="text-white">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                    <!-- STRIPE PAYMENT END -->
                                </div><!-- End #checkout-shipping-address -->
                                <div class="form-grp">
                                    <input class="submit-btn" type="submit" value="Pay Now">
                                </div>
                            </form>
                            <div class="card-area text-center mt-4">
                                <div class="card-list">
                                    <a><img src="{{ asset('frontend/images/payment-methods/1.jpg') }}" alt="image"></a>
                                    <a><img src="{{ asset('frontend/images/payment-methods/2.jpg') }}" alt="image"></a>
                                    <a><img src="{{ asset('frontend/images/payment-methods/3.jpg') }}" alt="image"></a>
{{--                                    <a><img src="{{ asset('frontend/images/payment-methods/4.jpg') }}" alt="image"></a>--}}
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

@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/payment/css/stripe.css') }}">
@endsection

@section('js')
    <script src="//js.stripe.com/v3/"></script>
    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

    <script>
        // Create a Stripe client.
        var stripe = Stripe('{{env("STRIPE_KEY")}}');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }

    </script>
@endsection
