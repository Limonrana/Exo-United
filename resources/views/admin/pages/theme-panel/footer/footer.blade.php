@extends('admin.layouts.app')

@section('title', 'Footer Panel | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="">Theme-Panel</a>
            <span class="breadcrumb-item active">Footer</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Footer Panel</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Footer Panel</h6>
                <p class="mg-b-20 mg-sm-b-30">Put your all data and update</p>

                <form action="{{ route('admin.theme.footer.update', $get->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Footer Logo</label><br>
                                    <label class="custom-file">
                                        <input type="file" id="file2" name="footer_logo" class="custom-file-input" onchange="document.getElementById('logo_show').src = window.URL.createObjectURL(this.files[0])" style="width: 870px;">
                                        <span class="custom-file-control custom-file-control-primary"></span>
                                        <input type="hidden" name="old_footer_logo" value="{{ $get->footer_logo }}">
                                    </label>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="footer_logo_size">Logo Width</label>
                                    <input class="form-control" type="text" id="footer_logo_size" name="footer_logo_size" value="{{ $get->footer_logo_size }}" placeholder="120px">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="footer_right_text_1">Footer Right Text 1</label>
                                    <input class="form-control" type="text" id="footer_right_text_1" name="footer_right_text_1" value="{{ $get->footer_right_text_1 }}" placeholder="TOTAL MEMBERS">
                                </div>
                            </div><!-- col-6 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="footer_right_text_2">Footer Right Text 2</label>
                                    <input class="form-control" type="text" id="footer_right_text_2" name="footer_right_text_2" value="{{ $get->footer_right_text_2 }}" placeholder="TOTAL WINNERS">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="footer_right_number_1">Footer Right Number 1</label>
                                    <input class="form-control" type="text" id="footer_right_number_1" name="footer_right_number_1" value="{{ $get->footer_right_number_1 }}" placeholder="12057">
                                </div>
                            </div><!-- col-6 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="footer_right_number_2">Footer Right Number 2</label>
                                    <input class="form-control" type="text" id="footer_right_number_2" name="footer_right_number_2" value="{{ $get->footer_right_number_2 }}" placeholder="129">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="newsletter_heading">Newsletter Heading</label>
                                        <input class="form-control" type="text" id="newsletter_heading" name="newsletter_heading" value="{{ $get->newsletter_heading }}" placeholder="SUBSCRIBE NEWSLETTER">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="newsletter_subheading">Newsletter Sub-Heading</label>
                                        <input class="form-control" type="text" id="newsletter_subheading" name="newsletter_subheading" value="{{ $get->newsletter_subheading }}" placeholder="Get all the latest informati...">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="copyright_text">Copyright Area</label>
                                        <textarea name="copyright_text" id="copyright_text" class="form-control" rows="4" placeholder="© 2020 Exo United - All Rights Reserved.">{!! $get->copyright_text !!}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-lg-12 mt-3 mb-2">
                                <h6 class="card-body-title">Footer Social Area</h6>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="social_icon_1">Social Icon 1</label>
                                        <input class="form-control" type="text" id="social_icon_1" name="social_icon_1" value="{{ $get->social_icon_1 }}" placeholder="fa fa-facebook">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="social_icon_2">Social Icon 2</label>
                                        <input class="form-control" type="text" id="social_icon_2" name="social_icon_2" value="{{ $get->social_icon_2 }}" placeholder="fa fa-twitter">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="social_icon_3">Social Icon 3</label>
                                        <input class="form-control" type="text" id="social_icon_3" name="social_icon_3" value="{{ $get->social_icon_3 }}" placeholder="fa fa-google-plus">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="social_icon_4">Social Icon 4</label>
                                        <input class="form-control" type="text" id="social_icon_4" name="social_icon_4" value="{{ $get->social_icon_4 }}" placeholder="fa fa-instagram">
                                    </div>
                                </div>
                            </div><!-- col-3 -->

                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="social_icon_link_1">Social Link 1</label>
                                        <input class="form-control" type="text" id="social_icon_link_1" name="social_icon_link_1" value="{{ $get->social_icon_link_1 }}" placeholder="https://facebook.com/exo_united">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="social_icon_link_2">Social Link 2</label>
                                        <input class="form-control" type="text" id="social_icon_link_2" name="social_icon_link_2" value="{{ $get->social_icon_link_2 }}" placeholder="https://twitter.com/exo_united">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="social_icon_link_3">Social Icon 3</label>
                                        <input class="form-control" type="text" id="social_icon_link_3" name="social_icon_link_3" value="{{ $get->social_icon_link_3 }}" placeholder="https://google.com/exo_united">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label" for="social_icon_link_4">Social Link 4</label>
                                        <input class="form-control" type="text" id="social_icon_link_4" name="social_icon_link_4" value="{{ $get->social_icon_link_4 }}" placeholder="https://instagram.com/exo_united">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                        </div><!-- row -->

                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

            <div class="card pd-20 pd-sm-40 mt-3">
                <h6 class="card-body-title">Logo Preview</h6>
                <div class="form-group mg-b-10-force">
                    <img src="{{ asset($get->footer_logo ? $get->footer_logo : 'uploads/no-image/no-image.png') }}" id="logo_show" alt="logo" width="200px">
                </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection

@section('admin-css')
    <link href="{{ asset('backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('admin-js')
    <script src="{{ asset('backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>
    <script>
        $(function(){
            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });
        })
    </script>
@endsection
