@extends('admin.layouts.app')

@section('title', 'All Complete Drawn | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <span class="breadcrumb-item active">Complete-Drawn</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>All Complete Drawn</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-10 pl-0">
                            <h6 class="card-body-title">Drawn Lists</h6>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p">SL</th>
                            <th class="wd-10p">Image</th>
                            <th class="wd-25p">Experience Title</th>
                            <th class="wd-10p">Winner name</th>
                            <th class="wd-10p">Winner Email</th>
                            <th class="wd-10p">Order ID</th>
                            <th class="wd-10p">Wining Date</th>
                            <th class="wd-5p">Status</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($complete as $key => $val)
                            <tr>
                                <td>{{ $complete->firstItem() + $key }}</td>
                                <td><img src="{{ asset($val->experience->featured_image ? $val->experience->featured_image : 'uploads/no-image/no-image.png') }}"
                                         width="80px" height="50px"></td>
                                <td>{{ $val->experience->exp_title }}</td>
                                @if ($val->free_user_id == null)
                                    <td>{{ $val->user->name }}</td>
                                    <td>{{ $val->user->email }}</td>
                                @else
                                    <td>{{ $val->free_user->name }}</td>
                                    <td>{{ $val->free_user->email }}</td>
                                @endif
                                <td>{{ $val->order->ran_order_id }}</td>
                                <td>{{ date('d-M-Y', strtotime($val->created_at)) }}</td>
                                <td>
                                    @if ($val->status == 1)
                                        <span class="badge badge-success">Complete</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.drawn.invoice', $val->id) }}" class="btn btn-sm btn-success">SEND INVOICE</a>
                                    <a href="{{ route('admin.drawn.winner', $val->id) }}" class="btn btn-sm btn-primary">VIEW</a>
                                </td>
                            </tr>
                        @empty
                            <td colspan="20" style="padding-top: 15%; padding-bottom: 15%;">
                                <h3 class="text-dark text-center">NO MORE COMPLETE DRAWN LIST HERE</h3>
                                <div class="text-center pt-3">
                                    <a href="{{ route('admin.experience.add.new') }}" class="btn btn-md btn-info" >Create First Experience</a>
                                </div>
                            </td>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $complete->links() }}
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
