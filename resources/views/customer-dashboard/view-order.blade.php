@extends('layouts.app')

@section('title', 'Exo-United | View Order')

@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('site_url') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Order</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last dashboard-content">
                    <h2>My Dashboard</h2>
                    <div class="mb-4"></div><!-- margin -->

                    <h3>Order Information</h3>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    Order Information
                                </div><!-- End .card-header -->

                                <div class="card-body">
                                    <p>
                                        User Name : {{ Auth::user()->name }}<br>
                                        User Email : {{ Auth::user()->email }}<br>
                                    </p>
                                    @foreach($order_details as $val)
                                    <p>
                                       Experience: {{ $val->exp_title }}<br>
                                       Entry Title:  {{ $val->entry_title }}<br>
                                       Total Price : ${{ $val->total_price }}<br>
                                    </p>
                                    @endforeach
                                </div><!-- End .card-body -->
                            </div><!-- End .card -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-9 -->
                @include('customer-dashboard/partials/sidebar')
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->
    </main><!-- End .main -->
@endsection

@section('css')
    <style>
        .cmn-btn {
            background-color: transparent;
        }
        .card-body p {
            color: #636363 !important;
        }
    </style>
@endsection
