<aside class="sidebar col-lg-3">
    <div class="widget widget-dashboard">

        <ul class="list mt-2">
            <li class="cmn-btn {{ Request::is('customer/dashboard') ? 'active' : '' }}"><a href="{{ route('home') }}">Account Dashboard</a></li>
            <li class="cmn-btn mt-2 {{ Request::is('customer/orders/all') ? 'active' : '' }}"><a href="{{ route('customer.new.order') }}">Processing</a></li>
            <li class="cmn-btn mt-2 {{ Request::is('customer/orders/complete') ? 'active' : '' }}"><a href="{{ route('customer.complete.order') }}">Complete</a></li>
            <li class="cmn-btn mt-2 {{ Request::is('customer/billing-address') ? 'active' : '' }}"><a href="{{ route('customer.billing.address') }}">Billing Address</a></li>
            <li class="cmn-btn mt-2 {{ Request::is('change/password') ? 'active' : '' }}"><a href="{{ route('change.password') }}">Change Password</a></li>
            <li class="cmn-btn mt-2 {{ Request::is('customer/profile') ? 'active' : '' }}"><a href="{{ route('customer.profile') }}">Account Information</a></li>
            <li class="cmn-btn mt-2">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div><!-- End .widget -->
</aside><!-- End .col-lg-3 -->



