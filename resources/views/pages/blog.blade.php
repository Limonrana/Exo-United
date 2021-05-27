@extends('layouts.app')

@section('title', 'Blog | Exo-United')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">Blog</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item active">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- blog-grid-section start -->
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <div class="row m-bottom-not-30">
                        @forelse($blog as $val)
                        <div class="col-lg-12">
                            <div class="post-item m-bottom-30 post-item--list">
                                <div class="thumb has_bg_image" data-background="{{ asset($val->featured_image) }}"></div>
                                <div class="content">
                                    <h3 class="post-title"><a href="{{ route('single.blog.page', [$val->slug, Str::random(30)]) }}">
                                            {{ $val->post_title_en }}
                                        </a></h3>
                                    <ul class="post-meta">
                                        <li><a class="my-blog"><span>BY</span>Admin</a></li>
                                        <li><a class="my-blog"><i class="fa fa-calendar"></i>{{ date('d M Y', strtotime($val->created_at)) }}</a></li>
                                    </ul>
                                    <p>
                                        {!! Str::limit($val->post_description_en, 110) !!}
                                    </p>
                                    <a href="{{ route('single.blog.page', [$val->slug, Str::random(30)]) }}" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        @empty
                            <div class="col-lg-12">
                                <h3>Blog Post Empty.</h3>
                            </div>
                        @endforelse
                    <div class="row">
                        <div class="col-12">
                            {{ $blog->links() }}
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget_subscribe">
                            <h5 class="widget-sub-title">Subscriber</h5>
                            <h3 class="widget-title">For NewsLetter</h3>
                            <form class="subscribe-form">
                                <input type="email" name="subs_email" id="subs_email" placeholder="Email address">
                                <input type="submit" value="subscribe">
                            </form>
                        </div><!-- widget end -->
                        <div class="widget widget_categories">
                            <h3 class="widget-title">categories</h3>
                            <ul>
                                @forelse($category as $val)
                                    @php
                                    $count = \App\Models\Admin\Post::where('category_id', $val->id)->count();
                                    @endphp
                                <li><a href="{{ route('blog.category.page', [Str::of($val->category_name_en)->slug('-'), $val->id]) }}">
                                        {{ $val->category_name_en }}<span>({{ $count }})</span>
                                    </a></li>
                                @empty
                                    <li><a class="my-blog">Category Empty</a></li>
                                @endforelse
                            </ul>
                        </div><!-- widget end -->
                        <div class="widget widget_latest_post">
                            <h3 class="widget-title">latest posts</h3>
                            <ul class="small-post-list">
                                @forelse($latest_post as $val)
                                <li class="small-post">
                                    <div class="small-post-thumb">
                                        <img src="{{ asset($val->featured_image) }}" alt="{{ $val->post_title_en }}">
                                    </div>
                                    <div class="small-post-content">
                                        <h6 class="post-title"><a href="{{ route('single.blog.page', [$val->slug, Str::random(30)]) }}">
                                                {{ Str::limit($val->post_title_en, 15) }}
                                            </a></h6>
                                        <ul class="post-meta">
                                            <li><a class="my-blog">{{ date('d M Y', strtotime($val->created_at)) }}</a></li>
                                        </ul>
                                    </div>
                                </li><!-- small-post end -->
                                @empty
                                    <h4>Latest Post Empty</h4>
                                @endforelse
                            </ul>
                        </div><!-- widget end -->
                        <div class="widget widget_tags">
                            <h3 class="widget-title">Tags</h3>
                            <div class="tags">
                                @forelse($tag as $val)
                                <a class="my-blog">{{ $val->tag_name_en }}</a>
                                @empty
                                    <a href="">No tag</a>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-grid-section end -->
@endsection
