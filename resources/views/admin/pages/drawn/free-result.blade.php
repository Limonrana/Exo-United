@extends('admin.layouts.app')
@section('title', 'Drawn Result | Exo-United')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
            <span class="breadcrumb-item active">Drawn Result</span>
        </nav>
        <div class="sl-pagebody">

            <div class="row-sm mg-t-20 pl-2 pr-2">
                <div class="card pd-20 pd-sm-40" id="mydiv">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10 text-center">Drawn Processing.......</h6>
                    <div class="col-md-12 mg-t-30">
                        <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                            <div class="sk-cube-grid">
                                <div class="sk-cube sk-cube1"></div>
                                <div class="sk-cube sk-cube2"></div>
                                <div class="sk-cube sk-cube3"></div>
                                <div class="sk-cube sk-cube4"></div>
                                <div class="sk-cube sk-cube5"></div>
                                <div class="sk-cube sk-cube6"></div>
                                <div class="sk-cube sk-cube7"></div>
                                <div class="sk-cube sk-cube8"></div>
                                <div class="sk-cube sk-cube9"></div>
                            </div>
                        </div><!-- d-flex -->
                        <div class="text">
                            <h5 class="text-center">Processing.......</h5>
                        </div>
                    </div>
                </div>

                <div class="card pd-20 pd-sm-40" id="mydiv2">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Drawn Result</h6>
                    <div class="col-md-12 mg-t-30">
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="wd-40p">Winner Name : </th>
                                    <th class="wd-60p">{{ $winner->free_user->name }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Winner Email : </th>
                                    <th class="wd-60p">{{ $winner->free_user->email }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Winner Phone : </th>
                                    <th class="wd-60p">{{ $winner->free_user->phone }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Winner Address :</th>
                                    <th class="wd-60p">{{ $winner->free_user->city.", ".$winner->free_user->state.", ".$winner->free_user->country }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Experience Name :</th>
                                    <th class="wd-60p">{{ $winner->experience->exp_title }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Entry Price :</th>
                                    <th class="wd-60p">${{ $winner->order->order_amount }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Order ID :</th>
                                    <th class="wd-60p">{{ $winner->order->ran_order_id }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Winning Date :</th>
                                    <th class="wd-60p">{{ date('d M, Y', strtotime($winner->created_at)) }}</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection

@section('admin-js')
    <script>
        $("#mydiv2").hide();
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 30000); // <-- time in milliseconds

        setTimeout(function(){ $("#mydiv2").show(); }, 30000);
    </script>
@endsection
