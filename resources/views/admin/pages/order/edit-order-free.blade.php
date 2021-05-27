@extends('admin.layouts.app')
@section('title', 'Edit Order | Exo-United')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
            <span class="breadcrumb-item active">Edit Order</span>
        </nav>
        <div class="sl-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-xl-6">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                        <h6 class="card-body-title">
                            Billing Details
                            <span class="float-right" style="margin-top: -30px;">
                                <img src="{{ asset('uploads/no-image/no-user.png') }}" width="50px" style="border-radius: 100%">
                            </span>
                        </h6>
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="wd-40p">Name : </th>
                                    <th class="wd-60p">{{ $order_details->name }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Email :</th>
                                    <th class="wd-60p">{{ $order_details->email }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Phone :</th>
                                    <th class="wd-60p">{{ $order_details->phone }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Payment :</th>
                                    <th class="wd-60p">
                                        @if ($order_details->payment_type == 'stripe')
                                            {{ 'Stripe' }}
                                        @elseif ($order_details->payment_type == 'paypal')
                                            {{ 'PayPal' }}
                                        @else
                                            {{ 'FREE' }}
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Order ID :</th>
                                    <th class="wd-60p">{{ $order_details->ran_order_id }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Transaction ID :</th>
                                    <th class="wd-60p">{{ $order_details->transaction_id }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Order Date :</th>
                                    <th class="wd-60p">{{ $order_details->created_at }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Total :</th>
                                    <th class="wd-60p">${{ $order_details->order_amount }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Status :</th>
                                    <th class="wd-60p text-bold">
                                        <span style="font-size: 14px">
                                            @if ($order_details->refund == 0)
                                                @if ($order_details->status == 0)
                                                    <span class="badge badge-warning text-white p-1">Pending</span>
                                                @elseif ($order_details->status == 1)
                                                    <span class="badge badge-primary">Processing</span>
                                                @elseif ($order_details->status == 2)
                                                    <span class="badge badge-success">Complete</span>
                                                @else
                                                    <span class="badge badge-danger">On-Hold</span>
                                                @endif
                                            @else
                                                <span class="badge badge-danger">Refunded</span>
                                            @endif

                                        </span>
                                    </th>
                                </tr>
                                </thead>
                            </table>
                            <div class="button float-right">
                                @if ($order_details->status == 0)
                                    <a href="{{ route('admin.approve.order', $order_details->id) }}" class="btn btn-primary">Approve</a>
                                    <a href="{{ route('admin.hold.order', $order_details->id) }}" class="btn btn-danger" id="cancel">On-Hold</a>
                                @elseif ($order_details->status == 1)
                                    <a href="{{ route('admin.hold.order', $order_details->id) }}" class="btn btn-danger" id="cancel">On-Hold</a>
                                @elseif ($order_details->status == 2)
                                    <span class="badge badge-success">Completed</span>
                                @else
                                @endif
                            </div>
                        </div>
                    </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-xl-6 mg-t-25 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Experience Details</h6>
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="wd-50">
                                        <img src="{{ asset($experience->experience->featured_image) }}" width="300px" alt="">
                                    </th>
                                    <th class="wd-50p">
                                        <img src="{{ asset($experience->experience->gallery_image_1) }}" width="300px" alt="">
                                    </th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Title :</th>
                                    <th class="wd-60p">{{ $experience->experience->exp_title }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Category :</th>
                                    <th class="wd-60p">{{ $experience->experience->category->category_name }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Charity :</th>
                                    <th class="wd-60p">{{ $experience->experience->charity->charity_name }}</th>
                                </tr>
                                @php
                                    $fdate = \Illuminate\Support\Carbon::today();
                                    $edate = $experience->experience->end_time;
                                    $date1 = new DateTime($fdate);
                                    $date2 = new DateTime($edate);
                                    $interval = $date1->diff($date2);
                                    $days = $interval->format('%a');
                                @endphp
                                <tr>
                                    <th class="wd-40p">Left :</th>
                                    <th class="wd-60p">{{ $days }} Days Left</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Status :</th>
                                    <th class="wd-60p text-bold">
                                        <span style="font-size: 14px">
                                            @if ($order_details->refund == 0)
                                                @if ($order_details->status == 0)
                                                    <span class="badge badge-warning text-white p-1">Pending</span>
                                                @elseif ($order_details->status == 1)
                                                    <span class="badge badge-primary">Processing</span>
                                                @elseif ($order_details->status == 2)
                                                    <span class="badge badge-success">Complete</span>
                                                @else
                                                    <span class="badge badge-danger">On-Hold</span>
                                                @endif
                                            @else
                                                <span class="badge badge-danger">Refunded</span>
                                            @endif

                                        </span>
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div><!-- card -->
                </div><!-- col-6 -->
            </div><!-- row -->

            <div class="row-sm mg-t-20 pl-2 pr-2">
            <div class="card pd-20 pd-sm-40">
                <div class="col-md-12">

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p">SL</th>
                            <th class="wd-10p">Image</th>
                            <th class="wd-30p">Entry name</th>
                            <th class="wd-10p">Entry Number</th>
                            <th class="wd-10p">Entry Price</th>
                            <th class="wd-10p">Entry QTY</th>
                            <th class="wd-10p">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($order_details->payment_type == 'FREE')
                            <tr>
                                <td>1</td>
                                <td><img src="{{ asset('uploads/no-image/no-image.png') }}"
                                         width="80px" height="50px"></td>
                                <td>Free Entry For Win</td>
                                <td>Free Entries</td>
                                <td>$0.00</td>
                                <td>1</td>
                                <td>$0.00</td>
                            </tr>
                        @else
                        @endif
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
                </div>
            </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection
