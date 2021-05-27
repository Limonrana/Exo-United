@extends('layouts.app')

@section('title', 'Exo-United | Privacy Policy')

@section('content')
    <!-- faq-section start -->
    <section class="faq-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">{{ $get->page_title }}</h2>
                        <p>Effective: @if ($get->updated_at) {{ date('F, Y', strtotime($get->updated_at)) }} @else {{ date('F, Y', strtotime($get->created_at)) }} @endif</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        {!! $get->page_content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->
@endsection

@section('css')
    <style>
        ul, ol {
            margin: 0;
            list-style: square;
            color: #ffffff !important;
        }
        .info_content.mt-3 ul li {
            color: white !important;
        }
        .info_content.mt-3 ul {
            padding: 30px; !important;
        }
        .content ul li{
            color: white !important;
        }
        .content ul{
            padding: 10px; !important;
            padding-left: 50px;
        }

        .content ol li{
            color: white !important;
        }
        .content ol{
            padding: 10px; !important;
            padding-left: 50px;
        }
    </style>
@endsection
