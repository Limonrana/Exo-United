@extends('admin.layouts.app')
@section('title', 'Add New Experience | Exo-United')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
        <span class="breadcrumb-item active">Add New Experience</span>
    </nav>
    <div class="sl-pagebody">
        <div class="row row-sm mg-t-20">
            <div class="col-xl-9">
                <!-- =====================
                Add New Experience Section
                ==========================-->
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h3 class="card-body-title" style="font-size: 20px;">Add New Experience</h3>
                    <form class="mt-4" action="{{ route('admin.experience.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exp_title">Experience Title</label>
                                <input class="form-control @error('exp_title') is-invalid @enderror" id="exp_title" name="exp_title" value="{{ old('exp_title') }}" placeholder="Enter Experience Title" type="text">
                                @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exp_subtitle">Experience Sub-Title</label>
                                <input class="form-control @error('exp_subtitle') is-invalid @enderror" id="exp_subtitle" name="exp_subtitle" value="{{ old('exp_subtitle') }}" placeholder="Enter Experience Subtitle" type="text">
                                @error('exp_subtitle')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="category_id">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                    <option>Choose...</option>
                                    @foreach($category as $val)
                                    <option value="{{ $val->id }}">{{ $val->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="charity_id">Charity</label>
                                <select class="form-control" id="charity_id" name="charity_id">
                                    <option selected>Choose...</option>
                                    @foreach($charity as $val)
                                    <option value="{{ $val->id }}">{{ $val->charity_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="end_time">End Date</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                        <input type="date" class="form-control @error('end_time') is-invalid @enderror" id="end_time" name="end_time" value="{{ old('end_time') }}" placeholder="MM/DD/YYYY">
                                    </div>
                                    @error('end_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exp_content">Experience Content</label>
                            <textarea name="exp_content" id="exp_content" class="form-control my-editor">{!! old('exp_content') !!}</textarea>
                        </div>
                </div><!-- card -->

                <!-- ===================
                Experience Info Section
                ========================-->
                <div class="card pd-20 pd-sm-40 mg-t-25 form-layout form-layout-4">
                    <h6 class="card-body-title">Experience Info</h6>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="info_title">Info Title</label>
                                <input class="form-control @error('info_title') is-invalid @enderror" id="info_title" name="info_title" value="{{ old('info_title') }}" placeholder="Enter Info Title" type="text">
                                @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="info_image">Info Image</label><br>
                                <div class="custom-file">
                                    <input class="custom-file-input form-control @error('info_image') is-invalid @enderror" id="info_image" name="info_image" value="{{ old('info_image') }}" type="file" style="width: 500px;">
                                    <span class="custom-file-control custom-file-control-inverse"></span>
                                    @error('info_image')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="info_content">Info Content</label>
                            <textarea name="info_content" id="info_content" class="form-control my-editor">{!! old('info_content') !!}</textarea>
                        </div>
                </div><!-- card -->

                <!-- =====================
                Experience Benefit Section
                ==========================-->
                <div class="card pd-20 pd-sm-40 mg-t-25 form-layout form-layout-4">
                    <h6 class="card-body-title">Experience Benefit Section</h6>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="benefit_title">Benefit Title</label>
                            <input class="form-control @error('benefit_title') is-invalid @enderror" id="benefit_title" name="benefit_title" value="{{ old('benefit_title') }}" placeholder="Enter Benefit Title" type="text">
                            @error('benefit_title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="benefit_image">Benefit Image</label><br>
                            <div class="custom-file">
                                <input class="custom-file-input form-control @error('benefit_image') is-invalid @enderror" id="benefit_image" name="benefit_image" value="{{ old('benefit_image') }}" type="file" style="width: 500px;">
                                <span class="custom-file-control custom-file-control-inverse"></span>
                                @error('benefit_image')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="benefit_content">Benefit Content</label>
                        <textarea name="benefit_content" id="benefit_content" class="form-control my-editor">{!! old('benefit_content') !!}</textarea>
                    </div>
                </div><!-- card -->

                <!-- ===================
                Experience Legal Section
                ========================-->
                <div class="card pd-20 pd-sm-40 mg-t-25 form-layout form-layout-4">
                    <h6 class="card-body-title">Experience Legal Section</h6>
                    <div class="form-group">
                        <label for="legal_title">Legal Title</label>
                        <input class="form-control @error('legal_title') is-invalid @enderror" id="legal_title" name="legal_title" value="{{ old('legal_title') }}" placeholder="Enter Legal Title" type="text">
                        @error('exp-legal')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="legal_content">Legal Content</label>
                        <textarea name="legal_content" id="legal_content" class="form-control my-editor">{!! old('legal_content') !!}</textarea>
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
                    <div class="preview_image mt-3">
                        <img id="featured_image_show" width="250px" style="border: 1px solid black">
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
                    <div class="form-row mt-3">
                        <div class="col-md-6">
                            <img id="gallery_image_1_show" width="120px" style="border: 1px solid black">
                        </div>
                        <div class="col-md-6">
                            <img id="gallery_image_2_show" width="120px" style="border: 1px solid black">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="slug">Slug</label>
                        <input class="form-control" id="slug" name="slug" placeholder="Product Slug" type="text">
                    </div>
                    <div class="row mg-t-30 text-right">
                        <div class="col-sm-12">
                            <div class="form-layout-footer">
                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div><!-- form-layout-footer -->
                        </div><!-- col-8 -->
                    </div>
                </div><!-- card -->

                <div class="card pd-20 pd-sm-40 form-layout form-layout-5 mg-t-25">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">SEO Info (Optional)</h6>
                        <div class="form-group">
                            <label for="seo_title">SEO Title</label>
                            <input class="form-control" id="seo_title" name="seo_title" placeholder="Enter SEO Title" type="text">
                        </div>
                        <div class="form-group">
                            <label for="seo_slug">SEO Slug</label>
                            <input class="form-control" id="seo_slug" name="seo_slug" placeholder="Enter SEO Slug (optional)" type="text">
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input class="form-control" data-role="tagsinput" id="meta_keywords" name="meta_keywords" placeholder="Enter Keywords" type="text">
                        </div>
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="form-control" rows="4"></textarea>
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
