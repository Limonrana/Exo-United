@extends('admin.layouts.app')

@section('title', 'All Experiences | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <span class="breadcrumb-item active">Experiences</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>All Experiences</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-10 pl-0">
                            <h6 class="card-body-title">Experience List</h6>
                        </div>
                        <div class="col-lg-2 text-right pr-0 mb-2">
                            <a href="{{ route('admin.experience.add.new') }}" class="btn btn-sm btn-info" >Add New</a>
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
                            <th class="wd-10p">Category</th>
                            <th class="wd-10p">Charity</th>
                            <th class="wd-10p">Total Entry</th>
                            <th class="wd-10p">Created</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($experience as $key => $val)
                            @php
                                $entry = \App\Models\Admin\Entrylevel::where('experience_id', $val->id)->get();
                            @endphp
                        <tr>
                            <td>{{ $experience->firstItem() + $key }}</td>
                            <td><img src="{{ asset($val->featured_image ? $val->featured_image : 'uploads/no-image/no-image.png') }}"
                                     width="80px" height="50px"></td>
                            <td>{{ $val->exp_title }}</td>
                            <td>{{ $val->category->category_name }}</td>
                            <td>{{ $val->charity->charity_name }}</td>
                            <td>{{ count($entry) }} Entry</td>
                            <td>{{ $val->created_at ? $val->created_at->diffForHumans() : "N/A" }}</td>
                            <td>
                                @if ($val->status == 1)
                                    <a href="{{ route('admin.experience.inactive', $val->id) }}" class="btn btn-sm btn-warning">Disable</a>
                                    <a href="{{ route('admin.experience.view', $val->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye fa-lg" title="VIEW"></i></a>
                                    <a href="{{ route('admin.experience.edit', $val->id) }}" class="btn btn-sm btn-info"><i class="fa fa-pencil fa-lg" title="EDIT"></i></a>
                                    <a href="{{ route('admin.experience.delete', $val->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-close fa-lg" title="DELETE"></i></a>
                                @else
                                    <a href="{{ route('admin.experience.active', $val->id) }}" class="btn btn-sm btn-success">Enable</a>
                                    <a href="{{ route('admin.experience.delete', $val->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-close fa-lg" title="DELETE"></i></a>
                                @endif
                            </td>
                        </tr>
                        @empty
                            <td colspan="20" style="padding-top: 15%; padding-bottom: 15%;">
                                <h3 class="text-dark text-center">NO MORE EXPERIENCE HERE</h3>
                                <div class="text-center pt-3">
                                    <a href="{{ route('admin.experience.add.new') }}" class="btn btn-md btn-info" >Create First Experience</a>
                                </div>
                            </td>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $experience->links() }}
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
