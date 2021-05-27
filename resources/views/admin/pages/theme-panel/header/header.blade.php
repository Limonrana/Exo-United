@extends('admin.layouts.app')

@section('title', 'Header Panel | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="">Theme-Panel</a>
            <span class="breadcrumb-item active">Header</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Header Panel</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Header Panel</h6>
                <p class="mg-b-20 mg-sm-b-30">Put your all data and update</p>
                <form action="{{ route('admin.theme.header.update', $get->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="phone">Phone Number</label>
                                <input class="form-control" type="text" id="phone" name="phone" value="{{ $get->phone }}" placeholder="+123 5678 890">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" value="{{ $get->email }}" placeholder="example@exounited.com">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Logo</label><br>
                                    <label class="custom-file">
                                        <input type="file" id="file2" name="logo" class="custom-file-input" onchange="document.getElementById('logo_show').src = window.URL.createObjectURL(this.files[0])" style="width: 870px;">
                                        <span class="custom-file-control custom-file-control-primary"></span>
                                        <input type="hidden" name="old_logo" value="{{ $get->logo }}">
                                    </label>
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <div class="form-group">
                                    <label class="form-control-label" for="logo_size">Logo Width</label>
                                    <input class="form-control" type="text" id="logo_size" name="logo_size" value="{{ $get->logo_size }}" placeholder="30px">
                                </div>
                            </div>
                        </div><!-- col-6 -->
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
                    <img src="{{ asset($get->logo ? $get->logo : 'uploads/no-image/no-image.png') }}" id="logo_show" alt="logo" width="200px">
                </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
