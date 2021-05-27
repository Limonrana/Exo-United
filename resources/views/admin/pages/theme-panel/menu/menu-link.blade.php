@extends('admin.layouts.app')

@section('title', 'Menu Panel | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="">Theme-Panel</a>
            <span class="breadcrumb-item active">Menu-Link</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Category Menu Panel</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Header Menu Link</h6>
                <p class="mg-b-20 mg-sm-b-30">Select your menu link</p>
                <form action="{{ route('admin.menu.link', $get->id) }}" method="post">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            @if ($get->h_menu_1)
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="h_menu_1_link">{{ $get->h_menu_1 }}</label>
                                        <select class="form-control" name="h_menu_1_link" id="h_menu_1_link">
                                            <option value="">NONE</option>
                                            @forelse($category as $val)
                                                <option value="{{ $val->slug }}" {{ $val->slug == $get->h_menu_1_link ? 'selected' : '' }}>{{ $val->category_name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div><!-- col-4 -->
                            @else
                            @endif
                            @if ($get->h_menu_2)
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="h_menu_2_link">{{ $get->h_menu_2 }}</label>
                                            <select class="form-control" name="h_menu_2_link" id="h_menu_2_link">
                                                <option value="">NONE</option>
                                                @forelse($category as $val)
                                                <option value="{{ $val->slug }}" {{ $val->slug == $get->h_menu_2_link ? 'selected' : '' }}>{{ $val->category_name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                @else
                            @endif
                            @if ($get->h_menu_3)
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="h_menu_3_link">{{ $get->h_menu_3 }}</label>
                                            <select class="form-control" name="h_menu_3_link" id="h_menu_3_link">
                                                <option value="">NONE</option>
                                                @forelse($category as $val)
                                                    <option value="{{ $val->slug }}" {{ $val->slug == $get->h_menu_3_link ? 'selected' : '' }}>{{ $val->category_name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                @else
                            @endif
                            @if ($get->h_menu_4)
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="h_menu_4_link">{{ $get->h_menu_4 }}</label>
                                            <select class="form-control" name="h_menu_4_link" id="h_menu_4_link">
                                                <option value="">NONE</option>
                                                @forelse($category as $val)
                                                    <option value="{{ $val->slug }}" {{ $val->slug == $get->h_menu_4_link ? 'selected' : '' }}>{{ $val->category_name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->
                                @else
                            @endif
                        </div><!-- row -->
                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="{{ route('admin.theme.menu') }}" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
