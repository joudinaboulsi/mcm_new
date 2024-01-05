@extends('frontend_layouts.master')

@section('content')
    <!-- Breadcrumb Area Start -->
    @include('frontend_layouts.banner', ['title' => 'Who we are', 'subtitle' => 'MCM Concrete s.a.r.l'])

    <!-- Breadcrumb Area End -->


    <!-- About Area Start -->
    <section class="about__area-4">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="about__right-4">
                        <h2 class="section-sub-title">About Company</h2>
                        <h3 class="section-title">World’s largest and
                            trusted architecture
                            company</h3>
                        <p class="about__right-4-text wow wcfadeUp" data-wow-delay="0.45s">MCM Concrete s.a.r.l is located
                            in Naher el Mot,
                            supplying Ready Mix Concrete covering Mount
                            Lebanon & Beirut areas.</p>

                        <p class="about__right-4-text wow wcfadeUp">
                            MCM Concrete is managed in partnership with Engineer Joseph Zbeidy, who has 15 years experience
                            in the ready mix concrete industry.
                            <br>
                            We are supplying ready mix concrete for MCM Group Lebanon that is undertaking various
                            construction projects in Beirut and North Lebanon (Las Salinas resort).
                            <br>
                            We are commited to establishing long term, valuable business relationships by providing its
                            customers with quality materials at competitve prices.
                        </p>

                        <div class="about__counter-3">
                            <div class="about__content-3">
                                <h4 class="about__number about__number-3 wow wcfadeUp" data-wow-delay="0.75s">36+</h4>
                                <h5 class="about__counter-title-3">Years <br>experience</h5>
                            </div>
                            <div class="about__content-3 wow wcfadeUp" data-wow-delay="0.9s">
                                <button data-bs-toggle="modal" data-bs-target="#about_modal"><i
                                        class="fa-solid fa-play"></i></button>
                                <p>Watch Video</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="about__left-4 zi-9">
                        <div class="about__left-4-img">
                            <img class="about__img4-1" src="about.png" alt="About Image">
                            <img class="about__img4-2" src="about2.png" alt="About Image">
                        </div>
                        <div class="about__left-4-img-2">
                            <img class="about__img4-3" src="about3.png" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Video Modal -->
    <div class="modal fade" id="about_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog__hero">
            <div class="modal-content modal-content__hero">
                <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
                <iframe src="https://www.youtube.com/embed/0g1Q4fBDp2U" title="Modal Video" allow="accelerometer; autoplay;"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Feature Area Start -->
    <section class="feature__area">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="feature__left wow wcfadeUp" data-wow-delay="0.3s">
                        <img class="feature__img-1" src="bb1.png" alt="feature Image">
                        <img class="feature__img-2" src="pic_abt_us_4.png" alt="feature Image">
                        <img class="feature__img-3" src="pic_abt_us_4.png" alt="feature Image">

                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="feature__right">
                        <div class="feature__title-wrapper-2">
                            <h2 class="section-sub-title-2 wow wcfadeUp" data-wow-delay="0.15s">QUALITY ASSURANCE</h2>
                            <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s"> At MCM concrete,</h3>
                        </div>

                        <div class="feature__tab-wrapper">
                            <p class="about__right-4-text wow wcfadeUp" data-wow-delay="0.45s">
                                We understand that our product, concrete is one of the most unique
                                and versatile building materials in the world.
                                <br> <br>
                                It can assume virtually any shape and reach great strengths.
                                Mixing, transportation, placing and curing can influence its plastic and hardened propreties
                            </p>

                            <p class="about__right-4-text wow wcfadeUp" data-wow-delay="0.45s">
                                This is why MCM Concrete palces great emphasis on quality.

                                Concrete is perishable in its plastic
                                state and very "sensitive"
                                from the time the raw materials are
                                combined until the final
                                product is delivered
                                <br>
                                ready-mix-concrete-lebanon-mcm-concrete-loader
                                MCM Concrete is leading the way to
                                higher quality practices with the implementation of a
                                Quality Management System based on the guidelines and
                                principles of ACI 121
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->

    <!-- About Area Start -->
    <section class="about__area-3">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row g-0">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="feature__left wow wcfadeUp" data-wow-delay="0.3s">
                        <img class="feature__img-1" src="bb1.png" alt="feature Image">
                        <img class="feature__img-2" src="pic_abt_us_4.png" alt="feature Image">
                        <img class="feature__img-3" src="pic_abt_us_4.png" alt="feature Image">

                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="about__right-3">
                        <h2 class="section-sub-title-2 wow wcfadeUp" data-wow-delay="0.15s">ENVIRONMENTAL STATEMENT</h2>
                        <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s"> MCM Concrete is commited to</h3>
                        <p class="wow wcfadeUp" data-wow-delay="0.45s">

                            operate in an environmentally
                            and socially responsible manner.
                            A sustainable, environment-friendly
                            operation will reward the
                            and customers and will bring
                            about positive changes
                            in our entire industry.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Team Area Start -->
    <section class="team__area-4">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="team__title-wrapper">
                        <h2 class="section-sub-title wow wcfadeUp" data-wow-delay="0.3s">about team</h2>
                        <h3 class="section-title wow wcfadeUp" data-wow-delay="0.45s">Meet the expert</h3>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="team__member wow wcfadeUp" data-wow-delay="0.15s">
                        <div class="team__img">
                            <a href="team-details.html"><img src="assets/imgs/team/1/member-1.jpg" alt="Team Member"
                                    class="br-left"></a>
                            <ul class="team__social">
                                <li><a href="about.html#"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="team__info">
                            <a href="team-details.html">David John</a>
                            <p>Project Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="team__member wow wcfadeUp" data-wow-delay="0.3s">
                        <div class="team__img">
                            <a href="team-details.html"><img src="assets/imgs/team/1/member-2.jpg" alt="Team Member"></a>
                            <ul class="team__social">
                                <li><a href="about.html#"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="team__info">
                            <a href="team-details.html">July Monalisa</a>
                            <p>Architect</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="team__member wow wcfadeUp" data-wow-delay="0.45s">
                        <div class="team__img">
                            <a href="team-details.html"><img src="assets/imgs/team/1/member-3.jpg" alt="Team Member"></a>
                            <ul class="team__social">
                                <li><a href="about.html#"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="team__info">
                            <a href="team-details.html">Mark Harry</a>
                            <p>Interior Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="team__member wow wcfadeUp" data-wow-delay="0.6s">
                        <div class="team__img">
                            <a href="team-details.html"><img src="assets/imgs/team/1/member-4.jpg" alt="Team Member"
                                    class="br-right"></a>
                            <ul class="team__social">
                                <li><a href="about.html#"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                                <li><a href="about.html#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="team__info">
                            <a href="team-details.html">Daniyel Bryan</a>
                            <p>Interior Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Area End -->
@endsection
