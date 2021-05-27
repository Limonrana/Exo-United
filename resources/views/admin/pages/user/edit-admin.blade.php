@extends('admin.layouts.app')
@section('title', 'Edit Admin | Exo-United')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
            <span class="breadcrumb-item active">Edit Admin</span>
        </nav>
        <div class="sl-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-xl-9">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                        <h6 class="card-body-title">Edit Admin</h6>
                        <form class="mt-4" action="{{ route('admin.user.update', [$admin->id, $admin->roles->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $admin->name }}" type="text">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $admin->email }}" type="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">New Password (Optional)</label>
                                <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter the new password"  type="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>
                            <h6>Permission</h6>
                            <hr>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="ckbox">
                                            <input type="checkbox" name="posts" value="1" @if ($admin->roles->posts == 1) checked @else @endif><span>Posts</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="ckbox">
                                            <input type="checkbox" name="pages" value="1" @if ($admin->roles->pages == 1) checked @else @endif><span>Pages</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="ckbox">
                                            <input type="checkbox" name="winners" value="1" @if ($admin->roles->winners == 1) checked @else @endif><span>Winners</span>
                                        </label>
                                    </div><!-- col-3 -->
                                </div><!-- row -->
                                <div class="row mg-t-10">
                                    <div class="col-lg-4">
                                        <label class="ckbox">
                                            <input type="checkbox" name="coupons" value="1" @if ($admin->roles->coupons == 1) checked @else @endif><span>Coupons</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="ckbox">
                                            <input type="checkbox" name="ecommerce" value="1" @if ($admin->roles->ecommerce == 1) checked @else @endif><span>E-commerce</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="ckbox">
                                            <input type="checkbox" name="experience" value="1" @if ($admin->roles->experience == 1) checked @else @endif><span>Experience</span>
                                        </label>
                                    </div><!-- col-3 -->
                                </div><!-- row -->
                                <div class="row mg-t-10">
                                    <div class="col-lg-4">
                                        <label class="ckbox">
                                            <input type="checkbox" name="orders" value="1" @if ($admin->roles->orders == 1) checked @else @endif><span>Orders</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="ckbox">
                                            <input type="checkbox" name="entry" value="1" @if ($admin->roles->entry == 1) checked @else @endif><span>Entry</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="ckbox">
                                            <input type="checkbox" name="drawn" value="1" @if ($admin->roles->drawn == 1) checked @else @endif><span>Drawn</span>
                                        </label>
                                    </div><!-- col-3 -->
                                </div><!-- row -->
                                <div class="row mg-t-10">
                                    <div class="col-lg-4">
                                        <label class="ckbox">
                                            <input type="checkbox" name="theme_panel" value="1" @if ($admin->roles->theme_panel == 1) checked @else @endif><span>Theme Panel</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="ckbox">
                                            <input type="checkbox" name="users" value="1" @if ($admin->roles->users == 1) checked @else @endif><span>Users</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="ckbox">
                                            <input type="checkbox" name="settings" value="1" @if ($admin->roles->settings == 1) checked @else @endif><span>Settings</span>
                                        </label>
                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                    </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-xl-3 mg-t-25 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Avatar</h6>
                        <div class="custom-file">
                            <input class="custom-file-input form-control @error('avatar') is-invalid @enderror" id="avatar" onchange="document.getElementById('avatar_show').src = window.URL.createObjectURL(this.files[0])" name="avatar" type="file">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                            @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="preview_image mt-3 text-center">
                            <img src="{{ asset($profile->avatar) }}" id="avatar_show" width="300px" height="200px">
                            <input type="hidden" name="old_avatar" value="{{ $profile->avatar }}">
                        </div>
                        <div class="row mg-t-30 text-right">
                            <div class="col-sm-12">
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
