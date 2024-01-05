@extends('frontend_layouts.master')
@section('content')
   <!-- Breadcrumb Area Start -->
   @include('frontend_layouts.banner', ['title' => 'Our Fleets', 'subtitle' => 'MCM Concrete s.a.r.l'])

   <!-- Breadcrumb Area End -->


    <!-- Service Area Start -->
    <section class="service__detail">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>

            <div class="row g-0">
                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4">
                    <div class="service__sidebar">
                        <div class="widget__service wcfadeUp3">
                            <h2 class="widget__title">more Projects</h2>
                            <ul>
                                <li><a href="service-details.html">Architectural Design</a></li>
                                <li><a href="service-details.html">Contruction</a></li>
                                <li><a href="service-details.html">Interior Design</a></li>
                                <li><a href="service-details.html">Engineering</a></li>
                                <li><a href="service-details.html">Power Managemnet</a></li>
                                <li><a href="service-details.html">Power Managemnet</a></li>
                            </ul>
                        </div>

                        <div class="widget__contact wow wcfadeUp" data-wow-delay="0.15s">
                            <p>Contact for inquery</p>
                            <h3>Want to know the
                                more details?</h3>
                            <a class="btn-hover" href="{{ route('contact_path') }}"><span></span> Let’s talk</a>
                        </div>

                        <div class="widget__download wow wcfadeUp" data-wow-delay="0.3s">
                            <h2 class="widget__title">download</h2>
                            <ul>
                                <li><a href="service-details.html#">Brochure <span><i
                                                class="flaticon-download"></i></span></a></li>
                                <li><a href="service-details.html#">Document <span><i
                                                class="flaticon-download"></i></span></a></li>
                                <li><a href="service-details.html#">Flyer <span><i class="flaticon-download"></i></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 col-lg-9 col-md-8">
                    <div class="service__detail-content wcfadeUp4">
                        <img src="f.jpg" alt="Service Thumbnail" class="service__detail-thumb">
                        <h2 class="service__detail-title">Our Fleets</h2>

                        <ul class="feature__list">
                            <li> 2 Batching plants (240 cu.m/hr)</li>
                            <li>2 Generators (600 KVA each)</li>
                            <li>140-Ton Scale</li>
                            <li> 2 Loaders</li>
                            <li>4 Pumps (36, 42 and 52m long)</li>
                            <li>15 Trucks mixers (10 & 12 cu.m)</li>
                            <li>4 Cement Silos (600 Tons)</li>
                            <li>A fully equipped laboratory</li>
                        </ul>

                        <div class="thumb-col-2">
                            <img src="f2.jpg" alt="Service Thumbnail">
                            <img src="f3.jpg" alt="Service Thumbnail">
                        </div>

                        <p>
                            At MCM Concrete, both dispatch and quality
                            assurance use the most state-of-the-art
                            equipment and procedures to ensure
                            on-time delivery of the highest quality concrete
                        </p>

                    </div>

                    <div class="row mt-5">
                        <div class="col-xxl-12">
                            <div class="swiper testimonial__slider-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide testimonial__slide-2">
                                        <img src="b1.jpg" alt="feature Image">
                                    </div>
                                    <div class="swiper-slide testimonial__slide-2">
                                        <img src="b2.jpg" alt="feature Image">

                                    </div>
                                    <div class="swiper-slide testimonial__slide-2">
                                        <img src="b3.jpg" alt="feature Image">
                                    </div>
                                </div>

                                <div class="testimonial__btn-2">
                                    <div class="swiper-btn-prev wow wcfadeUp" data-wow-delay="0.3s"><img
                                            src="assets/imgs/icon/long-arrow-l-black.png" alt="Prev Icon"></div>
                                    <div class="swiper-btn-next wow wcfadeUp" data-wow-delay="0.3s"><img
                                            src="assets/imgs/icon/long-arrow-r-black.png" alt="Next Icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->
@endsection
