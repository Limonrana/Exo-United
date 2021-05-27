@php
    $role = \App\Models\Admin\Admin::where('id', \Illuminate\Support\Facades\Auth::user()->id)->first();
@endphp
@if ($role)
<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href=""><i class="icon ion-aperture"></i> Exo-United</a></div>
<div class="sl-sideleft">
    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
        <a href="{{ route('admin.dashboard') }}" class="sl-menu-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-home tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        @if ($role->roles->posts == 1)
        <a href="#" class="sl-menu-link {{ Request::is('admin/blog*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-clipboard tx-18"></i>
                <span class="menu-item-label">Posts</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.post') }}" class="nav-link {{ Request::is('admin/blog') ? 'active' : '' }}">All Posts</a></li>
            <li class="nav-item"><a href="{{ route('admin.post.add.new') }}" class="nav-link {{ Request::is('admin/blog/add-new') ? 'active' : '' }}">Add New Post</a></li>
            <li class="nav-item"><a href="{{ route('admin.post.category') }}" class="nav-link {{ Request::is('admin/blog/category') ? 'active' : '' }}">Category</a></li>
            <li class="nav-item"><a href="{{ route('admin.post.tag') }}" class="nav-link {{ Request::is('admin/blog/tags') ? 'active' : '' }}">Tags</a></li>
        </ul>
        @else
        @endif

        @if ($role->roles->pages == 1)
        <a href="#" class="sl-menu-link {{ Request::is('admin/pages*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-clone tx-18"></i>
                <span class="menu-item-label">Pages</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.page.home') }}" class="nav-link {{ Request::is('admin/pages/panel/home') ? 'active' : '' }}">Home</a></li>
            <li class="nav-item"><a href="{{ route('admin.page.about') }}" class="nav-link {{ Request::is('admin/pages/panel/about') ? 'active' : '' }}">About</a></li>
            <li class="nav-item"><a href="{{ route('admin.page.contact') }}" class="nav-link {{ Request::is('admin/pages/panel/contact') ? 'active' : '' }}">Contact</a></li>
            <li class="nav-item"><a href="{{ route('admin.page.roles') }}" class="nav-link {{ Request::is('admin/pages/panel/roles') ? 'active' : '' }}">Exo Roles</a></li>
            <li class="nav-item"><a href="{{ route('admin.page.privacy') }}" class="nav-link {{ Request::is('admin/pages/panel/privacy') ? 'active' : '' }}">Privacy Policy</a></li>
            <li class="nav-item"><a href="{{ route('admin.page.terms') }}" class="nav-link {{ Request::is('admin/pages/panel/terms') ? 'active' : '' }}">Terms & Conditions</a></li>
        </ul>
        @else
        @endif

        @if ($role->roles->winners == 1)
            <a href="#" class="sl-menu-link {{ Request::is('admin/winners*') ? 'active show-sub' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-chatbox tx-20"></i>
                    <span class="menu-item-label">Winners</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.winner') }}" class="nav-link {{ Request::is('admin/winners/all') ? 'active' : '' }}">All Winners</a></li>
                <li class="nav-item"><a href="{{ route('admin.winner.add.new') }}" class="nav-link {{ Request::is('admin/winners/add-new') ? 'active' : '' }}">Add New</a></li>
            </ul>
        @else
        @endif

        @if ($role->roles->coupons == 1)
        <a href="{{ route('admin.coupon') }}" class="sl-menu-link {{ Request::is('admin/coupon') ? 'active' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-gift tx-20"></i>
                <span class="menu-item-label">Coupons</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        @else
        @endif

        @if ($role->roles->ecommerce == 1)
        <a href="#" class="sl-menu-link {{ Request::is('admin/ecommerce*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-pie-chart tx-20"></i>
                <span class="menu-item-label">E-commerce</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.ecommerce.dashboard') }}" class="nav-link {{ Request::is('admin/ecommerce/dashboard') ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('admin.all.orders') }}" class="nav-link {{ Request::is('admin/ecommerce/orders') ? 'active' : '' }}">Orders</a></li>
            <li class="nav-item"><a href="{{ route('admin.ecommerce.dashboard') }}" class="nav-link {{ Request::is('') ? 'active' : '' }}">Reports</a></li>
        </ul>
        @else
        @endif

        @if ($role->roles->orders == 1)
        @php
            $week_date = \Illuminate\Support\Carbon::today()->subDays(1);
            $order = \App\Models\Admin\Order::where('status', 1)->where('created_at', '>=', $week_date)->where('refund', 0)->get();
            $order1 = \App\Models\Admin\Order::where('status', 0)->where('created_at', '>=', $week_date)->where('refund', 0)->get();
        @endphp
        <a href="#" class="sl-menu-link {{ Request::is('admin/orders*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-shopping-cart tx-20"></i>
                @if (count($order) > 0 OR count($order1))
                    <span class="badge badge-danger icon-notify">{{ count($order)+count($order1) }}</span>
                @else
                @endif
                <span class="menu-item-label">Orders</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.processing.orders') }}" class="nav-link {{ Request::is('admin/orders/processing') ? 'active' : '' }}">
                    Processing
                    @if (count($order) > 0)
                        <span class="badge badge-danger text-right">{{ count($order) }}</span>
                    @else
                    @endif
                </a></li>
            <li class="nav-item"><a href="{{ route('admin.free.orders') }}" class="nav-link {{ Request::is('admin/orders/free/all') ? 'active' : '' }}">
                    Free Orders
                    @if (count($order1) > 0)
                        <span class="badge badge-danger text-right">{{ count($order1) }}</span>
                    @else
                    @endif
                </a></li>
            <li class="nav-item"><a href="{{ route('admin.complete.orders') }}" class="nav-link {{ Request::is('admin/orders/complete') ? 'active' : '' }}">Complete</a></li>
            <li class="nav-item"><a href="{{ route('admin.hold.orders') }}" class="nav-link {{ Request::is('admin/orders/on-hold') ? 'active' : '' }}">On-Hold</a></li>
        </ul>
        @else
        @endif

        @if ($role->roles->experience == 1)
        <a href="#" class="sl-menu-link {{ Request::is('admin/experience*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-cube tx-20"></i>
                <span class="menu-item-label">Experiences</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.experience') }}" class="nav-link {{ Request::is('admin/experience') ? 'active' : '' }}">All Experience</a></li>
            <li class="nav-item"><a href="{{ route('admin.experience.add.new') }}" class="nav-link {{ Request::is('admin/experience/add-new') ? 'active' : '' }}">Add New</a></li>
            <li class="nav-item"><a href="{{ route('admin.category') }}" class="nav-link {{ Request::is('admin/experience/category') ? 'active' : '' }}">Category</a></li>
            <li class="nav-item"><a href="{{ route('admin.charity') }}" class="nav-link {{ Request::is('admin/experience/charity') ? 'active' : '' }}">Charity</a></li>
        </ul>
        @else
        @endif

        <a href="#" class="sl-menu-link {{ Request::is('admin/entry*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-bullseye tx-20"></i>
                <span class="menu-item-label">Entry</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.entry') }}" class="nav-link {{ Request::is('admin/entry/level') ? 'active' : '' }}">All Entry</a></li>
            <li class="nav-item"><a href="{{ route('admin.entry.add.new') }}" class="nav-link {{ Request::is('admin/entry/level/add-new') ? 'active' : '' }}">Add New</a></li>
        </ul>

        @php
            $today = \Illuminate\Support\Carbon::today();
            $pending = \App\Models\Admin\Product::where('drawn', 0)->where('end_time', '<=', $today)->get();
        @endphp
        @if ($role->roles->drawn == 1)
            <a href="#" class="sl-menu-link {{ Request::is('admin/drawn/*') ? 'active show-sub' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-houzz tx-20"></i>
                    @if (count($pending) > 0)
                        <span class="badge badge-danger icon-notify">{{ count($pending) }}</span>
                    @else
                    @endif
                    <span class="menu-item-label">Drawn</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.drawn.pending') }}" class="nav-link {{ Request::is('admin/drawn/pending') ? 'active' : '' }}">
                        Pending
                        @if (count($pending) > 0)
                            <span class="badge badge-danger text-right">{{ count($pending) }}</span>
                        @else
                        @endif
                    </a></li>
                <li class="nav-item"><a href="{{ route('admin.drawn.complete') }}" class="nav-link {{ Request::is('admin/drawn/complete') ? 'active' : '' }}">Complete</a></li>
            </ul>
        @else
        @endif

        @if ($role->roles->theme_panel == 1)
        <a href="#" class="sl-menu-link {{ Request::is('admin/theme*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon fa fa-server tx-18"></i>
                <span class="menu-item-label">Theme Panel</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.theme.banner') }}" class="nav-link {{ Request::is('admin/theme/panel/banner') ? 'active' : '' }}">Banner</a></li>
                <li class="nav-item"><a href="{{ route('admin.theme.menu') }}" class="nav-link {{ Request::is('admin/theme/panel/menu') ? 'active' : '' }}">Menu</a></li>
                <li class="nav-item"><a href="{{ route('admin.theme.header') }}" class="nav-link {{ Request::is('admin/theme/panel/header') ? 'active' : '' }}">Header</a></li>
                <li class="nav-item"><a href="{{ route('admin.theme.footer') }}" class="nav-link {{ Request::is('admin/theme/panel/footer') ? 'active' : '' }}">Footer</a></li>
            </ul>
        @else
        @endif

        @if ($role->roles->users == 1)
        <a href="#" class="sl-menu-link {{ Request::is('admin/user*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-person-stalker tx-20"></i>
                <span class="menu-item-label">Users</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.user') }}" class="nav-link {{ Request::is('admin/user/all') ? 'active' : '' }}">All Admins</a></li>
            @if ($role->roles->create_admin == 1)
            <li class="nav-item"><a href="{{ route('admin.user.add.new') }}" class="nav-link {{ Request::is('admin/user/add-new') ? 'active' : '' }}">Add Admin</a></li>
            @endif
            <li class="nav-item"><a href="{{ route('admin.profile.edit') }}" class="nav-link {{ Request::is('admin/user/profile/edit') ? 'active' : '' }}">Edit Profile</a></li>
        </ul>
        @else
        @endif

        @if ($role->roles->settings == 1)
        <a href="#" class="sl-menu-link {{ Request::is('admin/settings*') ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-gear-b tx-22"></i>
                <span class="menu-item-label">Settings</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.newsletters') }}" class="nav-link {{ Request::is('admin/settings/newsletters') ? 'active show-sub' : '' }}">Newsletters</a></li>
            <li class="nav-item"><a href="{{ route('admin.tools.seo') }}" class="nav-link {{ Request::is('admin/settings/seo') ? 'active show-sub' : '' }}">SEO Tools</a></li>
            <li class="nav-item"><a href="{{ route('admin.cache.clear') }}" class="nav-link {{ Request::is('admin/settings/cache-clear') ? 'active show-sub' : '' }}">Cache Clear</a></li>
        </ul>
        @else
        @endif
    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
@else
@endif
