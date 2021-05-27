@extends('admin.layouts.app')

@section('title', 'All Banners | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <span class="breadcrumb-item">Theme-Panel</span>
            <span class="breadcrumb-item active">Banner</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>All Banners</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-10 pl-0">
                            <h6 class="card-body-title">Banner List</h6>
                        </div>
                        <div class="col-lg-2 text-right pr-0 mb-2">
                            <a href="{{ route('admin.theme.banner.add.new') }}" class="btn btn-sm btn-info" >Add New</a>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p">SL</th>
                            <th class="wd-10p">Image</th>
                            <th class="wd-25p">Heading</th>
                            <th class="wd-15p">Position</th>
                            <th class="wd-10p">Created</th>
                            <th class="wd-10p">Updated</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($banner as $key => $val)
                            <tr>
                                <td>{{ $banner->firstItem() + $key }}</td>
                                <td><img src="{{ asset($val->bg_image) }}" width="120px" height="60px" alt=""></td>
                                <td>{{ $val->banner_heading }}</td>
                                <td>{{ $val->is_bg_main == 0 ? 'Main BG' : 'Right BG' }}</td>
                                <td>{{ $val->created_at ? $val->created_at->diffForHumans() : "N/A" }}</td>
                                <td>{{ $val->updated_at ? $val->updated_at->diffForHumans() : "N/A" }}</td>
                                <td>
                                    @if ($val->status == 0)
                                        <a href="{{ route('admin.theme.banner.active', $val->id) }}" class="btn btn-sm btn-success">Enable</a>
                                        <a href="{{ route('admin.theme.banner.delete', $val->id) }}" class="btn btn-sm btn-outline-danger" id="delete">DELETE</a>
                                    @else
                                        <a href="{{ route('admin.theme.banner.deactivate', $val->id) }}" class="btn btn-sm btn-success">Disable</a>
                                        <a href="{{ route('admin.theme.banner.edit', $val->id) }}" class="btn btn-sm btn-outline-info">EDIT</a>
                                        <a href="{{ route('admin.theme.banner.delete', $val->id) }}" class="btn btn-sm btn-outline-danger" id="delete">DELETE</a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <td colspan="20" style="padding-top: 15%; padding-bottom: 15%;">
                                <h3 class="text-dark text-center">NO MORE BANNER HERE</h3>
                                <div class="text-center pt-3">
                                    <a href="{{ route('admin.theme.banner.add.new') }}" class="btn btn-md btn-info">Create First Banner</a>
                                </div>
                            </td>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $banner->links() }}
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
