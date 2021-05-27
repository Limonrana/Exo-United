@extends('admin.layouts.app')

@section('title', 'Home Options - Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="">Homepage</a>
            <span class="breadcrumb-item active">Panel</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Homepage Panel</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title pb-2">Offer Panel</h6>
                <form action="{{ route('admin.page.offer.update', $get_1->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Title</label>
                                        <input class="form-control" type="text" name="offer_title" value="{{ $get_1->offer_title }}" placeholder="Our Offers From">
                                    </div>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Content</label>
                                        <textarea class="form-control" name="offer_content" id="offer_content" rows="4">{{ $get_1->offer_content }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Heading 1</label>
                                        <input class="form-control" type="text" name="offer_heading_1" id="offer_heading_1"value="{{ $get_1->offer_heading_1 }}" placeholder="COVID-19 Relief">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Heading 2</label>
                                        <input class="form-control" type="text" name="offer_heading_2" id="offer_heading_2"value="{{ $get_1->offer_heading_2 }}" placeholder="COVID-19 Relief">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Heading 3</label>
                                        <input class="form-control" type="text" name="offer_heading_3" id="offer_heading_3"value="{{ $get_1->offer_heading_3 }}" placeholder="COVID-19 Relief">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Subheading 1</label>
                                        <input class="form-control" type="text" name="offer_subheading_1" id="offer_subheading_1"value="{{ $get_1->offer_subheading_1 }}" placeholder="Enter offer Subheading">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Subheading 2</label>
                                        <input class="form-control" type="text" name="offer_subheading_2" id="offer_subheading_2"value="{{ $get_1->offer_subheading_2 }}" placeholder="Enter offer Subheading">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Subheading 3</label>
                                        <input class="form-control" type="text" name="offer_subheading_3" id="offer_subheading_3"value="{{ $get_1->offer_subheading_3 }}" placeholder="Enter offer Subheading">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Button Text 1</label>
                                        <input class="form-control" type="text" name="offer_button_text_1" id="offer_button_text_1"value="{{ $get_1->offer_button_text_1 }}" placeholder="View More">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Button Text 2</label>
                                        <input class="form-control" type="text" name="offer_button_text_2" id="offer_button_text_2"value="{{ $get_1->offer_button_text_2 }}" placeholder="View More">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Button Text 3</label>
                                        <input class="form-control" type="text" name="offer_button_text_3" id="offer_button_text_3"value="{{ $get_1->offer_button_text_3 }}" placeholder="View More">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Button Link 1</label>
                                        <input class="form-control" type="text" name="offer_button_link_1" id="offer_button_link_1"value="{{ $get_1->offer_button_link_1 }}" placeholder="https://exounited.com/car">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Button Link 2</label>
                                        <input class="form-control" type="text" name="offer_button_link_2" id="offer_button_link_2"value="{{ $get_1->offer_button_link_2 }}" placeholder="https://exounited.com/car">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Button Link 3</label>
                                        <input class="form-control" type="text" name="offer_button_link_3" id="offer_button_link_3"value="{{ $get_1->offer_button_link_3 }}" placeholder="https://exounited.com/car">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Image 1</label><br>
                                        <div class="custom-file">
                                            <input class="custom-file-input form-control" id="offer_image_1" onchange="document.getElementById('bg_image_show').src = window.URL.createObjectURL(this.files[0])" name="offer_image_1" type="file" style="width: 570px">
                                            <span class="custom-file-control custom-file-control-inverse"></span>
                                        </div>
                                        <div class="preview_image mt-3">
                                            <img src="{{ asset($get_1->offer_image_1) }}" id="bg_image_show" width="150px">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Image 2</label><br>
                                        <div class="custom-file">
                                            <input class="custom-file-input form-control" id="offer_image_2" onchange="document.getElementById('bg_image_show1').src = window.URL.createObjectURL(this.files[0])" name="offer_image_2" type="file" style="width: 570px">
                                            <span class="custom-file-control custom-file-control-inverse"></span>
                                        </div>
                                        <div class="preview_image mt-3">
                                            <img src="{{ asset($get_1->offer_image_2) }}" id="bg_image_show1" width="150px">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Offer Image 3</label><br>
                                        <div class="custom-file">
                                            <input class="custom-file-input form-control" id="offer_image_3" onchange="document.getElementById('bg_image_show2').src = window.URL.createObjectURL(this.files[0])" name="offer_image_3" type="file" style="width: 570px">
                                            <span class="custom-file-control custom-file-control-inverse"></span>
                                        </div>
                                        <div class="preview_image mt-3">
                                            <img src="{{ asset($get_1->offer_image_3) }}" id="bg_image_show2" width="150px">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

            <!-- ===========================
            All Experience Panel
            ==============================-->

            <div class="card pd-20 pd-sm-40 mg-t-20">
                <h6 class="card-body-title pb-2">All Experience Panel</h6>

                <form action="{{ route('admin.page.exp.update', $get_1->id) }}" method="POST">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Featured Experience Title</label>
                                        <input class="form-control" type="text" name="featured_exp_title" value="{{ $get_1->featured_exp_title }}" placeholder="Featured Experience">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Exo Experience Title</label>
                                        <input class="form-control" type="text" name="exo_exp_title" value="{{ $get_1->exo_exp_title }}" placeholder="Trending With Exo United">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Last Chance Experience Title</label>
                                        <input class="form-control" type="text" name="last_exp_title" value="{{ $get_1->last_exp_title }}" placeholder="For Last Time">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Featured Experience Subtitle</label>
                                        <textarea class="form-control" name="featured_exp_subtitle" id="featured_exp_subtitle" rows="3">{{ $get_1->featured_exp_subtitle }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Exo Experience Subtitle</label>
                                        <textarea class="form-control" name="exo_exp_subtitle" id="exo_exp_subtitle" rows="3">{{ $get_1->exo_exp_subtitle }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Last Chance Experience Subtitle</label>
                                        <textarea class="form-control" name="last_exp_subtitle" id="last_exp_subtitle" rows="3">{{ $get_1->last_exp_subtitle }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Featured Experience Display</label>
                                        <input class="form-control" type="text" name="featured_exp_display" value="{{ $get_1->featured_exp_display }}" placeholder="How many do you want to show? (Example: 10)">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Exo Experience Display</label>
                                        <input class="form-control" type="text" name="exo_exp_display" value="{{ $get_1->exo_exp_display }}" placeholder="How many do you want to show? (Example: 10)">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Last Chance Experience Display</label>
                                        <input class="form-control" type="text" name="last_exp_display" value="{{ $get_1->last_exp_display }}" placeholder="How many do you want to show? (Example: 10)">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

            <!-- ===========================
            Why Us Panel
            ==============================-->

            <div class="card pd-20 pd-sm-40 mg-t-20">
                <h6 class="card-body-title pb-2">Why with us Panel</h6>

                <form action="{{ route('admin.page.whyus.update', $get_2->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us section title</label>
                                        <input class="form-control" type="text" name="choose_us_title" value="{{ $get_2->choose_us_title }}" placeholder="Why You Will Donate?">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-5">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us section BG Image</label><br>
                                        <div class="custom-file">
                                            <input class="custom-file-input form-control" id="choose_us_bg" onchange="document.getElementById('choose_us_bg_show').src = window.URL.createObjectURL(this.files[0])" name="choose_us_bg" type="file" style="width: 870px">
                                            <span class="custom-file-control custom-file-control-inverse"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-5 -->
                            <div class="col-lg-1">
                                <div class="preview_image mt-3">
                                    <img src="{{ asset($get_2->choose_us_bg) }}" id="choose_us_bg_show" width="100px">
                                </div>
                            </div><!-- col-1 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us section subtitle</label>
                                        <textarea class="form-control" name="choose_us_subtitle" id="choose_us_subtitle" rows="3">{{ $get_2->choose_us_subtitle }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us title 1</label>
                                        <input class="form-control" type="text" name="choose_title_1" value="{{ $get_2->choose_title_1 }}" placeholder="Safe and Secure Playing">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us title 2</label>
                                        <input class="form-control" type="text" name="choose_title_2" value="{{ $get_2->choose_title_2 }}" placeholder="Safe and Secure Playing">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us title 3</label>
                                        <input class="form-control" type="text" name="choose_title_3" value="{{ $get_2->choose_title_3 }}" placeholder="Safe and Secure Playing">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us icon 1</label>
                                        <input class="form-control" type="text" name="choose_icon_1" value="{{ $get_2->choose_icon_1 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us icon 2</label>
                                        <input class="form-control" type="text" name="choose_icon_2" value="{{ $get_2->choose_icon_2 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us icon 3</label>
                                        <input class="form-control" type="text" name="choose_icon_3" value="{{ $get_2->choose_icon_3 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us content 1</label>
                                        <textarea class="form-control" name="choose_content_1" id="choose_content_1" rows="3">{{ $get_2->choose_content_1 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us content 2</label>
                                        <textarea class="form-control" name="choose_content_2" id="choose_content_2" rows="3">{{ $get_2->choose_content_2 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us content 3</label>
                                        <textarea class="form-control" name="choose_content_3" id="choose_content_3" rows="3">{{ $get_2->choose_content_3 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us title 4</label>
                                        <input class="form-control" type="text" name="choose_title_4" value="{{ $get_2->choose_title_4 }}" placeholder="Safe and Secure Playing">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us title 5</label>
                                        <input class="form-control" type="text" name="choose_title_5" value="{{ $get_2->choose_title_5 }}" placeholder="Safe and Secure Playing">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us title 6</label>
                                        <input class="form-control" type="text" name="choose_title_6" value="{{ $get_2->choose_title_6 }}" placeholder="Safe and Secure Playing">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us icon 4</label>
                                        <input class="form-control" type="text" name="choose_icon_4" value="{{ $get_2->choose_icon_4 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us icon 5</label>
                                        <input class="form-control" type="text" name="choose_icon_5" value="{{ $get_2->choose_icon_5 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us icon 6</label>
                                        <input class="form-control" type="text" name="choose_icon_6" value="{{ $get_2->choose_icon_6 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us content 4</label>
                                        <textarea class="form-control" name="choose_content_4" id="choose_content_4" rows="3">{{ $get_2->choose_content_4 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us content 5</label>
                                        <textarea class="form-control" name="choose_content_5" id="choose_content_5" rows="3">{{ $get_2->choose_content_5 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Why us content 6</label>
                                        <textarea class="form-control" name="choose_content_6" id="choose_content_3" rows="3">{{ $get_2->choose_content_6 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->


            <!-- ===========================
            How It Works
            ==============================-->

            <div class="card pd-20 pd-sm-40 mg-t-20">
                <h6 class="card-body-title pb-2">How It Works Panel</h6>

                <form action="{{ route('admin.page.work.update', $get_2->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work section title</label>
                                        <input class="form-control" type="text" name="work_step_title" value="{{ $get_2->work_step_title }}" placeholder="How It Works?">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-5">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work section BG Image</label><br>
                                        <div class="custom-file">
                                            <input class="custom-file-input form-control" id="work_step_bg" onchange="document.getElementById('work_bg_show').src = window.URL.createObjectURL(this.files[0])" name="work_step_bg" type="file" style="width: 870px">
                                            <span class="custom-file-control custom-file-control-inverse"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-5 -->
                            <div class="col-lg-1">
                                <div class="preview_image mt-3">
                                    <img src="{{ asset($get_2->work_step_bg) }}" id="work_bg_show" width="100px">
                                    <input type="hidden" name="old_work_step_bg" value="{{ $get_2->work_step_bg }}">
                                </div>
                            </div><!-- col-1 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Works Section subtitle</label>
                                        <input type="text" class="form-control" name="work_step_subtitle" value="{{ $get_2->work_step_subtitle }}" placeholder="Exo United is the best way to win these exciting...">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Works Section Video Link</label>
                                        <input type="text" class="form-control" name="work_step_video_link" value="{{ $get_2->work_step_video_link }}" placeholder="Get Your Id From Video URL, Put only after V= Content. (EXAMPLE: P8PWN1OmZOA)">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Title 1</label>
                                        <input class="form-control" type="text" name="work_step_heading_1" value="{{ $get_2->work_step_heading_1 }}" placeholder="Choose your experience">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Title 2</label>
                                        <input class="form-control" type="text" name="work_step_heading_2" value="{{ $get_2->work_step_heading_2 }}" placeholder="Buy Your Entry">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Title 3</label>
                                        <input class="form-control" type="text" name="work_step_heading_3" value="{{ $get_2->work_step_heading_3 }}" placeholder="Win your dream">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Icon 1</label>
                                        <input class="form-control" type="text" name="work_step_icon_1" value="{{ $get_2->work_step_icon_1 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Icon 2</label>
                                        <input class="form-control" type="text" name="work_step_icon_2" value="{{ $get_2->work_step_icon_2 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Icon 3</label>
                                        <input class="form-control" type="text" name="work_step_icon_3" value="{{ $get_2->work_step_icon_3 }}" placeholder="fa fa-icon">
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Content 1</label>
                                        <textarea class="form-control" name="work_step_subheading_1" id="work_step_subheading_1" rows="3">{{ $get_2->work_step_subheading_1 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Content 2</label>
                                        <textarea class="form-control" name="work_step_subheading_2" id="work_step_subheading_2" rows="3">{{ $get_2->work_step_subheading_2 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Work Step Content 3</label>
                                        <textarea class="form-control" name="work_step_subheading_3" id="work_step_subheading_3" rows="3">{{ $get_2->work_step_subheading_3 }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

            <!-- ===========================
            Latest Winner & Our Users
            ==============================-->

            <div class="card pd-20 pd-sm-40 mg-t-20">
                <h6 class="card-body-title pb-2">Latest Winner Panel</h6>

                <form action="{{ route('admin.page.winner.update', $get_2->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Winner Section Title</label>
                                        <input class="form-control" type="text" name="winner_sec_title" value="{{ $get_2->winner_sec_title }}" placeholder="Our Latest Winner">
                                    </div>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Winner Section Subtitle</label>
                                        <textarea name="winner_sec_subtitle" class="form-control" rows="3" placeholder="Check your exo united results online, find all the exo united winning numbers and...">{{ $get_2->winner_sec_subtitle }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Winner Section BTN Text</label>
                                        <input type="text" class="form-control" name="winner_sec_btn_text" value="{{ $get_2->winner_sec_btn_text }}" placeholder="Meet Our More Winner">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Winner Display</label>
                                        <input class="form-control" type="text" name="winner_display" value="{{ $get_2->winner_display }}" placeholder="How many winner want to display? (Exp: 2)">
                                    </div>
                                </div>
                            </div><br><!-- col-6 -->
                            <div class="col-lg-12">
                                <h6 class="card-body-title pb-2 pt-3">Our Users Panel</h6>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">User Section Title</label>
                                        <input class="form-control" type="text" name="user_sec_title" value="{{ $get_2->user_sec_title }}" placeholder="Our Users Around The World">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">User Section BTN Text</label>
                                        <input class="form-control" type="text" name="user_sec_btn_text" value="{{ $get_2->user_sec_btn_text }}" placeholder="Join With Us">
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Users Section Subtitle</label>
                                        <textarea name="user_sec_subtitle" class="form-control" rows="3" placeholder="Over the years we have provided millions of winners with...">{{ $get_2->user_sec_subtitle }}</textarea>
                                    </div>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Countdown Title 1</label>
                                        <input type="text" class="form-control" name="countdown_title_1" value="{{ $get_2->countdown_title_1 }}" placeholder="Donation users">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Countdown Title 2</label>
                                        <input type="text" class="form-control" name="countdown_title_2" value="{{ $get_2->countdown_title_2 }}" placeholder="Total in placed donation">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Countdown Title 3</label>
                                        <input type="text" class="form-control" name="countdown_title_3" value="{{ $get_2->countdown_title_3 }}" placeholder="Help in project">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Countdown Title 4</label>
                                        <input type="text" class="form-control" name="countdown_title_4" value="{{ $get_2->countdown_title_4 }}" placeholder="Biggest ever Project">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Countdown Value 1</label>
                                        <input type="text" class="form-control" name="countdown_value_1" value="{{ $get_2->countdown_value_1 }}" placeholder="30 k">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Countdown Value 2</label>
                                        <input type="text" class="form-control" name="countdown_value_2" value="{{ $get_2->countdown_value_2 }}" placeholder="$ 5.9 M">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Countdown Value 3</label>
                                        <input type="text" class="form-control" name="countdown_value_3" value="{{ $get_2->countdown_value_3 }}" placeholder="40 P">
                                    </div>
                                </div>
                            </div><!-- col-3 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <div class="form-group">
                                        <label class="form-control-label">Countdown Value 4</label>
                                        <input type="text" class="form-control" name="countdown_value_4" value="{{ $get_2->countdown_value_4 }}" placeholder="$ 2 M">
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
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
