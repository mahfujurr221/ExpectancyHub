@extends('frontend.layouts.master')
@section('title', 'About Us')
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
                            <h1 class="breadcrumbs-title">About Us</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->

        <!--=================  About Section Start Here ================= -->
        <div class="about__area about__area_one p-relative pt---80 pb---100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__image">
                            <img src="{{ asset('frontend/images/about/ab.png') }} " alt="About">
                            <img class="bg-white react__shape__ab img-fluid rounded-circle" style="width: 7rem"
                                src="{{ asset('frontend/images/apple-touch-icon.png') }} " alt="Shape Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <h2 class="about__title">Welcome to <br> <em>English Scanner</em></h2>
                            <p class="about__paragraph">{{ $aboutUs->sub_title ?? '' }}</p>

                            <p>{{ $aboutUs->short_description ?? '' }}</p>
                            <ul>
                                <li><a href="about.html" class="more-about"> Read More <svg width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a></li>
                                <li class="last-li">
                                    <em>Get Support</em>
                                    <a href="mailto:support@expectancyhub.com">support@expectancyhub.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= About Section End Here ================= -->


        <!--================= About Course Section Start Here =================-->
        @include('frontend.layouts.includes.about_course')
        <!--================= About Course Section End Here =================-->

        <!--================= Instructor Section Start Here =================-->
        <div class="text-center instructor__area pt---80 pb---10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="instructor__content instructor__content-one">
                            <div class="instructors_lefts">
                                <h6>Course Instructors</h6>
                                <h2>Meet our <br> Class Instructors</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="instructor__content">
                            <div class="instructor__content-1">
                                <img src="{{ asset('frontend/images/instructor/03.jpg') }} "
                                    alt="course instructor picture">
                            </div>
                            <div class="instructor__content-2">
                                <h4>
                                    <a href="#">Jason Response</a>
                                </h4>
                                <p>Education Assistant</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="instructor__content">
                            <div class="instructor__content-1">
                                <img src="{{ asset('frontend/images/instructor/04.jpg') }} "
                                    alt="course instructor picture">
                            </div>
                            <div class="instructor__content-2">
                                <h4>
                                    <a href="#">Jonquil Von</a>
                                </h4>
                                <p>Teaching Assistant</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="instructor__content">
                            <div class="instructor__content-1">
                                <img src="{{ asset('frontend/images/instructor/05.jpg') }} "
                                    alt="course instructor picture">
                            </div>
                            <div class="instructor__content-2">
                                <h4>
                                    <a href="#">Piff Jenkins</a>
                                </h4>
                                <p>Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="instructor__content">
                            <div class="instructor__content-1">
                                <img src="{{ asset('frontend/images/instructor/06.jpg') }}"
                                    alt="course instructor picture">
                            </div>
                            <div class="instructor__content-2">
                                <h4>
                                    <a href="#">Brian Cumin</a>
                                </h4>
                                <p>Lead Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="instructor__content">
                            <div class="instructor__content-1">
                                <img src="{{ asset('frontend/images/instructor/07.jpg') }} "
                                    alt="course instructor picture">
                            </div>
                            <div class="instructor__content-2">
                                <h4>
                                    <a href="#">Hanson Deck</a>
                                </h4>
                                <p>Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="instructor__content">
                            <div class="instructor__content-1">
                                <img src="{{ asset('frontend/images/instructor/08.jpg') }} "
                                    alt="course instructor picture">
                            </div>
                            <div class="instructor__content-2">
                                <h4>
                                    <a href="#">Alan Fresco</a>
                                </h4>
                                <p>Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Instructor Section End Here =================-->

        <!--=================  Satisfaction Section Start Here ================= -->
        <div class="student_satisfaction-section pt---80 pb---120">
            <div class="container">
                <div class="react__title__section-all pb---30">
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h6>Student Satisfaction</h6>
                            <h2 class="react__tittle">Student Community <br>Feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="feedreact-slider owl-carousel">
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="testimonial__ratings">
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star_alt"></em>
                                    <span> (14 Reviews) </span>
                                </div>
                                <div class="parag">We are a Portsmouth based web design and e-marketing agency. We
                                    understand how important a website is to any business, big or small. Your online
                                    presence is now more important than ever before.</div>
                            </div>
                            <img class="poly" src="{{ asset('frontend/images/testimonial/poly.png') }} "
                                alt="image">
                        </div>
                        <div class="author-sec">
                            <div class="icon">
                                <img src="{{ asset('frontend/images/testimonial/1.png') }} " alt="image">
                            </div>
                            <div class="text">
                                <h4>Pelican Steve</h4>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="testimonial__ratings">
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star_alt"></em>
                                    <span> (18 Reviews) </span>
                                </div>
                                <div class="parag">We are a Portsmouth based web design and e-marketing agency. We
                                    understand how important a website is to any business, big or small. Your online
                                    presence is now more important than ever before.</div>
                            </div>
                            <img class="poly" src="{{ asset('frontend/images/testimonial/poly.png') }}"
                                alt="image">
                        </div>
                        <div class="author-sec">
                            <div class="icon">
                                <img src="{{ asset('frontend/images/testimonial/2.png') }} " alt="image">
                            </div>
                            <div class="text">
                                <h4>Chase Kroll</h4>
                                <p>IT Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="testimonial__ratings">
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star_alt"></em>
                                    <span> (26 Reviews) </span>
                                </div>
                                <div class="parag">We are a Portsmouth based web design and e-marketing agency. We
                                    understand how important a website is to any business, big or small. Your online
                                    presence is now more important than ever before.</div>
                            </div>
                            <img class="poly" src="{{ asset('frontend/images/testimonial/poly.png') }}"
                                alt="image">
                        </div>
                        <div class="author-sec">
                            <div class="icon">
                                <img src="{{ asset('frontend/images/testimonial/3.png') }} " alt="image">
                            </div>
                            <div class="text">
                                <h4>Jackson Pot</h4>
                                <p>Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="testimonial__ratings">
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star_alt"></em>
                                    <span> (14 Reviews) </span>
                                </div>
                                <div class="parag">We are a Portsmouth based web design and e-marketing agency. We
                                    understand how important a website is to any business, big or small. Your online
                                    presence is now more important than ever before.</div>
                            </div>
                            <img class="poly" src="{{ asset('frontend/images/testimonial/poly.png') }} "
                                alt="image">
                        </div>
                        <div class="author-sec">
                            <div class="icon">
                                <img src="{{ asset('frontend/images/testimonial/1.png') }} " alt="image">
                            </div>
                            <div class="text">
                                <h4>Pelican Steve</h4>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--=================  Satisfaction Section End Here ================= -->

        <!--================= Counter Section Start Here =================-->
        @include('frontend.layouts.includes.counter')
        <!--================= Counter Section End Here =================-->

    </div>
@endsection
