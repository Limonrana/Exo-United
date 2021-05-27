@extends('admin.layouts.app')

@section('title', 'Privacy Policy - Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="">Privacy Policy</a>
            <span class="breadcrumb-item active">Panel</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Privacy Policy Panel</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title pb-2">Content Panel</h6>
                <form action="{{ route('admin.page.privacy.update', $get->id) }}" method="post">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label for="page_title">Page Title</label><br>
                                    <input class="form-control @error('page_title') is-invalid @enderror" id="page_title" name="page_title" value="{{ $get->page_title }}" placeholder="Enter Page Title" type="text">
                                    @error('page_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="page_content">Page Content</label>
                                    <textarea name="page_content" id="page_content" class="form-control my-editor @error('page_content') is-invalid @enderror" rows="20">{!! $get->page_content !!}</textarea>
                                    @error('page_content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!-- col-12 -->
                        </div><!-- row -->

                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
 @section('admin-js')
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
 @endsection
