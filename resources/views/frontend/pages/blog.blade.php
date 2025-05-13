@extends('frontend.layouts.master')
@section('title', 'Blog')
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
                            <h1 class="breadcrumbs-title">Blogs Video </h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>Blogs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->

        <!--================= Course Filter Section Start Here =================-->
        <div class="react-course-filter back__course__page_grid pb---40 pt---110">
            <div class="container pb---30">

                <div class="row">
                    <div class="single-studies col-lg-4 grid-item">
                        <div class="inner-course">

                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/7_l-y7aAJtw?si=WFJE2SWXFOYTNDI0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="case-content2">
                                <p class="text-center case-title2"> Blog Video 1</p>

                            </div>
                        </div>
                    </div>
                    <div class="single-studies col-lg-4 grid-item">
                        <div class="inner-course">

                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/UmgkLnVQaZo?si=zJ_gRca70YqbSqRb"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="case-content2">
                                <p class="text-center case-title2"> Blog Video 2</p>

                            </div>
                        </div>
                    </div>
                    <div class="single-studies col-lg-4 grid-item">
                        <div class="inner-course">

                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/QRDFMPmFLG0?si=sntztrRJaoIEOtIs"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="case-content2">
                                <p class="text-center case-title2"> Blog Video 3</p>

                            </div>
                        </div>
                    </div>
                    <div class="single-studies col-lg-4 grid-item">
                        <div class="inner-course">

                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/llnG2RV1XAI?si=itaZygTj4afP7hcy"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="case-content2">
                                <p class="text-center case-title2"> Blog Video 4</p>

                            </div>
                        </div>
                    </div>
                    <div class="single-studies col-lg-4 grid-item">
                        <div class="inner-course">

                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/V_xpgxwIGdg?si=lNA6R4vgZ0Pcr67T"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="case-content2">
                                <p class="text-center case-title2"> Blog Video 5</p>

                            </div>
                        </div>
                    </div>
                    <div class="single-studies col-lg-4 grid-item">
                        <div class="inner-course">

                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/qbv5epRGuSc?si=wpiQF62olZLvI0iU"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="case-content2">
                                <p class="text-center case-title2"> Blog Video 6</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--================= Course Filter Section End Here =================-->

    </div>
@endsection
