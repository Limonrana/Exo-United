@extends('admin.layouts.app')
@section('title', 'View Experience | Exo-United')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
            <span class="breadcrumb-item active">View Experience</span>
        </nav>
        <div class="sl-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-xl-6">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                        <h6 class="card-body-title">
                            View Experience
                        </h6>
                        @php
                            $entry = \App\Models\Admin\Entrylevel::where('experience_id', $experience->id)->paginate(5);
                        @endphp
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="wd-40p">Title : </th>
                                    <th class="wd-60p">{{ $experience->exp_title }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Category :</th>
                                    <th class="wd-60p">{{ $experience->category->category_name }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Charity :</th>
                                    <th class="wd-60p">{{ $experience->charity->charity_name }}</th>
                                </tr>
                                <tr>
                                    <th class="wd-40p">Total Entry :</th>
                                    <th class="wd-60p">{{ count($entry) }} Entry</th>
                                </tr>
                                @php
                                    $fdate = \Illuminate\Support\Carbon::today();
                                    $edate = $experience->end_time;
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
                                    <th class="wd-40p">Created :</th>
                                    <th class="wd-60p">{{ $experience->created_at ? $experience->created_at->diffForHumans() : "N/A" }}</th>
                                </tr>
                                </thead>
                            </table>
                            <div class="button float-right">
                                @if ($experience->status == 1)
                                    <a href="{{ route('admin.experience.edit', $experience->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('admin.experience') }}" class="btn btn-danger" id="cancel">Back</a>
                                @else
                                    <a href="{{ route('admin.experience') }}" class="btn btn-danger" id="cancel">Back</a>
                                @endif
                            </div>
                        </div>
                    </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-xl-6 mg-t-25 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Experience Images</h6>
                        <div class="table-wrapper">
                            <div class="row">
                                <div class="col-md-4">
                                    Featured Image :<br> <img src="{{ asset($experience->featured_image) }}" width="180px" alt="">
                                </div>
                                <div class="col-md-4">
                                    Gallery Image 1 :<br> <img src="{{ asset($experience->gallery_image_1) }}" width="180px" alt="">
                                </div>
                                <div class="col-md-4">
                                    Gallery Image 2 :<br> <img src="{{ asset($experience->gallery_image_2) }}" width="180px" alt="">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-5 mt-3">
                                    Info Image :<br> <img src="{{ asset($experience->info_image) }}" width="200px" alt="">
                                </div>
                                <div class="col-md-5 mt-3">
                                    Benefit Image 1 :<br> <img src="{{ asset($experience->benefit_image) }}" width="200px" alt="">
                                </div>
                                <div class="col-md-1"></div>
                            </div>
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
                            <th class="wd-30p">Entry Name</th>
                            <th class="wd-15p">Entry Number</th>
                            <th class="wd-15p">Entry Price</th>
                            <th class="wd-15p">Created</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($entry as $key => $val)
                            <tr>
                                <td>{{ $entry->firstItem() + $key }}</td>
                                <td><img src="{{ asset($val->entry_image ? $val->entry_image :'uploads/no-image/no-image.png') }}"
                                         width="80px" height="50px"></td>
                                <td>{{ $val->entry_title }}</td>
                                <td>{{ $val->entry_quantity }} Entries</td>
                                <td>${{ $val->entry_price }}</td>
                                <td>{{ $val->created_at ? $val->created_at->diffForHumans() : "N/A" }}</td>
                                <td>
                                    <a href="{{ route('admin.entry.edit', $val->id) }}" target="_blank" class="btn btn-sm btn-primary">EDIT</a>
                                </td>
                            </tr>
                        @empty
                            <td colspan="20" style="padding-top: 5%; padding-bottom: 5%;">
                                <h3 class="text-dark text-center">NO PRODUCT HERE</h3>
                            </td>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $entry->links() }}
                </div><!-- table-wrapper -->
                </div>
            </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection
