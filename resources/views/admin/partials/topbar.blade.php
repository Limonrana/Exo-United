@php
    $role = \App\Models\Admin\Admin::where('id', \Illuminate\Support\Facades\Auth::user()->id)->first();
    $user = \App\Models\Admin\Profile::where('admin_id', \Illuminate\Support\Facades\Auth::id())->first();
@endphp
@if ($role)
<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="site-url bg-"><a href="{{ route('site_url') }}" target="_blank"><i class="icon ion-home"></i> {{ __('Visit Site') }}</a></div>
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">{{ Auth::user()->name }}</span>
                    <img src="{{ asset($user->avatar) }}" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="{{ route('admin.profile.edit') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li><a href="{{ route('admin.change.password') }}"><i class="icon ion-ios-gear-outline"></i> Change Password</a></li>
                        <li><a href="{{ route('admin.logout') }}" ><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        @php
            $week_date = \Illuminate\Support\Carbon::today()->subDays(3);
            $order = \App\Models\Admin\Order::where('status', 1)->where('created_at', '>=', $week_date)->where('refund', 0)->where('free_user_id', null)->get();
            $subscriber = \App\Models\Admin\Newsletter::where('created_at', '>=', $week_date)->get();
        @endphp
        <div class="navicon-right">
            <a id="btnRightMenu" href="" class="pos-relative">
                <i class="icon ion-ios-bell-outline"></i>
                <!-- start: if statement -->
                @if (count($order) >= 1 OR count($subscriber) >= 1)
                    <span class="square-8 bg-danger"></span>
                @else
                @endif
                <!-- end: if statement -->
            </a>
        </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="sl-sideright">
    <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Order ({{ count($order) }})</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">New Subscriber ({{ count($subscriber) }})</a>
        </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
            <div class="media-list">
                <!-- loop starts here -->
                @forelse($order as $val)
                <a href="{{ route('admin.edit.orders', $val->id) }}" class="media-list-link">
                    <div class="media">
                        <img src="{{ asset($val->user->avatar) }}" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="mg-b-0 tx-medium tx-gray-800 tx-13">{{ $val->user->name }}</p>
                            <span class="d-block tx-11 tx-gray-500">{{ $val->created_at ? $val->created_at->diffForHumans() : "N/A" }}</span>
                            <p class="tx-13 mg-t-10 mg-b-0">
                                Order No : {{ $val->ran_order_id }}<br>
                                Order Amount : {{ $val->order_amount }}
                            </p>
                        </div>
                    </div><!-- media -->
                </a>
            @empty
                <div class="media pd-x-20 pd-y-15">
                   New Order is empty
                </div>
            @endforelse
                <!-- loop ends here -->
            </div><!-- media-list -->
            <div class="pd-15">
                <a href="{{ route('admin.all.orders') }}" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View All Order</a>
            </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
            <div class="media-list">
                @forelse($subscriber as $val)
                <!-- loop starts here -->
                <a class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="{{ asset('/uploads/no-image/no-user.png') }}" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">{{ $val->email }}</strong> subscribe here for get new update.</p>
                            <span class="tx-12">{{ $val->created_at ? $val->created_at->diffForHumans() : "N/A" }}</span>
                        </div>
                    </div><!-- media -->
                </a>
                <!-- loop ends here -->
                @empty
                    <div class="media pd-x-20 pd-y-15">
                        New Subscriber is empty
                    </div>
                @endforelse
            </div><!-- media-list -->
        </div><!-- #notifications -->

    </div><!-- tab-content -->
</div><!-- sl-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->
@else
@endif
