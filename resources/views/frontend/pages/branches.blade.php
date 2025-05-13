@extends('frontend.layouts.master')
@section('title', 'Branches')
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
                        <h1 class="breadcrumbs-title">Branches </h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Branches</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Breadcrumbs Section End Here =================-->


    <!--================= Branches Section Start Here =================-->
    <div id="react-contact" class="react-contact-page pt---100">

        <div class="container">

            <div class="row pb---96">
                <div class="row">
                    @foreach ($branches as $branch)
                        <div class="col-lg-6 col-md-6 col-12 pt-10">
                            <div class="branch-container">
                                <!-- Address and Contact Section -->
                                <ul class="address-sec">
                                    <li>

                                        <span class="text">
                                            <em>Address</em> {{ $branch->address }}
                                        </span>
                                    </li>
                                    <li>

                                        <span class="text">
                                            <em>Contact</em>
                                            <a href="#">Mobile: (+88) {{ $branch->phone }}</a>
                                            <a href="#">Mail: {{ $branch->email }}</a>
                                        </span>
                                    </li>
                                </ul>

                                <!-- Google Map Section -->
                                <div class="map-container">
                                    <iframe
                                        src="https://www.google.com/maps/embed?{{ $branch->map }}"
                                        width="800" height="600" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    {{-- {!! $branch->map !!} --}}
                                </div>

                                {{-- <iframe
                                        src="{{ $branch->map }}"
                                        width="800" height="600" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
<!--================= Branches Section End Here =================-->
@endsection
