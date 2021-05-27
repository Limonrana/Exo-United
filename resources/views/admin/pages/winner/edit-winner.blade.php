@extends('admin.layouts.app')
@section('title', 'Edit Winner | Exo-United')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
            <span class="breadcrumb-item active">Edit Winner</span>
        </nav>
        <div class="sl-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-xl-9">
                    <!-- =====================
                    Add New Experience Section
                    ==========================-->
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                        <h3 class="card-body-title" style="font-size: 20px;">Edit Winner</h3>
                        <form class="mt-4" action="{{ route('admin.winner.update', $winner->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $winner->title }}" placeholder="Enter Title (EX: Jeep Gladiator Rubicon)" type="text">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exp_title">Winner Name</label>
                                    <input class="form-control @error('winner_name') is-invalid @enderror" id="winner_name" name="winner_name" value="{{ $winner->winner_name }}" placeholder="Enter Winner Name" type="text">
                                    @error('winner_name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="winner_address">Winner City/State/Country</label>
                                <input class="form-control @error('winner_address') is-invalid @enderror" id="winner_address" name="winner_address" value="{{ $winner->winner_address }}" placeholder="Enter Winner City/State/Country" type="text">
                                @error('winner_address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exp_title">Select Experience</label>
                                    <select class="form-control @error('exp_title') is-invalid @enderror" id="exp_title" name="exp_title">
                                        <option>Choose...</option>
                                        @foreach($experience as $val)
                                            <option value="{{ $val->exp_title }}" {{ $val->exp_title == $winner->exp_title ? 'selected' : '' }}>{{ $val->exp_title }}</option>
                                        @endforeach
                                    </select>
                                    @error('exp_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exp_date">Experience Date</label>
                                    <select class="form-control @error('exp_date') is-invalid @enderror" id="exp_date" name="exp_date">
                                        <option selected>Choose...</option>
                                        @foreach($experience as $val)
                                            <option value="{{ $val->end_time }}" {{ $val->end_time == $winner->exp_date ? 'selected' : '' }}>{{ date('M d, Y', strtotime($val->end_time)) }}</option>
                                        @endforeach
                                    </select>
                                    @error('exp_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="winner_content">Winner Content</label>
                                <textarea name="winner_content" id="winner_content" class="form-control my-editor">{!! $winner->winner_content !!}</textarea>
                            </div>
                    </div><!-- card -->

                    <!-- ===================
                    Experience Info Section
                    ========================-->
                    <div class="card pd-20 pd-sm-40 mg-t-25 form-layout form-layout-4">
                        <h6 class="card-body-title">Winner Review</h6>
                        <div class="form-group">
                            <label for="winner_review_title">Winner First Name</label>
                            <input class="form-control @error('winner_review_title') is-invalid @enderror" id="winner_review_title" name="winner_review_title" value="{{ $winner->winner_review_title }}" placeholder="Enter Winner First Name" type="text">
                            @error('winner_review_title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="winner_review">Review Content</label>
                            <textarea name="winner_review" id="winner_review" class="form-control @error('winner_review') is-invalid @enderror" rows="4">{!! $winner->winner_review !!}</textarea>
                            @error('winner_review_title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><!-- card -->

                <!-- ===================
                Winner Donation Section
                ========================-->
                    <div class="card pd-20 pd-sm-40 mg-t-25 form-layout form-layout-4">
                        <h6 class="card-body-title">Where donate the Winner?</h6>
                        <div class="form-group">
                            <label for="donation_title">Donation Title</label>
                            <input class="form-control @error('donation_title') is-invalid @enderror" id="donation_title" name="donation_title" value="{{ $winner->donation_title }}" placeholder="Enter Donation Title" type="text">
                            @error('donation_title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="donation_content">Donation Content</label>
                            <textarea name="donation_content" id="donation_content" class="form-control my-editor @error('donation_content') is-invalid @enderror" rows="4">{{ $winner->donation_content }}</textarea>
                            @error('donation_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div><!-- card -->
                </div><!-- col-9 -->
                <div class="col-xl-3 mg-t-25 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Featured Image</h6>
                        <div class="custom-file">
                            <input class="custom-file-input form-control @error('featured_image') is-invalid @enderror" id="featured_image" onchange="document.getElementById('featured_image_show').src = window.URL.createObjectURL(this.files[0])" name="featured_image" type="file">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                            @error('featured_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="preview_image mt-3 text-center">
                            <img src="{{ asset($winner->featured_image) }}" id="featured_image_show" width="250px">
                        </div>
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10 mt-3">Gallery Image</h6>
                        <div class="custom-file">
                            <input class="custom-file-input form-control" id="gallery_image_1" onchange="document.getElementById('gallery_image_1_show').src = window.URL.createObjectURL(this.files[0])" name="gallery_image_1" type="file">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                        </div>
                        <div class="custom-file mt-4">
                            <input class="custom-file-input form-control" id="gallery_image_2" onchange="document.getElementById('gallery_image_2_show').src = window.URL.createObjectURL(this.files[0])" name="gallery_image_2" type="file">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                        </div>
                        <div class="form-row mt-3 text-center">
                            <div class="col-md-6">
                                <img src="{{ asset($winner->gallery_image_1 ? $winner->gallery_image_1 : 'uploads/no-image/no-image.png') }}" id="gallery_image_1_show" width="120px">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset($winner->gallery_image_2 ? $winner->gallery_image_2 : 'uploads/no-image/no-image.png') }}" id="gallery_image_2_show" width="120px">
                            </div>
                        </div>
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10 mt-3">Donation Image</h6>
                        <div class="custom-file">
                            <input class="custom-file-input form-control @error('donation_image') is-invalid @enderror" id="donation_image" onchange="document.getElementById('donation_image_show').src = window.URL.createObjectURL(this.files[0])" name="donation_image" type="file">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                            @error('donation_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="preview_image mt-3 text-center">
                            <img src="{{ asset($winner->donation_image ? $winner->donation_image : 'uploads/no-image/no-image.png') }}" id="donation_image_show" width="250px">
                        </div>
                        <div class="form-group mt-4">
                            <label for="slug">Slug</label>
                            <input class="form-control" id="slug" name="slug" value="{{ $winner->slug }}" placeholder="Product Slug" type="text">
                        </div>
                        <div class="row mg-t-30 text-right">
                            <div class="col-sm-12">
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- col-8 -->
                        </div>
                    </div><!-- card -->

                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5 mg-t-25">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">SEO Info (Optional)</h6>
                        <div class="form-group">
                            <label for="seo_title">SEO Title</label>
                            <input class="form-control" id="seo_title" name="seo_title" value="{{ $winner->seo_title }}" placeholder="Enter SEO Title" type="text">
                        </div>
                        <div class="form-group">
                            <label for="seo_slug">SEO Slug</label>
                            <input class="form-control" id="seo_slug" name="seo_slug" value="{{ $winner->seo_slug }}" placeholder="Enter SEO Slug (optional)" type="text">
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input class="form-control" data-role="tagsinput" id="meta_keywords" name="meta_keywords" value="{{ $winner->meta_keywords }}" placeholder="Enter Keywords" type="text">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" class="form-control" rows="4">{!! $winner->meta_description !!}</textarea>
                        </div>
                    </div><!-- card -->
                    </form>
                </div><!-- col-6 -->
            </div><!-- row -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection

@section('admin-css')
    <link href="{{ asset('backend/lib/tagsinput/tagsinput.css') }}" rel="stylesheet">
@endsection

@section('admin-js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'admin/laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };
        tinymce.init(editor_config);
    </script>

    <script>

        $('#exp_title').keyup(function () {
            $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });

        $('#exp_title').keyup(function () {
            $('#seo_slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });

        $('#exp_title').keyup(function () {
            $('#seo_title').val($(this).val());
        });
    </script>
@endsection
