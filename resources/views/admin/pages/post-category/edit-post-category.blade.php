@extends('admin.layouts.app')

@section('title', 'Edit Post Categories | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <span class="breadcrumb-item active">Edit-Post-Category</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Edit Post Category</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Edit a Category</h6>
                <form action="{{ route('admin.post.category.update', $category->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="category_name_en">Category Name</label>
                            <input type="text" class="form-control @error('category_name_en') is-invalid @enderror" id="category_name_en" name="category_name_en" value="{{ $category->category_name_en }}">
                            @error('category_name_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="{{ route('admin.post.category') }}" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</a>
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
