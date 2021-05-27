@extends('admin.layouts.app')

@section('title', 'All Entry | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <span class="breadcrumb-item active">Entry</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>All Entries</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-10 pl-0">
                            <h6 class="card-body-title">Entry List</h6>
                        </div>
                        <div class="col-lg-2 text-right pr-0 mb-2">
                            <a href="{{ route('admin.entry.add.new') }}" class="btn btn-sm btn-info" >Add New</a>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p">SL</th>
                            <th class="wd-10p">Image</th>
                            <th class="wd-20p">Experience Name</th>
                            <th class="wd-15p">Entry Title</th>
                            <th class="wd-15p">Entry Number</th>
                            <th class="wd-10p">Price</th>
                            <th class="wd-10p">Created</th>
                            <th class="wd-15">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($entry as $key => $val)
                        <tr>
                            <td>{{ $entry->firstItem() + $key }}</td>
                            <td><img src="{{ asset($val->entry_image ? $val->entry_image : 'uploads/no-image/no-image.png') }}"
                                     width="80px" height="50px"></td>
                            <td>{{ $val->experience->exp_title }}</td>
                            <td>{{ $val->entry_title }}</td>
                            <td>{{ $val->entry_price }}</td>
                            <td>{{ $val->entry_quantity }}</td>
                            <td>{{ $val->created_at ? $val->created_at->diffForHumans() : "N/A" }}</td>
                            <td>
                                @if ($val->status == 1)
                                    <a href="{{ route('admin.entry.inactive', $val->id) }}" class="btn btn-sm btn-warning">Disable</a>
                                    <a href="{{ route('admin.entry.edit', $val->id) }}" class="btn btn-sm btn-info"><i class="fa fa-pencil fa-lg" title="EDIT"></i></a>
                                    <a href="{{ route('admin.entry.delete', $val->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-close fa-lg" title="DELETE"></i></a>
                                @else
                                    <a href="{{ route('admin.entry.active', $val->id) }}" class="btn btn-sm btn-success">Enable</a>
                                    <a href="{{ route('admin.entry.delete', $val->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-close fa-lg" title="DELETE"></i></a>
                                @endif
                            </td>
                        </tr>
                        @empty
                            <td colspan="20" style="padding-top: 15%; padding-bottom: 15%;">
                                <h3 class="text-dark text-center">NO MORE ENTRY HERE</h3>
                                <div class="text-center pt-3">
                                    <a href="{{ route('admin.experience.add.new') }}" class="btn btn-md btn-info" >Create First Entry</a>
                                </div>
                            </td>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $entry->links() }}
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
