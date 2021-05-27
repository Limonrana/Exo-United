@extends('admin.layouts.app')
@section('title', 'Your Profile | Exo-United')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Exo-United</a>
        <span class="breadcrumb-item active">Profile</span>
    </nav>
    <div class="sl-pagebody">
        <div class="row row-sm mg-t-20">
            <div class="col-xl-9">
                <!-- =====================
                Add New Experience Section
                ==========================-->
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h3 class="card-body-title" style="font-size: 20px;">Your Profile</h3>
                    <form class="mt-4" action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="entry_title">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ Auth::user()->name }}" placeholder="Enter Your Name" type="text">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="entry_number">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Enter Email Address" type="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="entry_price">Phone</label>
                                <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $user->phone }}" placeholder="Enter Phone Number" type="tel">
                                @error('entry_price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="entry_number">Address 1</label>
                                <input class="form-control @error('address_1') is-invalid @enderror" id="address_1" name="address_1" value="{{ $user->address_1 }}" placeholder="Enter Address line 1" type="text">
                                @error('address_1')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="entry_price">Address 2</label>
                                <input class="form-control @error('address_2') is-invalid @enderror" id="address_2" name="address_2" value="{{ $user->address_2 }}" placeholder="Enter Address 2" type="text">
                                @error('address_2')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="entry_number">City</label>
                                <input class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ $user->city }}" placeholder="Enter City Name" type="text">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="entry_price">Zip/Postal Code</label>
                                <input class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" value="{{ $user->zip }}" placeholder="Enter Zip Code" type="text">
                                @error('zip')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="entry_number">State</label>
                                <input class="form-control @error('state') is-invalid @enderror" id="state" name="state" value="{{ $user->state }}" placeholder="Enter State Name" type="text">
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="entry_price">Country</label>
                                <input class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ $user->country }}" placeholder="Enter Country Name" type="text">
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div><!-- card -->
            </div><!-- col-9 -->
            <div class="col-xl-3 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Avatar</h6>
                    <div class="custom-file">
                        <input class="custom-file-input form-control @error('avatar') is-invalid @enderror" id="avatar" onchange="document.getElementById('featured_image_show').src = window.URL.createObjectURL(this.files[0])" name="avatar" type="file">
                        <span class="custom-file-control custom-file-control-inverse"></span>
                        @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="preview_image mt-3 text-center">
                        <img src="{{ asset($user->avatar) }}" id="featured_image_show" width="250px">
                        <input type="hidden" name="old_avatar" value="{{ $user->avatar }}">
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
        </div><!-- row -->
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@endsection
