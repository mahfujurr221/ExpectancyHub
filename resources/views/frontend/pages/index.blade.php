@extends('frontend.layouts.master')
@section('title', 'Home')

@section('content')
   <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-4 text-center" style="max-width: 900px;">
                            <h4 class="mb-3 text-white text-uppercase fw-bold mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h4>
                            <h1 class="mb-3 text-white display-1 text-capitalize mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Immigration Process Starts Here!</h1>
                            <p class="mb-4 text-white mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <a class="px-5 py-3 text-white btn btn-primary border-secondary rounded-pill wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-4 text-center" style="max-width: 900px;">
                            <h5 class="mb-3 text-white text-uppercase fw-bold mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h5>
                            <h1 class="mb-3 text-white display-1 text-capitalize mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Best Visa Immigrations Services</h1>
                            <p class="mb-4 text-white mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <a class="px-5 py-3 text-white btn btn-primary border-secondary rounded-pill wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="mb-0 modal-title text-secondary" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="mx-auto input-group w-75 d-flex">
                        <input type="search" class="p-3 form-control" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="p-3 input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->



    <!-- About Start -->
    <div class="py-5 container-fluid">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="rounded bg-light">
                        <img src="img/about-2.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                        <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">About the company</h5>
                    <h1 class="mb-4 display-5">We’re Trusted Immigration Consultant Agency.</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt architecto consectetur iusto perferendis blanditiis assumenda dignissimos, commodi fuga culpa earum explicabo libero sint est mollitia saepe! Sequi asperiores rerum nemo!</p>
                    <div class="row gy-4 align-items-center">
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-map-marked-alt fa-3x text-secondary"></i>
                            <h5 class="ms-4">Best Immigration Resources</h5>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-passport fa-3x text-secondary"></i>
                            <h5 class="ms-4">Return Visas Availabile</h5>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="p-3 text-center rounded bg-light">
                                <div class="mb-2">
                                    <i class="fas fa-ticket-alt fa-4x text-primary"></i>
                                </div>
                                <h1 class="mb-2 display-5 fw-bold">34</h1>
                                <p class="mb-0 text-muted">Years of Experience</p>
                            </div>
                        </div>
                        <div class="col-8 col-md-9">
                            <div class="mb-5">
                                <p class="mb-3 text-primary h6"><i class="fa fa-check-circle text-secondary me-2"></i> Offer 100 % Genuine Assistance</p>
                                <p class="mb-3 text-primary h6"><i class="fa fa-check-circle text-secondary me-2"></i> It’s Faster & Reliable Execution</p>
                                <p class="mb-3 text-primary h6"><i class="fa fa-check-circle text-secondary me-2"></i> Accurate & Expert Advice</p>
                            </div>
                            <div class="flex-wrap d-flex">
                                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                    <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                        <div class="position-absolute" style="top: 0; left: 25px;">
                                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="text-primary">Have any questions?</span>
                                    <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">Free: +0123 456 7890</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Counter Facts Start -->
    <div class="py-5 container-fluid counter-facts">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-passport"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Visa Categories</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">31</span>
                                <h4 class="mb-0 text-secondary" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Team Members</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">377</span>
                                <h4 class="mb-0 text-secondary" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Visa Process</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">4.9</span>
                                <h4 class="mb-0 text-secondary" style="font-weight: 600; font-size: 25px;">K</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Success Rates</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">98</span>
                                <h4 class="mb-0 text-secondary" style="font-weight: 600; font-size: 25px;">%</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->

    <!-- Counter Facts Start -->
    <div class="py-5 container-fluid counter-facts">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-passport"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Visa Categories</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">31</span>
                                <h4 class="mb-0 text-secondary" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Team Members</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">377</span>
                                <h4 class="mb-0 text-secondary" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Visa Process</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">4.9</span>
                                <h4 class="mb-0 text-secondary" style="font-weight: 600; font-size: 25px;">K</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Success Rates</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">98</span>
                                <h4 class="mb-0 text-secondary" style="font-weight: 600; font-size: 25px;">%</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->


    <!-- Services Start -->
    <div class="pt-5 overflow-hidden container-fluid service">
        <div class="container py-5">
            <div class="mb-5 text-center section-title wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="px-3 sub-title text-primary">Visa Categories</h5>
                </div>
                <h1 class="mb-4 display-5">Enabling Your Immigration Successfully</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/service-1.jpg" class="rounded img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="p-3 mx-5 mb-4 text-center rounded bg-primary">
                                        <a href="#" class="mb-0 text-white h4">Job Visa</a>
                                    </div>
                                    <a class="px-5 py-3 mb-4 btn bg-light text-secondary rounded-pill" href="#">Explore More</a>
                                </div>
                                <div class="pb-4 service-content">
                                    <a href="#">
                                        <h4 class="py-3 mb-4 text-white">Job Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                        <a class="px-5 py-3 btn btn-primary border-secondary rounded-pill" href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/service-2.jpg" class="rounded img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="p-3 mx-5 mb-4 text-center rounded bg-primary">
                                        <a href="#" class="mb-0 text-white h4">Business Visa</a>
                                    </div>
                                    <a class="px-5 py-3 mb-4 btn bg-light text-secondary rounded-pill" href="#">Explore More</a>
                                </div>
                                <div class="pb-4 service-content">
                                    <a href="#">
                                        <h4 class="py-3 mb-4 text-white">Business Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                        <a class="px-5 py-3 text-white btn btn-primary border-secondary rounded-pill" href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/service-3.jpg" class="rounded img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="p-3 mx-5 mb-4 text-center rounded bg-primary">
                                        <a href="#" class="mb-0 text-white h4">Diplometic Visa</a>
                                    </div>
                                    <a class="px-5 py-3 mb-4 btn bg-light text-secondary rounded-pill" href="#">Explore More</a>
                                </div>
                                <div class="pb-4 service-content">
                                    <a href="#">
                                        <h4 class="py-3 mb-4 text-white">Diplometic Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                        <a class="px-5 py-3 text-white btn btn-primary border-secondary rounded-pill" href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/service-1.jpg" class="rounded img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="p-3 mx-5 mb-4 text-center rounded bg-primary">
                                        <a href="#" class="mb-0 text-white h4">Students Visa</a>
                                    </div>
                                    <a class="px-5 py-3 mb-4 btn bg-light text-secondary rounded-pill" href="#">Explore More</a>
                                </div>
                                <div class="pb-4 service-content">
                                    <a href="#">
                                        <h4 class="py-3 mb-4 text-white">Students Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                        <a class="px-5 py-3 text-white btn btn-primary border-secondary rounded-pill" href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/service-2.jpg" class="rounded img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="p-3 mx-5 mb-4 text-center rounded bg-primary">
                                        <a href="#" class="mb-0 text-white h4">Residence Visa</a>
                                    </div>
                                    <a class="px-5 py-3 mb-4 btn bg-light text-secondary rounded-pill" href="#">Explore More</a>
                                </div>
                                <div class="pb-4 service-content">
                                    <a href="#">
                                        <h4 class="py-3 mb-4 text-white">Residence Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                        <a class="px-5 py-3 text-white btn btn-primary border-secondary rounded-pill" href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/service-3.jpg" class="rounded img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="p-3 mx-5 mb-4 text-center rounded bg-primary">
                                        <a href="#" class="mb-0 text-white h4">Tourist Visa</a>
                                    </div>
                                    <a class="px-5 py-3 mb-4 btn bg-light text-secondary rounded-pill" href="#">Explore More</a>
                                </div>
                                <div class="pb-4 service-content">
                                    <a href="#">
                                        <h4 class="py-3 mb-4 text-white">Tourist Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                        <a class="px-5 py-3 text-white btn btn-primary border-secondary rounded-pill" href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->



    <!-- Features Start -->
    <div class="py-5 overflow-hidden container-fluid features">
        <div class="container">
            <div class="mb-5 text-center section-title wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="px-3 sub-title text-primary">Why Choose Us</h5>
                </div>
                <h1 class="mb-4 display-5">Offer Tailor Made Services That Our Client Requires</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="text-center row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="p-4 text-center feature-item">
                        <div class="p-3 mb-4 feature-icon">
                            <i class="fas fa-dollar-sign fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Cost-Effective</h5>
                            <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="p-4 text-center feature-item">
                        <div class="p-3 mb-4 feature-icon">
                            <i class="fab fa-cc-visa fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Visa Assistance</h5>
                            <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="p-4 text-center feature-item">
                        <div class="p-3 mb-4 feature-icon">
                            <i class="fas fa-atlas fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Faster Processing</h5>
                            <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="p-4 text-center feature-item">
                        <div class="p-3 mb-4 feature-icon">
                            <i class="fas fa-users fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Direct Interviews</h5>
                            <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a class="px-5 py-3 btn btn-primary border-secondary rounded-pill wow fadeInUp" data-wow-delay="0.1s" href="#">More Features</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- Countries We Offer Start -->
    <div class="py-5 overflow-hidden container-fluid country">
        <div class="container">
            <div class="text-center section-title wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                <div class="sub-style">
                    <h5 class="px-3 sub-title text-primary">COUNTRIES WE OFFER</h5>
                </div>
                <h1 class="mb-4 display-5">Immigration & visa services following Countries</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="text-center row g-4">
                <div class="mb-5 col-lg-6 col-xl-3 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="country-item">
                        <div class="overflow-hidden rounded">
                            <img src="img/country-1.jpg" class="rounded img-fluid w-100" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="img/brazil.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">Brazil</a>
                        </div>
                    </div>
                </div>
                <div class="mb-5 col-lg-6 col-xl-3 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="country-item">
                        <div class="overflow-hidden rounded">
                            <img src="img/country-2.jpg" class="rounded img-fluid w-100" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="img/india.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">india</a>
                        </div>
                    </div>
                </div>
                <div class="mb-5 col-lg-6 col-xl-3 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="country-item">
                        <div class="overflow-hidden rounded">
                            <img src="img/country-3.jpg" class="rounded img-fluid w-100" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="img/usa.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">New York</a>
                        </div>
                    </div>
                </div>
                <div class="mb-5 col-lg-6 col-xl-3 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="country-item">
                        <div class="overflow-hidden rounded">
                            <img src="img/country-4.jpg" class="rounded img-fluid w-100" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="img/italy.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">Italy</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a class="px-5 py-3 btn btn-primary border-secondary rounded-pill wow fadeInUp" data-wow-delay="0.1s" href="#">More Countries</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Countries We Offer End -->


    <!-- Testimonial Start -->
    <div class="pb-5 overflow-hidden container-fluid testimonial">
        <div class="container py-5">
            <div class="mb-5 text-center section-title wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="px-3 sub-title text-primary">OUR CLIENTS RIVIEWS</h5>
                </div>
                <h1 class="mb-4 display-5">What Our Clients Say</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="p-4 mb-5 testimonial-content">
                        <p class="mb-0 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="img">
                        </div>
                        <div class="my-auto">
                            <h5>Person Name</h5>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="p-4 mb-5 testimonial-content">
                        <p class="mb-0 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="img">
                        </div>
                        <div class="my-auto">
                            <h5>Person Name</h5>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="p-4 mb-5 testimonial-content">
                        <p class="mb-0 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="img">
                        </div>
                        <div class="my-auto">
                            <h5>Person Name</h5>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="pb-5 overflow-hidden container-fluid contact">
        <div class="container py-5">
            <div class="pt-5 office">
                <div class="mb-5 text-center section-title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="px-3 sub-title text-primary">Worlwide Offices</h5>
                    </div>
                    <h1 class="mb-4 display-5">Explore Our Office Worldwide</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="p-4 office-item">
                            <div class="mb-4 office-img">
                                <img src="img/office-2.jpg" class="rounded img-fluid w-100" alt="">
                            </div>
                            <div class="office-content d-flex flex-column">
                                <h4 class="mb-2">Australia</h4>
                                <a href="#" class="mb-2 text-secondary fs-5">+123.456.7890</a>
                                <a href="#" class="mb-2 text-muted fs-5">travisa@example.com</a>
                                <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="p-4 office-item">
                            <div class="mb-4 office-img">
                                <img src="img/office-1.jpg" class="rounded img-fluid w-100" alt="">
                            </div>
                            <div class="office-content d-flex flex-column">
                                <h4 class="mb-2">Canada</h4>
                                <a href="#" class="mb-2 text-secondary fs-5">(012) 0345 6789</a>
                                <a href="#" class="mb-2 text-muted fs-5">travisa@example.com</a>
                                <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="p-4 office-item">
                            <div class="mb-4 office-img">
                                <img src="img/office-3.jpg" class="rounded img-fluid w-100" alt="">
                            </div>
                            <div class="office-content d-flex flex-column">
                                <h4 class="mb-2">United Kingdom</h4>
                                <a href="#" class="mb-2 text-secondary fs-5">01234.567.890</a>
                                <a href="#" class="mb-2 text-muted fs-5">travisa@example.com</a>
                                <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="p-4 office-item">
                            <div class="mb-4 office-img">
                                <img src="img/office-4.jpg" class="rounded img-fluid w-100" alt="">
                            </div>
                            <div class="office-content d-flex flex-column">
                                <h4 class="mb-2">India</h4>
                                <a href="#" class="mb-2 text-secondary fs-5">+123.45.67890</a>
                                <a href="#" class="mb-2 text-muted fs-5">travisa@example.com</a>
                                <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
@endsection
