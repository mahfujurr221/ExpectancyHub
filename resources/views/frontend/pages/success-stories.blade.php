@extends('frontend.layouts.master')
@section('title', 'Success Stories')
@section('css')
    <style>
        .success-story-section {
            background: #f9f9f9;
        }

        .success-story-slider {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .success-single-slide {
            width: 300px;
            background: #fff;
            border-radius: 10px;
            margin: 0 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .success-story-img {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
    </style>
@endsection
@section('content')
    <div class="react-wrapper-inner">
        <!--================= Breadcrumbs Section Start Here =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="{{ asset('frontend/images/breadcrumbs/1.jpg') }} " alt="Breadcrumbs">
                <img class="mobile" src="{{ asset('frontend/images/breadcrumbs/1.jpg') }} " alt="Breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title"> Success Stories</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li> Success Stories</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->

        <!--================= Practice Section Start Here =================-->
        <div class="success-story-section pt---100 pb---100">
            <div class="container">
                <div class="text-center section-title-area-six">
                    <div class="section-title wow fadeInLeftBig" data-wow-duration="2s">Success
                        Stories</div>
                    <img src="{{ asset('frontend/images/line.png') }} " alt="image" />
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="success-story-slider">
                            <div class="row">
                                @foreach ($successStories as $item)
                                    <div class="col-md-3 mb-3">
                                        <div class="success-single-slide">
                                            <div class="success-story-img">
                                                <img src="{{ asset($item->file_url) }} " alt="image" />
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Practice Section End Here =================-->

        <!--================= Counter Section Start Here =================-->
        @include('frontend.layouts.includes.counter')
        <!--================= Counter Section End Here =================-->

    </div>
@endsection
