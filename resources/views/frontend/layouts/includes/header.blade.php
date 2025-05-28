<!-- Topbar Start -->
    <div class="px-5 container-fluid bg-primary d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="text-center col-lg-5 text-lg-start mb-lg-0">
                <div class="d-flex">
                    <a href="#" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>{{setting()->email}}</a>
                    <a href="#" class="text-muted me-4"><i class="fas fa-phone-alt text-secondary me-2"></i>{{setting()->phone}}</a>
                </div>
            </div>
            <div class="mb-2 text-center col-lg-3 row-cols-1 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="{{setting()->facebook}}"><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="{{setting()->linkedin}}"><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="{{setting()->instagram}}"><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href="{{setting()->youtube}}"><i class="fab fa-youtube fw-normal text-secondary"></i></a>
                </div>
            </div>
            <div class="text-center col-lg-4 text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#" class="text-muted me-2"> Help</a><small> / </small>
                    <a href="#" class="mx-2 text-muted"> Support</a><small> / </small>
                    <a href="#" class="text-muted ms-2"> Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="p-0 container-fluid nav-bar">
        <nav class="px-4 py-3 bg-white navbar navbar-expand-lg navbar-light px-lg-5 py-lg-0">
            <a href="" class="p-0 navbar-brand">
                <h1 class="m-0 display-5 text-secondary"><img src="img/brand-logo.png" class="img-fluid" alt="">Expectancy Hub</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="py-0 navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Pages</span></a>
                        <div class="m-0 dropdown-menu">
                            <a href="feature.html" class="dropdown-item">Feature</a>
                            <a href="countries.html" class="dropdown-item">Countries</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="training.html" class="dropdown-item">Training</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <button class="mb-3 btn btn-primary btn-md-square border-secondary mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                {{-- <a href="" class="px-4 py-2 mb-3 btn btn-primary border-secondary rounded-pill px-lg-3 mb-md-3 mb-lg-0">Get A Quote</a> --}}
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->