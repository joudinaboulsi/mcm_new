@extends('frontend_layouts.master')
@section('content')
    <div class="home-4-wrapper">

        <!-- Hero Area Start -->
        <section class="hero__area-3">
            <div class="container line"></div>
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>

            <div class="swiper mySwiper2 hero__slider-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hero__slide-3" style="background-image: url('slide.jpg');">
                        <div class="container g-0">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="hero__slide-left-3">
                                        <span class="hero__sub-title-3">Mcm <br>Concrete</span>
                                        <h1>We make your <br> dream</h1>
                                        <p>Buildy is here to build your apartment architecture of the country development.
                                        </p>
                                        <a class="wc-btn-secondary btn-hover" href="service.html"><span></span> Explore
                                            Service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide hero__slide-3" style="background-image: url('slide2.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="hero__slide-left-3">
                                        <span class="hero__sub-title-3">Mcm <br>Concrete</span>
                                        <h1>We make your <br> dream</h1>
                                        <p>Buildy is here to build your apartment architecture of the country development.
                                        </p>
                                        <a class="wc-btn-secondary btn-hover" href="service.html"><span></span> Explore
                                            Service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide hero__slide-3" style="background-image: url('slide3.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="hero__slide-left-3">
                                        <span class="hero__sub-title-3">Mcm <br>Concrete<< /span>
                                                <h1>We make your <br> dream</h1>
                                                <p>Buildy is here to build your apartment architecture of the country
                                                    development.</p>
                                                <a class="wc-btn-secondary btn-hover" href="service.html"><span></span>
                                                    Explore Service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__slider-pagination-3">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="swiper mySwiper hero__slider-3-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hero__slider-3-thumb">
                        <p><span>01</span> Commercial <br> Building</p>
                    </div>
                    <div class="swiper-slide hero__slider-3-thumb">
                        <p><span>02</span> Organization <br> Project</p>
                    </div>
                    <div class="swiper-slide hero__slider-3-thumb">
                        <p><span>03</span> Construction <br>Brigrade</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Area End -->


        <!-- About Us Area Start -->
        <section class="about__area-5">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section-breadcrumb">
                            <p> About</p>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="about__left">
                            <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s">MCM Concrete <br> Who we are
                            </h3>
                            <div class="about__counter">
                                <div class="about__content-5">
                                    <h4 class="about__number wow wcfadeUp" data-wow-delay="0.9s">36</h4>
                                    <h5 class="about__counter-title-4 wow wcfadeUp" data-wow-delay="1s">Years of <br>
                                        experience</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="about__right-5 zi-9 wow wcfadeUp" data-wow-delay="0.3">
                            <p class="wow wcfadeUp" data-wow-delay="0.45s"> CM Concrete is managed in partnership with
                                Engineer Joseph Zbeidy, who has 15 years experience in the ready mix concrete industry.

                                We are supplying ready mix concrete for MCM Group Lebanon that is undertaking various
                                construction projects in Beirut and North Lebanon (Las Salinas resort).

                                We are commited to establishing long term, valuable business relationships by providing its
                                customers with quality materials at competitve prices.

                            </p>

                            <img src="bb.png" alt="About Image" class="about__thumb">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End -->

        <!-- Project Area Start -->
        <section class="project__area-4">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section-breadcrumb">
                            <p> Projects</p>
                        </div>
                        <div class="section-title-wrapper">
                            <h2 class="wow wcfadeUp" data-wow-delay="0.3s">Our selected <br> project</h2>
                            <p class="wow wcfadeUp" data-wow-delay="0.4s">World class infrastructure solutions to customers
                                <strong>stakeholders across</strong> a broad industry start and end
                                of creativity is inspiration.
                            </p>
                            <a class="view-btn" href="{{ route('projects_path') }}"> View all project <span><i
                                        class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project__slider-inner">
                <div class="swiper project__slider-4">
                    <div class="cursor" id="project_cursor-4">drag</div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide project-slide-4">
                            <div class="project-slide-inner wow wcfadeUp" data-wow-delay="0.3s">
                                <a href="portfolio-details.html">
                                    <img src="p.jpg" alt="Project Image">
                                    <div class="project__info-4">
                                        <h3>Tabaris 103</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide project-slide-4">
                            <div class="project-slide-inner wow wcfadeUp" data-wow-delay="0.45s">
                                <a href="portfolio-details.html">
                                    <img src="p2.jpg" alt="Project Image">
                                    <div class="project__info-4">
                                        <h3>Tabaris 103</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide project-slide-4">
                            <div class="project-slide-inner wow wcfadeUp" data-wow-delay="0.6s">
                                <a href="portfolio-details.html">
                                    <img src="p3.jpg" alt="Project Image">
                                    <div class="project__info-4">
                                        <h3>Autocad Mastery</h3>
                                        <p>John, 02 / 03 / 2012</p>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </section>
        <!-- Project Area End -->


        <!-- About Area Start -->
        <section class="about__area-2 mt-5">

            <div class="container line">
                <span class="line-3"></span>
                <span class="line-4"></span>
                <span class="line-5"> </span>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="about__left-2">
                            <h2 class="section-sub-title-2 text-white wow wcfadeUp" data-wow-delay="0.15s">Our Fleets</h2>
                            <h3 class="section-title text-white wow wcfadeUp" data-wow-delay="0.3s">Buildy is an award
                                <br> winning
                                construction <br>company</h3>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="about__right-2">
                            <div class="about__experience wow wcfadeUp" data-wow-delay="0.45s">
                                <p>At MCM Concrete, both dispatch and quality
                                    assurance use the most state-of-the-art
                                    equipment and procedures to ensure
                                    on-time delivery of the highest quality concrete.</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->



        <!-- CTA section start -->
        <section class="cta__area-5">
            <div class="container line-wrap">
                <div class="line-col-4">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content-5">
                            <h2 class="cta__title-5 wow wcfadeUp" data-wow-delay="0.3s">Book Online<span>Now</span>
                            </h2>
                            <a href="{{ route('booking_path') }}" class="wc-btn-secondary btn-hover wow wcfadeUp"
                                data-wow-delay="0.6s"><span></span>
                                Know more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <img src="assets/imgs/home-5/shape-4.png" alt="Shape Image" class="shape">
                <img src="assets/imgs/home-5/shape-4.png" alt="Shape Image" class="shape-2">
            </div>
        </section>
        <!-- CTA section end -->

        <!-- Company Logo Area Start -->
        <section class="company__area-4">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="company__logos">
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.15s">
                                <img src="assets/imgs/company/1/1.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.3s">
                                <img src="assets/imgs/company/1/2.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.45s">
                                <img src="assets/imgs/company/1/3.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.6s">
                                <img src="assets/imgs/company/1/4.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.75s">
                                <img src="assets/imgs/company/1/5.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.3s">
                                <img src="assets/imgs/company/1/6.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.45s">
                                <img src="assets/imgs/company/1/7.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.6s">
                                <img src="assets/imgs/company/1/8.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.75s">
                                <img src="assets/imgs/company/1/9.png" alt="company Logo">
                            </div>
                            <div class="company__logo wow wcfadeUp" data-wow-delay="0.9s">
                                <img src="assets/imgs/company/1/10.png" alt="company Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company Logo Area End -->

        <!-- Gallry Area Start -->
        <section class="gallery__area">
            <div class="container line">
                <span class="line-3"></span>
                <span class="line-4"></span>
                <span class="line-5"> </span>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="gallery__top wow wcfadeUp" data-wow-delay="0.45s">
                            <p>We’re on Instagram now <a href="#">Follow Us</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Gallry Area End -->
        <div class="footer__area">
            <div class="footer__top-3">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <p>Have a project in your mind?</p>
                            <a class="footer__btn" href="{{ route('contact_path') }}">Let’s talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
