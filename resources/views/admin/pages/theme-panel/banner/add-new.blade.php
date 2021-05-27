@extends('admin.layouts.app')

@section('title', 'Add New Banner | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
            <span class="breadcrumb-item active">Add New Banner</span>
        </nav>
        <div class="sl-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-xl-9">
                    <!-- =====================
                    Add New Experience Section
                    ==========================-->
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                        <h3 class="card-body-title" style="font-size: 20px;">Add New Banner</h3>
                        <form class="mt-4" action="{{ route('admin.theme.banner.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="banner_heading">Banner Heading</label>
                                <input class="form-control @error('banner_heading') is-invalid @enderror" id="banner_heading" name="banner_heading" value="{{ old('banner_heading') }}" placeholder="Enter Banner Heading" type="text" required>
                                @error('banner_heading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="banner_subheading">Banner Subheading</label>
                                <textarea name="banner_subheading" id="banner_subheading" class="form-control @error('banner_subheading') is-invalid @enderror" rows="4">{!! old('banner_subheading') !!}</textarea>
                                @error('banner_subheading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="button_text">Button Text</label>
                                    <input class="form-control @error('button_text') is-invalid @enderror" id="button_text" name="button_text" value="{{ old('button_text') }}" placeholder="Enter Button Text" type="text" required>
                                    @error('button_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="button_link">Button Link</label>
                                    <input class="form-control @error('button_link') is-invalid @enderror" id="button_link" name="button_link" value="{{ old('button_link') }}" placeholder="Enter Button Link" type="text" required>
                                    @error('button_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                    </div><!-- card -->
                </div><!-- col-9 -->
                <div class="col-xl-3 mg-t-25 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Background Image</h6>
                        <div class="custom-file">
                            <input class="custom-file-input form-control @error('bg_image') is-invalid @enderror" id="bg_image" onchange="document.getElementById('featured_image_show').src = window.URL.createObjectURL(this.files[0])" name="bg_image" type="file" required>
                            <span class="custom-file-control custom-file-control-inverse"></span>
                            @error('bg_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="preview_image mt-3 text-center">
                            <img id="featured_image_show" width="250px">
                        </div>

                        <div class="heading mg-t-10">
                            <h6 class="card-body-title">Where will be show this BG?</h6>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="rdiobox">
                                    <input name="is_bg_main" type="radio" value="0" checked>
                                    <span>Main BG</span>
                                </label>
                            </div><!-- col-6 -->
                            <div class="col-lg-4">
                                <label class="rdiobox">
                                    <input name="is_bg_main" type="radio" value="1">
                                    <span>Right BG</span>
                                </label>
                            </div><!-- col-6 -->
                            <div class="col-lg-4"></div>
                        </div><!-- row -->


                        <div class="row mg-t-30 text-right">
                            <div class="col-sm-12">
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-primary">Publish</button>
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
