@include('admin.partials.header')
@guest

@else
    @include('admin.partials.sidebar')
    @include('admin.partials.topbar')
@endguest


@include('admin.partials.footer')
