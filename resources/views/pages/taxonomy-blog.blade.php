@extends('layouts.app')

@section('title', 'Category | Exo-United')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">{{ $title }}</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog.page') }}">Blog</a></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
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
                <div class="col-lg-12">
                    <div class="row m-bottom-not-30">
                        @forelse($blog as $val)
                        <div class="col-lg-4 col-md-6">
                            <div class="post-item m-bottom-30">
                                <div class="thumb">
                                    <img src="{{ asset($val->featured_image) }}" alt="image">
                                </div>
                                <div class="content">
                                    <h3 class="post-title"><a href="{{ route('single.blog.page', [$val->slug, Str::random(30)]) }}">
                                            {{ Str::limit($val->post_title_en, 25) }}
                                        </a></h3>
                                    <ul class="post-meta">
                                        <li><a class="my-blog"><span>BY</span>Admin</a></li>
                                        <li><a class="my-blog"><i class="fa fa-calendar"></i>{{ date('d M Y', strtotime($val->created_at)) }}</a></li>
                                    </ul>
                                    <p>
                                        {!! Str::limit($val->post_description_en, 100) !!}
                                    </p>
                                    <a href="{{ route('single.blog.page', [$val->slug, Str::random(30)]) }}" class="blog-btn">read more</a>
                                </div>
                            </div>
                        </div><!-- post-item end -->
                        @empty
                            <h3 class="pb-5 text-center">Category post is empty</h3>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{ $blog->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-grid-section end -->
@endsection
