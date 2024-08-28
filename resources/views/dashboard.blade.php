@extends('layouts.app')
@section('content')
<div class="banner-hero">
    <video autoplay="autoplay" loop muted>
        <source type="video/mp4" src="{{ asset('video/banner.mp4') }}" />
    </video>
    <div class="banner-content">
        <h1 data-aos="fade-up">WELCOME TO MORMUGAO PORT TRUST</h1>
        <p data-aos="fade-up">India's Premier Port</p>
    </div>
</div>

<div class="g-0">
    <div class="mqrq-box">
        <div class="notice">Trade Notice</div>

        <marquee class="marq" direction="left" loop="" onmouseover="this.stop();" onmouseout="this.start();">
            <span>|| </span>
            <a href="#">The port thus bears a great responsibility for both the people who
                work here and for the environment.</a><span> || </span>
            <a href="#">The tag in HTML creates a scrolling text or image effect within a
                webpage.</a><span> ||</span>
        </marquee>

        <div class="view">view all</div>
    </div>
</div>

<!-- OVERVIEW SECTION START -->
<div class="overview">
    <div class="overview-slider">
        <div class="over-card">
            <i class="fa-solid fa-calendar-days"></i>
            <div class="content text-white">
                <h4><span id="daycounter">0.82</span> days</h4>
                <p>Average Pre-berthing detention</p>
            </div>
        </div>

        <div class="over-card">
            <i class="fa-solid fa-clock"></i>
            <div class="content text-white">
                <h4><span id="hrcounter">40.44</span> Hrs</h4>
                <p>Average. TRT</p>
            </div>
        </div>

        <div class="over-card">
            <i class="fa-solid fa-weight-scale"></i>
            <div class="content text-white">
                <h4><span id="toncounter">19,218</span> Tonnes</h4>
                <p>Average. Output per berth day</p>
            </div>
        </div>

        <div class="over-card">
            <i class="fa-solid fa-percent"></i>
            <div class="content text-white">
                <h4><span id="percounter">34.29</span>%</h4>
                <p>Operating Ratio</p>
            </div>
        </div>

        <div class="over-card">
            <i class="fa-solid fa-solar-panel"></i>
            <div class="content text-white">
                <h4><span id="milcounter">48.28</span> Million Units</h4>
                <p>Solar Power generated upto July 2024</p>
            </div>
        </div>
    </div>
</div>
<!-- OVERVIEW SECTION END -->

<div class="honorable-minister">
    <div class="container">
        <div class="section-heading">
            <h1 data-aos="fade-up">Our Honorable <span>Minister</span></h1>
        </div>
        <div class="row g-4">
            <div data-aos="fade-up" class="col-md-6">
                <div class="minister-card">
                    <img class="img-fluid" src="{{ asset('images/minister-image1.jpg') }}" alt="img" />
                    <div>
                        <h5>SHRI SARBANANDA SONOWAL</h5>
                        <p>
                            Honorable Union Cabinet Minister, Ministry of Ports, Shipping
                            and Waterways
                        </p>
                        <a href="#">View more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-6">
                <div class="minister-card">
                    <img class="img-fluid" src="{{ asset('images/shri-shantanu-thakur.jpg') }}" alt="img" />
                    <div>
                        <h5>SHRI SHANTANU THAKUR</h5>
                        <p>
                            Honorable Minister of State, Ministry of Ports, Shipping and
                            Waterways
                        </p>
                        <a href="#">View more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="galery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row g-4">
                    <div data-aos="fade-up" class="col-md-6 aos-init">
                        <div class="section-heading">
                            <h1 data-aos="fade-up">Photo <span>Gallery</span></h1>
                        </div>
                        <div class="gallery-slider">
                            <div class="galery-card">
                                <div class="imgBox">
                                    <div class="img-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('images/blog-3.jpg') }}" alt="img" />
                                </div>
                                <div class="content">
                                    <a href="#">The Highly Creative UI/UX Design.</a>
                                    <!-- <p>
                          Position of waiting / working vessels (after berthing
                          meeting). List of non working vessels.
                        </p> -->
                                </div>
                            </div>
                            <div class="galery-card">
                                <div class="imgBox">
                                    <div class="img-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('images/blog-4.jpg') }}" alt="img" />
                                </div>
                                <div class="content">
                                    <a href="#">The Highly Creative UI/UX Design.</a>
                                    <!-- <p>
                          Position of waiting / working vessels (after berthing
                          meeting). List of non working vessels.
                        </p> -->
                                </div>
                            </div>
                            <div class="galery-card">
                                <div class="imgBox">
                                    <div class="img-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('images/blog-5.jpg') }}" alt="img" />
                                </div>
                                <div class="content">
                                    <a href="#">The Highly Creative UI/UX Design.</a>
                                    <!-- <p>
                          Position of waiting / working vessels (after berthing
                          meeting). List of non working vessels.
                        </p> -->
                                </div>
                            </div>
                        </div>

                        <div class="text-center pt-2">
                            <a href="#" class="view-all">View All <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="col-md-6 aos-init">
                        <div class="section-heading">
                            <h1 data-aos="fade-up">Video <span>Gallery</span></h1>
                        </div>
                        <div class="video-gallery">
                            <div class="video_boxs">
                                <iframe width="100%" height="100%"
                                    src="https://www.youtube.com/embed/q5UWVgxt3gk?si=CodLaLQEEyfds31K"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>

                            <div class="content">
                                <a href="#">Corporate video</a>
                            </div>
                        </div>
                        <div class="text-center pt-2">
                            <a href="#" class="view-all">View All <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="news-wrap">
    <div class="container">
        <div data-aos="fade-up" class="section-heading aos-init">
            <h1>Latest News <span>Updates</span></h1>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div data-aos="fade-up" class="new-box aos-init">
                    <h6><i class="fa-regular fa-file-lines"></i> What's New</h6>
                    <div class="news-slider">
                        <a href="#">Development of International & Domestic Cruise
                            Terminal,Ferry, Ropax & Allied Activities at Mormugao Port,
                            Goa</a>
                        <a href="#">Replacement of LED Signboard at NMPT Signal Junction,
                            Panambur</a>
                    </div>
                    <p>View all <i class="fa-solid fa-arrow-right"></i></p>
                </div>
            </div>
            <div class="col-md-4">
                <div data-aos="fade-up" class="new-box aos-init">
                    <h6><i class="fa-solid fa-bullhorn"></i> Announcement</h6>
                    <div class="news-slider">
                        <a href="#">Development of International & Domestic Cruise
                            Terminal,Ferry, Ropax & Allied Activities at Mormugao Port,
                            Goa</a>
                        <a href="#">Replacement of LED Signboard at NMPT Signal Junction,
                            Panambur</a>
                    </div>
                    <p>View all <i class="fa-solid fa-arrow-right"></i></p>
                </div>
            </div>
            <div class="col-md-4">
                <div data-aos="fade-up" class="new-box aos-init">
                    <h6><i class="fa-regular fa-newspaper"></i> Tender</h6>
                    <div class="news-slider">
                        <a href="#">Development of International & Domestic Cruise
                            Terminal,Ferry, Ropax & Allied Activities at Mormugao Port,
                            Goa</a>
                        <a href="#">Replacement of LED Signboard at NMPT Signal Junction,
                            Panambur</a>
                    </div>
                    <p>View all <i class="fa-solid fa-arrow-right"></i></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-section">
    <div data-aos="fade-up" class="section-heading aos-init">
        <h1>We Belive In <span>Excellence</span></h1>
    </div>
    <div class="container">
        <div class="row g-4 d-none d-lg-flex">
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card one">
                    <i class="fa-solid fa-chart-line"></i>
                    <p>Project Status</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card two">
                    <i class="fa-solid fa-globe"></i>
                    <p>Trade News/ Notice</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card three">
                    <i class="fa-regular fa-user"></i>
                    <p>Customer Login</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card four">
                    <i class="fa-regular fa-credit-card"></i>
                    <p>Payment, GST & TDS</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card five">
                    <i class="fa-solid fa-user"></i>
                    <p>PPP Operators</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card six">
                    <i class="fa-solid fa-shield-halved"></i>
                    <p>Vigilance</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card seven">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <p>Paid/Pending Bills</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card eight">
                    <i class="fa-solid fa-user-nurse"></i>
                    <p>Medical Services</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card nine">
                    <i class="fa-solid fa-user-tie"></i>
                    <p>Employees Corner</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card ten">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <p>Pensioners Corner</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card eleven">
                    <i class="fa-solid fa-person-shelter"></i>
                    <p>LNG Terminal</p>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-3 aos-init">
                <div class="service-card twevel">
                    <i class="fa-solid fa-ship"></i>
                    <p>Samudrika</p>
                </div>
            </div>
        </div>
        <div class="service-slider d-lg-none">
            <div class="col-md-3">
                <div class="service-card one">
                    <i class="fa-solid fa-chart-line"></i>
                    <p>Project Status</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card two">
                    <i class="fa-solid fa-globe"></i>
                    <p>Trade News/ Notice</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card three">
                    <i class="fa-regular fa-user"></i>
                    <p>Customer Login</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card four">
                    <i class="fa-regular fa-credit-card"></i>
                    <p>Payment, GST & TDS</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card five">
                    <i class="fa-solid fa-user"></i>
                    <p>PPP Operators</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card six">
                    <i class="fa-solid fa-shield-halved"></i>
                    <p>Vigilance</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card seven">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <p>Paid/Pending Bills</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card eight">
                    <i class="fa-solid fa-user-nurse"></i>
                    <p>Medical Services</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card nine">
                    <i class="fa-solid fa-user-tie"></i>
                    <p>Employees Corner</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card ten">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <p>Pensioners Corner</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card eleven">
                    <i class="fa-solid fa-person-shelter"></i>
                    <p>LNG Terminal</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card twevel">
                    <i class="fa-solid fa-ship"></i>
                    <p>Samudrika</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div data-aos="fade-up" class="port-map aos-init">
        <img class="img-fluid" src="{{ asset('images/portmapnew.png') }}" alt="img" />
    </div>

    <div class="client-slider">
        <div>
            <img class="img-fluid" src="{{ asset('images/swatchh-bharat.jpg') }}" alt="client" />
        </div>
        <div>
            <img class="img-fluid" src="{{ asset('images/indiagov.jpg') }}" alt="client" />
        </div>
        <div>
            <img class="img-fluid" src="{{ asset('images/jeevan-pramman.jpg') }}" alt="client" />
        </div>
        <div>
            <img class="img-fluid" src="{{ asset('images/public-grievence.jpg') }}" alt="client" />
        </div>
        <div>
            <img class="img-fluid" src="{{ asset('images/Picture3.jpg') }}" alt="client" />
        </div>
    </div>
</div>
@endsection
