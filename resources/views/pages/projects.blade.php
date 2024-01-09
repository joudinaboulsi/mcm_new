@extends('frontend_layouts.master')
@section('content')
    <!-- Breadcreumb Area Start -->
    @include('frontend_layouts.banner', [
        'title' => 'Projects',
        'subtitle' => 'MCM Concrete s.a.r.l'
    ])

    <!-- Breadcreumb Area End -->

   <!-- Hero Modal One -->
   <div class="modal fade" id="hero_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog__hero">
      <div class="modal-content modal-content__hero">
        <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><i
            class="fa-solid fa-xmark"></i></button>
            <img src="products/2.jpg" style="width:322px; height:540px" alt="case-study Image">
      </div>
    </div>
  </div>
    <!-- Case Study Area Start -->
    <section class="case-study__area-4">
        <div class="container line">
          <span class="line-3"></span>
          <span class="line-4"></span>
          <span class="line-5"> </span>
          <div class="cursor" id="portfolio_cursor2">drag</div>
  
          <div class="case-study__title-wrapper-3">
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-5">
                <h2 class="section-sub-title-2 wcfadeUp3">Projects</h2>
                <h3 class="section-title wcfadeUp3">Our Projects</h3>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7">
                <div class="case-study__text wcfadeUp4">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="swiper case-study__slider-2">
          <div class="swiper-wrapper">
            <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.25s">
              <a href="#"  data-bs-toggle="modal" data-bs-target="#hero_modal">
                <img src="products/p.jpg" alt="case-study Image">
                <div class="case-study__info-2">
                  <h4>Tabaris 103</h4>
                  
                </div>
              </a>
            </div>
            <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.4s">
               <a href="#"  data-bs-toggle="modal" data-bs-target="#hero_modal">
                <img src="products/p2.jpg" alt="case-study Image">
                <div class="case-study__info-2">
                  <h4>Crystal Neora</h4>
                  
                </div>
              </a>
            </div>
            <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.55s">
               <a href="#"  data-bs-toggle="modal" data-bs-target="#hero_modal">
                <img src="products/p3.jpg" alt="case-study Image">
                <div class="case-study__info-2">
                  <h4>Crystal Neora</h4>
               
                </div>
              </a>
            </div>
            <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.7s">
               <a href="#"  data-bs-toggle="modal" data-bs-target="#hero_modal">
                <img src="products/p4.jpg" alt="case-study Image">
                <div class="case-study__info-2">
                  <h4>Crystal Neora</h4>
           
                </div>
              </a>
            </div>
            <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.9s">
               <a href="#"  data-bs-toggle="modal" data-bs-target="#hero_modal">
                <img src="products/p5.jpg" alt="case-study Image">
                <div class="case-study__info-2">
                  <h4>Crystal Neora</h4>
           
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="container line remove-pb">
          <span class="line-3"></span>
          <span class="line-4"></span>
          <span class="line-5"> </span>
        </div>
      </section>
      <!-- Case Study Area End -->
@endsection
