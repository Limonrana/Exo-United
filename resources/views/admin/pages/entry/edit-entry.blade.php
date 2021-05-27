@extends('admin.layouts.app')
@section('title', 'Edit Entry | Exo-United')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
            <span class="breadcrumb-item active">Edit Entry</span>
        </nav>
        <div class="sl-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-xl-9">
                    <!-- =====================
                    Add New Experience Section
                    ==========================-->
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                        <h3 class="card-body-title" style="font-size: 20px;">Edit Entry</h3>
                        <form class="mt-4" action="{{ route('admin.entry.update', $entry->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="entry_title">Entry Title</label>
                                    <input class="form-control @error('entry_title') is-invalid @enderror" id="entry_title" name="entry_title" placeholder="Enter Entry Title" value="{{ $entry->entry_title }}" type="text">
                                    @error('entry_title')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="entry_number">Entry Number</label>
                                    <input class="form-control @error('entry_number') is-invalid @enderror" id="entry_number" name="entry_number" placeholder="Enter Entry Number" value="{{ $entry->entry_quantity }}" type="text">
                                    @error('entry_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="experience_id">Select Experience</label>
                                    <select class="form-control @error('experience_id') is-invalid @enderror" id="experience_id" name="experience_id">
                                        <option>Choose...</option>
                                        @foreach($experience as $val)
                                            <option value="{{ $val->id }}" {{ $entry->experience_id == $val->id ? 'selected' : ' ' }}>{{ $val->exp_title }}</option>
                                        @endforeach
                                    </select>
                                    @error('experience_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="entry_price">Entry Price</label>
                                    <input class="form-control @error('entry_price') is-invalid @enderror" id="entry_price" name="entry_price" placeholder="Enter Entry Price" value="{{ $entry->entry_price }}" type="text">
                                    @error('entry_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="entry_description">Entry Content</label>
                                <textarea name="entry_description" id="entry_description" class="form-control" rows="4">{{ $entry->entry_description }}</textarea>
                            </div>
                    </div><!-- card -->
                </div><!-- col-9 -->
                <div class="col-xl-3 mg-t-25 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Featured Image</h6>
                        <div class="custom-file">
                            <input class="custom-file-input form-control @error('entry_image') is-invalid @enderror" id="entry_image" onchange="document.getElementById('featured_image_show').src = window.URL.createObjectURL(this.files[0])" name="entry_image" type="file">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                            @error('entry_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="preview_image mt-3">
                            <img src="{{ asset($entry->entry_image ? $entry->entry_image : 'uploads/no-image/no-image.png') }}" id="featured_image_show" width="250px" style="border: 1px solid black">
                        </div>
                        <div class="form-group mt-3">
                            <label for="recommend_badge">Badge Title</label>
                            <input class="form-control" id="recommend_badge" name="recommend_badge" placeholder="Enter Badge Title (EX: Most Popular)" value="{{ $entry->recommend_badge }}" type="text">
                        </div>
                        <div class="row mg-t-30 text-right">
                            <div class="col-sm-12">
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- col-8 -->
                        </div>
                    </div><!-- card -->
                    </form>
                </div><!-- col-6 -->
            </div><!-- row -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
