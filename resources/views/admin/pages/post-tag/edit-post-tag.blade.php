@extends('admin.layouts.app')

@section('title', 'Edit Post Tags | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="{{ route('admin.post') }}">Post</a>
            <span class="breadcrumb-item active">Edit-Tag</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Edit Post Tag</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Edit a Tag</h6>
                <form action="{{ route('admin.post.tag.update', $brand->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="tag_name_en">Tag Name</label>
                            <input type="text" class="form-control @error('tag_name_en') is-invalid @enderror" id="tag_name_en" name="tag_name_en" value="{{ $brand->tag_name_en }}">
                            @error('tag_name_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="{{ route('admin.post.tag') }}" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</a>
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
