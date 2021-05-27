@extends('admin.layouts.app')

@section('title', 'Menu Panel | Exo-United')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Exo-United</a>
            <a class="breadcrumb-item" href="">Theme-Panel</a>
            <span class="breadcrumb-item active">Menu</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Menu Panel</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-10 pl-0">
                            <h6 class="card-body-title">Header Menu Panel</h6>
                            <p class="mg-b-20 mg-sm-b-30">Put your all data and update</p>
                        </div>
                        <div class="col-lg-2 text-right pr-0 mb-2">
                            <a href="{{ route('admin.theme.menu.link') }}" class="btn btn-sm btn-info">Menu Link Manage</a>
                        </div>
                    </div>
                </div>
                <form action="{{ route('admin.header.menu', $get->id) }}" method="post">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_1">Menu 1</label>
                                    <input class="form-control" type="text" id="h_menu_1" name="h_menu_1" value="{{ $get->h_menu_1 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_2">Menu 2</label>
                                    <input class="form-control" type="text" id="h_menu_2" name="h_menu_2" value="{{ $get->h_menu_2 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_3">Menu 3</label>
                                    <input class="form-control" type="text" id="h_menu_3" name="h_menu_3" value="{{ $get->h_menu_3 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_4">Menu 4</label>
                                    <input class="form-control" type="text" id="h_menu_4" name="h_menu_4" value="{{ $get->h_menu_4 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_5">Menu 5</label>
                                    <input class="form-control" type="text" id="h_menu_5" name="h_menu_5" value="{{ $get->h_menu_5 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_6">Menu 6</label>
                                    <input class="form-control" type="text" id="h_menu_6" name="h_menu_6" value="{{ $get->h_menu_6 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_7">Menu 7</label>
                                    <input class="form-control" type="text" id="h_menu_7" name="h_menu_7" value="{{ $get->h_menu_7 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_8">Menu 8</label>
                                    <input class="form-control" type="text" id="h_menu_8" name="h_menu_8" value="{{ $get->h_menu_8 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="h_menu_9">Menu 9</label>
                                    <input class="form-control" type="text" id="h_menu_9" name="h_menu_9" value="{{ $get->h_menu_9 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

            <div class="card pd-20 pd-sm-40 mt-5">
                <h6 class="card-body-title">Footer Menu Panel</h6>
                <p class="mg-b-20 mg-sm-b-30">Put your all data and update</p>
                <form action="{{ route('admin.footer.menu', $get->id) }}" method="post">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_1">Left Menu 1</label>
                                    <input class="form-control" type="text" id="f_menu_1" name="f_menu_1" value="{{ $get->f_menu_1 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_2">Left Menu 2</label>
                                    <input class="form-control" type="text" id="f_menu_2" name="f_menu_2" value="{{ $get->f_menu_2 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_3">Left Menu 3</label>
                                    <input class="form-control" type="text" id="f_menu_3" name="f_menu_3" value="{{ $get->f_menu_3 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_4">Left Menu 4</label>
                                    <input class="form-control" type="text" id="f_menu_4" name="f_menu_4" value="{{ $get->f_menu_4 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_5">Left Menu 5</label>
                                    <input class="form-control" type="text" id="f_menu_5" name="f_menu_5" value="{{ $get->f_menu_5 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_6">Right Menu 1</label>
                                    <input class="form-control" type="text" id="f_menu_6" name="f_menu_6" value="{{ $get->f_menu_6 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_7">Right Menu 2</label>
                                    <input class="form-control" type="text" id="f_menu_7" name="f_menu_7" value="{{ $get->f_menu_7 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_8">Right Menu 3</label>
                                    <input class="form-control" type="text" id="f_menu_8" name="f_menu_8" value="{{ $get->f_menu_8 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_9">Right Menu 4</label>
                                    <input class="form-control" type="text" id="f_menu_9" name="f_menu_9" value="{{ $get->f_menu_9 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="f_menu_10">Right Menu 5</label>
                                    <input class="form-control" type="text" id="f_menu_10" name="f_menu_10" value="{{ $get->f_menu_10 }}" placeholder="Menu Name">
                                </div>
                            </div><!-- col-6 -->
                        </div><!-- row -->
                        <div class="form-layout-footer text-right">
                            <button class="btn btn-info mg-r-5" type="submit">Update</button>
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
