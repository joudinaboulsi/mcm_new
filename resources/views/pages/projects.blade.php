@extends('frontend_layouts.master')
@section('content')
    <!-- Breadcreumb Area Start -->
    @include('frontend_layouts.banner', [
        'title' => 'Projects',
        'subtitle' => 'MCM Concrete s.a.r.l',
    ])

    <!-- Breadcreumb Area End -->

    <!-- Hero Modal One -->
    <div class="modal fade" id="hero_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog__hero">
            <div class="modal-content modal-content__hero">
                <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
                <img src="products/1.jpg" style="width:322px; height:540px" alt="case-study Image">
            </div>
        </div>
    </div>
    <section class="service__area">
        <div class="container line">
          <span class="line-3"></span>
          <span class="line-4"></span>
          <span class="line-5"> </span>
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div class="service__slide-4 wcfadeUp2">
                 <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                  <div class="service__thumb-wrapper">
                    <img class="service__thumb" src="products/p.jpg" alt="Service Image">
                  </div>
                  <div class="service__slide-title rounded">
                   
                    <h4>Tabaris 130</h4>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div class="service__slide-4 wcfadeUp3">
                 <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                  <div class="service__thumb-wrapper">
                    <img class="service__thumb" src="products/p2.jpg" alt="Service Image">
                  </div>
                  <div class="service__slide-title rounded">
                    <h4>Tabaris 130</h4>

                  </div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div class="service__slide-4 wcfadeUp4">
                 <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                  <div class="service__thumb-wrapper">
                    <img class="service__thumb" src="products/p3.jpg" alt="Service Image">
                  </div>
                  <div class="service__slide-title rounded">
                    <h4>Tabaris 130</h4>

                  </div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.15s">
                 <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                  <div class="service__thumb-wrapper">
                    <img class="service__thumb" src="products/p4.jpg" alt="Service Image">
                  </div>
                  <div class="service__slide-title rounded">
                    <h4>Achrafieh 361</h4>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.3s">
                 <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                  <div class="service__thumb-wrapper">
                    <img class="service__thumb" src="products/p5.jpg" alt="Service Image">
                  </div>
                  <div class="service__slide-title rounded">
                    <h4>Achrafieh 361</h4>

                  </div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
              <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                 <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                  <div class="service__thumb-wrapper">
                    <img class="service__thumb" src="products/p6.jpg" alt="Service Image">

                  </div>
                  <div class="service__slide-title rounded">
                    <h4>Achrafieh 448</h4>

                  </div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p7.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>Achrafieh 449</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p8.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>1162- Achrafieh</h4>

                    </div>
                  </a>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p9.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>1162- Achrafieh</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p10.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                                          <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p11.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>1162- Achrafieh</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p12.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p13.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p14.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                        <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p15.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                   <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p16.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                                          <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>


              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p17.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                                          <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p18.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                                          <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p19.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                                          <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>


              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p20.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p21.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                        <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>



              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p22.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>


              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p23.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>


              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p24.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>


              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p25.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                      <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="service__slide-4 wow wcfadeUp" data-wow-delay="0.45s">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#hero_modal">
                    <div class="service__thumb-wrapper">
                      <img class="service__thumb" src="products/p26.jpg" alt="Service Image">
  
                    </div>
                    <div class="service__slide-title rounded">
                        <h4>Sassine Plaza 1769</h4>

                    </div>
                  </a>
                </div>
              </div>
          </div>
  
          <div class="row">
            <div class="col-xxl-12">
              <div class="service__btm-4 wow wcfadeUp" data-wow-delay="0.6s">
                <p>Get in touch <a href="{{route('contact_path')}}">Contact us <i
                      class="fa-solid fa-arrow-left"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
