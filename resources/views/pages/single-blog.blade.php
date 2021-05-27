@extends('layouts.app')

@section('title', 'Single-Blog | Exo-United')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="assets/images/01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">{{ $single_blog->post_title_en }}</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog.page') }}">Blog</a></li>
                                <li class="breadcrumb-item active">{{ $single_blog->post_title_en }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- blog-details-section start -->
    <section class="blog-details-section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <div class="blog-details-wrapper">
                        <div class="thumb">
                            <img src="{{ asset($single_blog->featured_image) }}" alt="">
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li><a class="my-blog"><span>BY</span>Admin</a></li>
                                <li><a class="my-blog"><i class="fa fa-calendar"></i>{{ date('d M Y', strtotime($single_blog->created_at)) }}</a></li>
                            </ul>
                            <h3 class="post-title">{{ $single_blog->post_title_en }}</h3>
                            {!! $single_blog->post_description_en !!}
                        </div>
                        <div class="footer d-flex justify-content-between align-items-center">
                            <ul class="post-tags">
                                <li>tag:</li>
                                <li>{{ $single_blog->tag_name }}</li>
                            </ul>
                            <ul class="post-share">
                                <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
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
    <!-- blog-details-section end -->
@endsection
