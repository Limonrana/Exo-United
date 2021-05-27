@extends('layouts.app')
@section('title', 'Exo-United | Complete Orders')
@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('site_url') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Complete Order</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 order-lg-last dashboard-content pb-5">
                    <h2>Complete Order</h2>
                    <div class="mb-3"></div><!-- margin -->
                    <table class="table m-auto">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Order No</th>
                            <th scope="col">Transaction ID</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($complete_orders as $key => $val)
                            <tr>
                                <td>{{ $complete_orders->firstItem() + $key }}</td>
                                <td>
                                    @if ($val->payment_type == 'stripe')
                                        {{ 'Stripe' }}
                                    @else
                                        {{ 'Paypal' }}
                                    @endif
                                </td>
                                <td>{{ $val->ran_order_id }}</td>
                                <td>{{ $val->transaction_id }}</td>
                                <td>${{ $val->order_amount }}</td>
                                <td>
                                    @if ($val->status == 0)
                                        <span class="badge badge-warning text-white p-1">Pending/New</span>
                                    @elseif ($val->status == 1)
                                        <span class="badge badge-info">Processing</span>
                                    @elseif ($val->status == 2)
                                        <span class="badge badge-success">Complete</span>
                                    @else
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('customer.order.view', $val->id) }}" class="btn badge-info" style="padding-top: 8px; padding-bottom: 8px;">View</a>
                                </td>
                            </tr>
                        @empty
                            <td colspan="20" style="padding-top: 7%; padding-bottom: 5%;">
                                <h3 class="text-white text-center">NO MORE COMPLETE ORDER HERE</h3>
                                <div class="text-center pt-5">
                                    <a href="{{ route('shop.page') }}" class="btn btn-sm btn-info" >Order Now</a>
                                </div>
                            </td>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $complete_orders->links() }}

                </div>
                @include('customer-dashboard/partials/sidebar')
            </div>
        </div>
        <div class="mb-5"></div><!-- margin -->
    </main><!-- End .main -->

@endsection

@section('css')
    <style>
        .cmn-btn {
            background-color: transparent;
        }
        table td {
            color: white !important;
        }
    </style>
@endsection
