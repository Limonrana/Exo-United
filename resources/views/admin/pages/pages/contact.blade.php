@extends('admin.layouts.app')

@section('title', 'Contact Panel | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="">Contact</a>
            <span class="breadcrumb-item active">Panel</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-xl-9">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title pb-2">Left Panel</h6>
                        <form action="{{ route('admin.page.contact.update', $get->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-layout">
                                <div class="row mg-b-25">
                                    <div class="col-lg-6">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label" for="left_title">Left Title</label>
                                            <input class="form-control" type="text" id="left_title" name="left_title" value="{{ $get->left_title }}" placeholder="Get In Touch">
                                        </div>
                                    </div><!-- col-6 -->
                                    <div class="col-lg-6">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label" for="notification_email">Notification Email</label>
                                            <input class="form-control" type="email" id="notification_email" name="notification_email" value="{{ $get->notification_email }}" placeholder="example@exounited.com">
                                        </div>
                                    </div><!-- col-6 -->
                                    <div class="col-lg-12">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label" for="left_content">Left Content</label>
                                            <textarea name="left_content" id="left_content" class="form-control" rows="4" placeholder="If you have any questions or queries our helpful support team will be more than happy to assist.">{{ $get->left_content }}</textarea>
                                        </div>
                                    </div><!-- col-12 -->
                                </div><!-- row -->
                            </div><!-- form-layout -->
                    </div><!-- card -->

                    <div class="card pd-20 pd-sm-40 mg-t-20">
                        <h6 class="card-body-title pb-2">Right Panel</h6>
                            <div class="form-layout">
                                <div class="row mg-b-25">
                                    <div class="col-lg-12">
                                        <div class="form-group mg-b-10-force">
                                            <div class="form-group">
                                                <label class="form-control-label" for="right_title">Right Title</label>
                                                <input class="form-control" type="text" id="right_title" name="right_title" value="{{ $get->right_title }}" placeholder="We Are Available">
                                            </div>
                                        </div>
                                    </div><!-- col-12 -->
                                    <div class="col-lg-12">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label" for="right_content">Right Content</label>
                                            <textarea name="right_content" id="right_content" class="form-control" rows="4" placeholder="24 Hours A Day, 365 Days A Year">{{ $get->right_content }}</textarea>
                                        </div>
                                    </div><!-- col-12 -->
                                    <div class="col-lg-12">
                                        <div class="form-group mg-b-10-force">
                                            <div class="form-group">
                                                <label class="form-control-label" for="right_details_title">Right Details Title</label>
                                                <input class="form-control" type="text" id="right_details_title" name="right_details_title" value="{{ $get->right_details_title }}" placeholder="Contact Us">
                                            </div>
                                        </div>
                                    </div><!-- col-12 -->
                                    <div class="col-lg-6">
                                        <div class="form-group mg-b-10-force">
                                            <div class="form-group">
                                                <label class="form-control-label" for="right_phone_1">Phone Number 1</label>
                                                <input class="form-control" type="tel" id="right_phone_1" name="right_phone_1" value="{{ $get->right_phone_1 }}" placeholder="012 345 6789">
                                            </div>
                                        </div>
                                    </div><!-- col-6 -->
                                    <div class="col-lg-6">
                                        <div class="form-group mg-b-10-force">
                                            <div class="form-group">
                                                <label class="form-control-label" for="right_phone_2">Phone Number 2</label>
                                                <input class="form-control" type="tel" id="right_phone_2" name="right_phone_2" value="{{ $get->right_phone_2 }}" placeholder="012 345 6789">
                                            </div>
                                        </div>
                                    </div><!-- col-6 -->
                                    <div class="col-lg-6">
                                        <div class="form-group mg-b-10-force">
                                            <div class="form-group">
                                                <label class="form-control-label" for="right_email_1">Email Address 1</label>
                                                <input class="form-control" type="email" id="right_email_1" name="right_email_1" value="{{ $get->right_email_1 }}" placeholder="example@exounited.com">
                                            </div>
                                        </div>
                                    </div><!-- col-6 -->
                                    <div class="col-lg-6">
                                        <div class="form-group mg-b-10-force">
                                            <div class="form-group">
                                                <label class="form-control-label" for="right_email_2">Email Address 2</label>
                                                <input class="form-control" type="email" id="right_email_2" name="right_email_2" value="{{ $get->right_email_2 }}" placeholder="example@exounited.com">
                                            </div>
                                        </div>
                                    </div><!-- col-6 -->
                                    <div class="col-lg-6">
                                        <div class="form-group mg-b-10-force">
                                            <div class="form-group">
                                                <label class="form-control-label" for="map_latitude">Map Latitude</label>
                                                <input class="form-control" type="text" id="map_latitude" name="map_latitude" value="{{ $get->map_latitude }}" placeholder="40.730610">
                                            </div>
                                        </div>
                                    </div><!-- col-6 -->

                                    <div class="col-lg-6">
                                        <div class="form-group mg-b-10-force">
                                            <div class="form-group">
                                                <label class="form-control-label" for="map_longitude">Map Longitude</label>
                                                <input class="form-control" type="text" id="map_longitude" name="map_longitude" value="{{ $get->map_longitude }}" placeholder="-73.935242">
                                            </div>
                                        </div>
                                    </div><!-- col-6 -->
                                </div><!-- row -->
                            </div><!-- form-layout -->
                    </div><!-- card -->
                </div>

                <div class="col-xl-3 mg-t-25 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Right Background Image</h6>
                        <div class="custom-file">
                            <input class="custom-file-input form-control" id="right_bg_image" onchange="document.getElementById('bg_image_show').src = window.URL.createObjectURL(this.files[0])" name="right_bg_image" type="file">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                        </div>
                        <div class="preview_image mt-3 text-center">
                            <img src="{{ asset($get->right_bg_image) }}" id="bg_image_show" width="250px">
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
