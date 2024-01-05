@extends('frontend_layouts.master')
@section('content')
    <!-- Breadcrumb Area Start -->
    @include('frontend_layouts.banner', [
        'title' => 'Project Detail',
        'subtitle' => 'MCM Concrete s.a.r.l',
    ])

    <!-- Breadcrumb Area End -->


    <!-- Service Area Start -->
    <section class="service__detail">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>

            <div class="row g-0">
                <div class="col-xxl-12">
                    <img src="assets/imgs/portfolio/details/1.jpg" alt="Portfolio Thumbnail"
                        class="service__detail-thumb wcfadeUp3">
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4">
                    <div class="service__sidebar">
                        <div class="widget__project-details wow wcfadeUp" data-wow-delay="0.15s">
                            <h2 class="widget__title">Project Details</h2>
                            <ul>
                                <li><span>Client</span> <strong>:</strong> Daniyel</li>
                                <li><span>Category</span> <strong>:</strong> Architecture</li>
                                <li><span>Start Date</span> <strong>:</strong> Jan 2019</li>
                                <li><span>Handover</span> <strong>:</strong> July 2021</li>
                            </ul>
                        </div>

                        <div class="widget__contact wow wcfadeUp" data-wow-delay="0.3s">
                            <p>Contact for inquery</p>
                            <h3>Want to know the
                                more details?</h3>
                            <a class="btn-hover" href="{{route('project_details_path')}}#"><span></span> Let’s talk</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 col-lg-9 col-md-8">
                    <div class="service__detail-content wow wcfadeUp" data-wow-delay="0.15s">
                        <h2 class="service__detail-title">Burayan Crystal</h2>
                        <p>When a visitor shows up on your website, the last thing you want is for them to be wary of moving
                            through it. You want your website to give off a welcoming and safe vibe; not one that makes
                            visitors
                            wonder what’s lurking around the corner.</p>
                        <p>While there are some tourists who venture to Centralia out of curiosity, they don’t stay long.
                            And why
                            would they? The town is unlivable and it’s devoid of any meaningful experiences. If I had
                            arrived hoping
                            to find a local video store to rent a movie from, I’d be confused by this pop-up</p>
                        <h3 class="service__detail-sub-title">Extra features added</h3>

                        <h3 class="service__detail-sub-title">Quality ensuance</h3>
                        <p>Mobile insurance packages made easy, forget about worrying for your mobile and live your life.
                            Incessant pop-ups and disruptions that won’t go away no matter how many times they’re dismissed,
                        </p>
                        <div class="thumb-col-2">
                            <img src="assets/imgs/portfolio/details/2.jpg" alt="Portfolio Thumbnail">
                            <img src="assets/imgs/portfolio/details/3.jpg" alt="Portfolio Thumbnail">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Other Projects -->
    <section class="case-study__area-2">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-4">
                    <div class="case-study__title-wrapper-2">
                        <h2 class="section-sub-title-2 wow wcfadeUp" data-wow-delay="0.15s">You may also like</h2>
                        <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s">Related Projects</h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-8">

                </div>
            </div>
        </div>

        <div class="tab-content position-relative" id="nav-tabContent">
            <span class="line-3"></span>
            <div class="cursor" id="portfolio_cursor2">drag</div>
            <div class="tab-pane fade show active" id="nav-cs2_tab_1" role="tabpanel">
                <div class="swiper case-study__slider-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.25s">
                            <a href="{{route('project_details_path')}}">
                                <img src="p.jpg" alt="case-study Image">
                                <div class="case-study__info-2">
                                    <h4>Crystal Neora</h4>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.4s">
                            <a href="{{route('project_details_path')}}">
                                <img src="p2.jpg" alt="case-study Image">
                                <div class="case-study__info-2">
                                    <h4>Crystal Neora</h4>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.55s">
                            <a href="{{route('project_details_path')}}">
                                <img src="p3.jpg" alt="case-study Image">
                                <div class="case-study__info-2">
                                    <h4>Crystal Neora</h4>

                                </div>
                            </a>
                        </div>
           
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Case Study Area End -->
@endsection
