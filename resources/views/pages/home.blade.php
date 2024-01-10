@extends('frontend_layouts.master')
@section('content')
   
    <!-- Hero Area Start -->
    <section class="hero__area">
        <div class="swiper hero__slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide hero__slide" style="background-image: url('assets/imgs/slider/hero/1.jpg');">
              <div class="container">
                <div class="row">
                  <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-10">
                    <div class="hero__slide-left">
                      <h1>MCM  <span>CONCRETE</span></h1>
                      <p>covers Mount Lebanon and Beirut
                        areas.</p>
                      <a class="wc-btn-primary btn-hover" href="{{route('fleets_path')}}"><span></span> Explore More</a>
                    </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-2">
                   
                  </div>
                </div>
              </div>
            </div>
  
            <div class="swiper-slide hero__slide" style="background-image: url('assets/imgs/slider/hero/2.jpg');">
              <div class="container">
                <div class="row">
                  <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-10">
                    <div class="hero__slide-left">
                      <h1>MCM  <span>CONCRETE</span></h1>
                      <p>provides its customers with the best quality
                        materials</p>
                      <a class="wc-btn-primary btn-hover" href="{{route('projects_path')}}"><span></span> Explore Projects</a>
                    </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-2">
                   \
                  </div>
                </div>
              </div>
            </div>
  
            <div class="swiper-slide hero__slide" style="background-image:url('assets/imgs/slider/hero/3.jpg');">
              <div class="container">
                <div class="row">
                  <div class="ol-xxl-7 col-xl-7 col-lg-7 col-md-10">
                    <div class="hero__slide-left">
                      <h1>MCM  <span>CONCRETE</span></h1>
                      <p> strives to keep its prices at a competitive
                        rate</p>
                      <a class="wc-btn-primary btn-hover" href="{{route('about_path')}}"><span></span> Explore About Us </a>
                    </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-2">

                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="hero__slider-pagination">
            <div class="swiper-button-next"><span><img src="assets/imgs/icon/long-arrow-left.png" alt=""></span> Next
            </div>
            <div class="swiper-button-prev">Prev <span><img src="assets/imgs/icon/long-arrow-right.png" alt=""></span>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- Hero Area End -->
  

  
  
      <!-- About Us Area Start -->
      <section class="about__area">
        <div class="container line">
          <span class="line-3"></span>
          <span class="line-4"></span>
          <span class="line-5"> </span>
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
              <div class="about__left zi-9 wow wcfadeUp" data-wow-delay="0.3">
                <img src="assets/imgs/about/1/1.png" alt="About Image" class="about__thumb">
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
              <div class="about__right">
                <h2 class="section-sub-title wow wcfadeUp" data-wow-delay="0.15s">About Company</h2>
                <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s">MCM Concrete s.a.r.l
                  </h3>
                <p class="wow wcfadeUp" data-wow-delay="0.45s">
                  We are supplying ready mix concrete for MCM Group Lebanon that is undertaking various construction projects in Beirut and North Lebanon (Las Salinas resort).

                  We are commited to establishing long term, valuable business relationships by providing its customers with quality materials at competitve prices.
                  
                  </p>
                <a href="{{route('about_path')}}" class="wc-btn-secondary btn-hover wow wcfadeUp" data-wow-delay="0.6s"><span></span>
                  Explore Us</a>
  
                {{-- <div class="about__counter">
                  <div class="about__content">
                    <h4 class="about__number wow wcfadeUp" data-wow-delay="0.75s">2k+</h4>
                    <h5 class="about__counter-title wow wcfadeUp" data-wow-delay="0.85s">Projects completed</h5>
                  </div>
                  <div class="about__content">
                    <h4 class="about__number wow wcfadeUp" data-wow-delay="0.9s">36</h4>
                    <h5 class="about__counter-title wow wcfadeUp" data-wow-delay="1s">Years of experience</h5>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About Us Area End -->
  
      <!-- Service Area Start -->
      <section class="service__area">
        <div class="container line">
          <span class="line-3"></span>
          <span class="line-4"></span>
          <span class="line-5"> </span>
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
              <div class="service__title">
                <h2 class="section-sub-title wow wcfadeUp" data-wow-delay="0.15s">About Projects</h2>
                <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s">Projects  <br>we have done</h3>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
              <div class="blog__btn wow wcfadeUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: wcfadeUp;">
                <a href="{{route('projects_path')}}">Browse All <i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
  
          <div class="service__slider-wrapper">
            <div class="swiper service__slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide service__slide wow wcfadeUp" data-wow-delay="0.6s">
                  <a href="{{route('projects_path')}}">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="p.jpg" alt="Service Image">
                    </div>
                    <div class="service__slide-title">
                     
                      <h4>Tabaris 103</h4>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide service__slide wow wcfadeUp" data-wow-delay="0.75s">
                  <a href="{{route('projects_path')}}">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="p2.jpg" alt="Service Image">
                    </div>
                    <div class="service__slide-title">
                   
                      <h4>Tabaris 103</h4>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide service__slide wow wcfadeUp" data-wow-delay="0.9s">
                  <a href="{{route('projects_path')}}">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="p3.jpg" alt="Service Image">
                    </div>
                    <div class="service__slide-title">
                      
                      <h4>Achrafieh 361</h4>
                    </div>
                  </a>
                </div>
               
              </div>
            </div>
{{--   
            <div class="service__btn-next"><span><i class="fa-solid fa-arrow-left"></i></span></div>
            <div class="service__btn-prev"><span><i class="fa-solid fa-arrow-right"></i></span></div> --}}
          </div>
  
        </div>
      </section>
      <!-- Service Area End -->
  
  
    <!-- About Area Start -->
    <section class="about__area-2">
    

      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="about__left-2">
              <h2 class="section-sub-title-2 text-white wow wcfadeUp" data-wow-delay="0.15s">Our Fleets</h2>
              <h3 class="section-title text-white wow wcfadeUp" data-wow-delay="0.3s">At MCM Concrete,</h3>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="about__right-2">
              <div class="about__experience wow wcfadeUp" data-wow-delay="0.45s">
                <p> both dispatch and quality
                  assurance use the most state-of-the-art
                  equipment and procedures to ensure
                  on-time delivery of the highest quality concrete.
                  
  
                  
                  </p>
                
               
              </div>
              <a href="{{route('fleets_path')}}" class="wc-btn-secondary btn-hover wow wcfadeUp" data-wow-delay="0.6s"><span></span>
                Know more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Area End -->
  
  
      <!-- Testimonial Area Start -->
      <section class="testimonial__area">
        <div class="container g-0">
          <div class="row g-0">
            <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-9">
              <div class="testimonial__slider-wrapper wow wcfadeUp" data-wow-delay="0.15s">
                <div class="swiper testimonial__slider">
                  <div class="swiper-wrapper">
                    <div class="testimonial__slide">
                      <h2 class="section-title text-white wow wcfadeUp" data-wow-delay="0.3s">Join Our Team</span></h2>
                      <a href="{{route('career_path')}}" class="wc-btn-secondary btn-hover wow wcfadeUp" data-wow-delay="0.6s"><span></span>
                        Know more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                   
                  </div>
                </div>
  
                {{-- <div class="testimonial__btn wow wcfadeUp" data-wow-delay="0.3s">
                  <div class="swiper-btn-prev arrow-btn"><i class="fas fa-long-arrow-right"></i></div>
                  <div class="swiper-btn-next arrow-btn"><i class="fas fa-long-arrow-left"></i></div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonial Area End -->
  

  
  
  

    <!-- E-booking section start -->
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
              <h2 class="cta__title-5 wow wcfadeUp" data-wow-delay="0.3s">Book  <span>Now</span>
              </h2>
              <a href="{{route('booking_path')}}" class="wc-btn-secondary btn-hover wow wcfadeUp" data-wow-delay="0.6s"><span></span>
                Know more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <img src="assets/imgs/home-5/shape-4.png" alt="Shape Image" class="shape">
        <img src="assets/imgs/home-5/shape-4.png" alt="Shape Image" class="shape-2">
      </div>
    </section>
    <!-- E-booking section end -->

      <!-- Blog Area End -->
      <div class="footer__area">
        <div class="footer__top-3">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <p>Get in Touch</p>
                <a class="footer__btn" href="{{route('contact_path')}}">Let’s talk</a>
              </div>
            </div>
          </div>
        </div>
@endsection