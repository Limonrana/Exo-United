@extends('layouts.app')

@section('title', 'E-SHOP - Order Confirm')

@section('content')
    <main class="main mt-5 mb-5">
        <div class="container" style="width: 660px; background: #0088cc14; padding: 30px;">
            <div class="into text-center">
                <div class="my-image text-center">
                    <img src="{{ asset('frontend/images/checked-checkbox.png') }}" class="text-center d-inline">
                </div>
            <h1 class="light-title text-center" style="font-size: 40px">You have been <strong>entered</strong></h1>
                <p class="text-center" style="font-size: 18px;">
                    <b>Please check your email, You'll get Order Details in you email and also You'll receive a another email when it will be drawn.</b>
                </p>
            </div>
            <div class="order pt-3">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width: 70%" class="pl-5">Order ID #</th>
                        <th scope="col" style="width: 10%"></th>
                        <th scope="col">{{ $order->ran_order_id }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->order_details as $val)
                    <tr>
                        <td class="pl-5 text-white">{{ Str::limit($val->exp_title, 40) }}</td>
                        <td class="text-white">Q: {{ $val->quantity }}</td>
                        <td class="text-white">${{ $val->total_price }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="pl-5 text-white">Vat</td>
                        <td></td>
                        <td class="text-white">$00.00</td>
                    </tr>
                    </tbody>
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width: 70%" class="pl-5">Total</th>
                        <th scope="col" style="width: 10%"></th>
                        <th scope="col">${{ $order->order_amount }}</th>
                    </tr>
                    </thead>
                </table>
            </div>

            <div class="row pt-5 pl-5">
                <div class="col-md-12">
                    <h5 class="title">Billing <strong>Details</strong></h5>

                    <div class="contact-info">
                        <div>
                            <span><b>Name :</b> {{ $order->name }}<br>
                                <b>Email   :</b> {{ $order->email }}<br>
                                <b>Phone   :</b> {{ $order->phone }}<br>
                                <b>Address :</b> {{ $order->address }}<br>
                                <b>City/State :</b> {{ $order->city }} / {{ $order->state }}<br>
                                <b>Country/Zip :</b> {{ $order->country }} - {{ $order->zip }}
                            </span>
                        </div>
                    </div><!-- End .order-info -->
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->

            <div class="button text-center mt-4">
                <a href="{{ route('home') }}" class="btn my-btn">My Account</a>
                <a href="{{ route('shop.page') }}" class="btn btn-info">Browse Experience</a>
            </div>
        </div><!-- End .container -->

        <div class="mb-8"></div><!-- margin -->
    </main><!-- End .main -->
@endsection

@section('css')
    <style>
        .table .thead-dark th {
            color: #fff;
            background-color: #0088CC;
            border-color: #0088CC;
        }
        .my-btn {
            color: #fff;
            background-color: #0088CC;
            border-color: #0088CC;
        }
        .my-btn:hover {
            color: #fff;
            background-color: #29aeef;
            border-color: #29aeef;
        }
    </style>
@endsection
