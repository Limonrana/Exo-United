@extends('admin.layouts.app')

@section('title', 'All Charity | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <span class="breadcrumb-item active">Edit-Charity</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Edit Charity</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Edit a Charity</h6>
                <form action="{{ route('admin.charity.update', $charity->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="charity_name">Charity Name</label>
                            <input type="text" class="form-control @error('charity_name') is-invalid @enderror" id="charity_name" name="charity_name" value="{{ $charity->charity_name }}">
                            @error('charity_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="charity_logo">Charity Logo</label>
                            <input type="file" class="form-control" id="charity_logo" name="charity_logo">
                        </div>
                        <div class="form-group">
                            <label for="brand_logo">Preview: </label>
                            <img src="{{$charity->charity_logo ? asset($charity->charity_logo) : asset('/uploads/no-image/no-image.png') }}" alt="" width="120px" height="75px">
                            <input type="hidden" class="form-control" id="old_logo" name="old_logo" value="{{ $charity->charity_logo }}">
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="{{ route('admin.charity') }}" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</a>
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
