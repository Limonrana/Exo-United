@extends('admin.layouts.app')
@section('title', 'Add New Post | Exo-United')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
        <span class="breadcrumb-item active">Add New Post</span>
    </nav>
    <div class="sl-pagebody">
        <div class="row row-sm mg-t-20">
            <div class="col-xl-9">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h6 class="card-body-title">Add New Post</h6>
                    <form class="mt-4" action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="post_title_en">Post Title</label>
                            <input class="form-control @error('post_title_en') is-invalid @enderror" id="post_title_en" name="post_title_en" placeholder="Enter Post Title" type="text">
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="category_id">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                    <option>Choose...</option>
                                    @foreach($category as $val)
                                    <option value="{{ $val->id }}">{{ $val->category_name_en }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="tag_name">Tags</label>
                                    <select class="form-control select2" id="tag_name" name="tag_name[]" data-placeholder="Choose Tags" multiple>
                                        @foreach($tag as $val)
                                            <option value="{{ $val->tag_name_en }}">{{ $val->tag_name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="post_description_en">Post Description</label>
                            <textarea name="post_description_en" class="form-control my-editor">{!! old('post_description_en') !!}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="video_link">Video Link</label>
                            <input class="form-control" id="video_link" name="video_link" placeholder="Video ID Example: v=nflsf-0Kjf0" type="text">
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
                        <img id="featured_image_show" width="300px" style="border: 1px solid black">
                    </div>
                    <div class="form-group mt-4">
                        <label for="slug">Slug</label>
                        <input class="form-control" id="slug" name="slug" placeholder="Post Slug" type="text">
                    </div>
                    <div class="row mg-t-30 text-right">
                        <div class="col-sm-12">
                            <div class="form-layout-footer">
                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div><!-- form-layout-footer -->
                        </div><!-- col-8 -->
                    </div>
                  </form>
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection

@section('admin-css')
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('admin-js')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">

    $('#post_title_en').keyup(function () {
        $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
    });
</script>

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
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
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
<script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>
    <script>
        $(function(){

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>
@endsection
