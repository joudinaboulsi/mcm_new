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
                        <div class="feature__title-wrapper-2">
                            <h2 class="section-sub-title-2 wow wcfadeUp" data-wow-delay="0.15s">Company Profile</h2>
                            <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s"> MCM Concrete s.a.r.l is located
                                in Naher el Mot,</h3>
                        </div>
                      
                        <p class="about__right-4-text wow wcfadeUp" data-wow-delay="0.45s">
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

                     
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="about__left-4 zi-9">
                        <div class="about__left-4-img">
                          <img class="about__img4-1" src="assets/imgs/about/4/1.jpg" alt="About Image">
                          <img class="about__img4-2" src="assets/imgs/about/4/3.jpg" alt="About Image">
                        </div>
                        <div class="about__left-4-img-2">
                          <img class="about__img4-3" src="assets/imgs/about/4/2.jpg" alt="About Image">
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
                      <img class="feature__img-1" src="assets/imgs/feature/2/1.jpg" alt="feature Image">
                      <img class="feature__img-2" src="assets/imgs/feature/2/2.jpg" alt="feature Image">
                      <img class="feature__img-3" src="assets/imgs/feature/2/3.jpg" alt="feature Image">
                    
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
    <section class="about__area-3 feature__area">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row g-0">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="feature__left wow wcfadeUp" data-wow-delay="0.3s">
                        <img class="feature__img-3" src="assets/imgs/feature/2/3.jpg" alt="feature Image">
                    
                    </div>

                    <div class="feature__left wow wcfadeUp mt-4" data-wow-delay="0.3s">
                        <img class="feature__img-3" src="assets/imgs/feature/2/3.jpg" alt="feature Image">
                    
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

   
@endsection
