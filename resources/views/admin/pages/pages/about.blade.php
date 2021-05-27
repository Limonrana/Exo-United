@extends('admin.layouts.app')

@section('title', 'About Panel | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="">About</a>
            <span class="breadcrumb-item active">Panel</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-xl-9">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title pb-2">About Section</h6>
                        <form action="{{ route('admin.page.about.update', $get->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-layout">
                                <div class="row mg-b-25">
                                    <div class="col-lg-12">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label" for="about_sec_title">About Title</label>
                                            <input class="form-control" type="text" id="about_sec_title" name="about_sec_title" value="{{ $get->about_sec_title }}" placeholder="Get In Touch">
                                        </div>
                                    </div><!-- col-12 -->
                                    <div class="col-lg-12">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label" for="about_sec_content">About Content</label>
                                            <textarea name="about_sec_content" id="about_sec_content" class="form-control my-editor" rows="4">{{ $get->about_sec_content }}</textarea>
                                        </div>
                                    </div><!-- col-12 -->
                                </div><!-- row -->
                            </div><!-- form-layout -->
                    </div><!-- card -->

                    <div class="card pd-20 pd-sm-40 mg-t-20">
                        <h6 class="card-body-title pb-2">About Details Content</h6>
                            <div class="form-layout">
                                <div class="row mg-b-25">
                                    <div class="col-lg-12">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label" for="about_details_content">About Details Content</label>
                                            <textarea name="about_details_content" id="about_details_content" class="form-control my-editor" rows="10">{{ $get->about_details_content }}</textarea>
                                        </div>
                                    </div><!-- col-12 -->
                                </div><!-- row -->
                            </div><!-- form-layout -->
                    </div><!-- card -->

                    <div class="card pd-20 pd-sm-40 mg-t-20">
                        <h6 class="card-body-title pb-2">Services Panel</h6>
                        <div class="form-layout">
                            <div class="row mg-b-25">
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_icon_1">Service Icon 1</label>
                                            <input class="form-control" type="text" id="service_icon_1" name="service_icon_1" value="{{ $get->service_icon_1 }}" placeholder="fa fa-icon">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_title_1">Service Title 1</label>
                                            <input class="form-control" type="text" id="service_title_1" name="service_title_1" value="{{ $get->service_title_1 }}" placeholder="Our Experience">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_link_1">Service Link 1</label>
                                            <input class="form-control" type="text" id="service_link_1" name="service_link_1" value="{{ $get->service_link_1 }}" placeholder="https://exounited.com/blog">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label" for="service_content_1">Service Content 1</label>
                                        <textarea name="service_content_1" id="service_content_1" class="form-control" rows="4" placeholder="Service description">{{ $get->service_content_1 }}</textarea>
                                    </div>
                                </div><!-- col-12 -->

                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_icon_2">Service Icon 2</label>
                                            <input class="form-control" type="text" id="service_icon_2" name="service_icon_2" value="{{ $get->service_icon_2 }}" placeholder="fa fa-icon">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_title_2">Service Title 2</label>
                                            <input class="form-control" type="text" id="service_title_2" name="service_title_2" value="{{ $get->service_title_2 }}" placeholder="Our Experience">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_link_2">Service Link 2</label>
                                            <input class="form-control" type="text" id="service_link_2" name="service_link_2" value="{{ $get->service_link_2 }}" placeholder="https://exounited.com/blog">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label" for="service_content_2">Service Content 2</label>
                                        <textarea name="service_content_2" id="service_content_2" class="form-control" rows="4" placeholder="Service description">{{ $get->service_content_2 }}</textarea>
                                    </div>
                                </div><!-- col-12 -->

                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_icon_3">Service Icon 3</label>
                                            <input class="form-control" type="text" id="service_icon_3" name="service_icon_3" value="{{ $get->service_icon_3 }}" placeholder="fa fa-icon">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_title_3">Service Title 3</label>
                                            <input class="form-control" type="text" id="service_title_3" name="service_title_3" value="{{ $get->service_title_3 }}" placeholder="Our Experience">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="service_link_3">Service Link 3</label>
                                            <input class="form-control" type="text" id="service_link_3" name="service_link_3" value="{{ $get->service_link_3 }}" placeholder="https://exounited.com/blog">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label" for="service_content_3">Service Content 3</label>
                                        <textarea name="service_content_3" id="service_content_3" class="form-control" rows="4" placeholder="Service description">{{ $get->service_content_3 }}</textarea>
                                    </div>
                                </div><!-- col-12 -->
                            </div><!-- row -->
                        </div><!-- form-layout -->
                    </div><!-- card -->

                    <div class="card pd-20 pd-sm-40 mg-t-20">
                        <h6 class="card-body-title pb-2">Testimonial Panel</h6>
                        <div class="form-layout">
                            <div class="row mg-b-25">
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="quote_charity_1">Quote Charity 1</label>
                                            <input class="form-control" type="text" id="quote_charity_1" name="quote_charity_1" value="{{ $get->quote_charity_1 }}" placeholder="Charity Name">
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="quote_title_1">Quote Title 1</label>
                                            <input class="form-control" type="text" id="quote_title_1" name="quote_title_1" value="{{ $get->quote_title_1 }}" placeholder="Person Name">
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label" for="quote_content_1">Quote Content 1</label>
                                        <textarea name="quote_content_1" id="quote_content_1" class="form-control" rows="4" placeholder="Review Content">{{ $get->quote_content_1 }}</textarea>
                                    </div>
                                </div><!-- col-12 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="quote_charity_2">Quote Charity 2</label>
                                            <input class="form-control" type="text" id="quote_charity_2" name="quote_charity_2" value="{{ $get->quote_charity_2 }}" placeholder="Charity Name">
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="quote_title_2">Quote Title 2</label>
                                            <input class="form-control" type="text" id="quote_title_2" name="quote_title_2" value="{{ $get->quote_title_2 }}" placeholder="Person Name">
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label" for="quote_content_2">Quote Content 2</label>
                                        <textarea name="quote_content_2" id="quote_content_2" class="form-control" rows="4" placeholder="Review Content">{{ $get->quote_content_2 }}</textarea>
                                    </div>
                                </div><!-- col-12 -->

                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="quote_charity_3">Quote Charity 3</label>
                                            <input class="form-control" type="text" id="quote_charity_3" name="quote_charity_3" value="{{ $get->quote_charity_3 }}" placeholder="Charity Name">
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                        <div class="form-group">
                                            <label class="form-control-label" for="quote_title_3">Quote Title 3</label>
                                            <input class="form-control" type="text" id="quote_title_3" name="quote_title_3" value="{{ $get->quote_title_3 }}" placeholder="Person Name">
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label" for="quote_content_3">Quote Content 3</label>
                                        <textarea name="quote_content_3" id="quote_content_3" class="form-control" rows="4" placeholder="Review Content">{{ $get->quote_content_3 }}</textarea>
                                    </div>
                                </div><!-- col-12 -->

                            </div><!-- row -->
                        </div><!-- form-layout -->
                    </div><!-- card -->
                </div>

                <div class="col-xl-3 mg-t-25 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">About Section Image</h6>
                        <div class="custom-file">
                            <input class="custom-file-input form-control" id="about_sec_image" onchange="document.getElementById('bg_image_show').src = window.URL.createObjectURL(this.files[0])" name="about_sec_image" type="file">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                        </div>
                        <div class="preview_image mt-3 text-center">
                            <img src="{{ asset($get->about_sec_image) }}" id="bg_image_show" width="250px">
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
            </div>
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
