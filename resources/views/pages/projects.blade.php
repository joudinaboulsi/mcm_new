@extends('frontend_layouts.master')
@section('content')
    <!-- Breadcreumb Area Start -->
    @include('frontend_layouts.banner', [
        'title' => 'Projects',
        'subtitle' => 'Your Heavy Equipment Parts Experts',
    ])

    <!-- Breadcreumb Area End -->


    <!-- Case Study Area Start -->
    <section class="case-study__area-4">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="cursor" id="portfolio_cursor3">drag</div>

            <div class="case-study__title-wrapper-3">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-5">
                        <h2 class="section-sub-title-2 wcfadeUp3">Projects</h2>
                        <h3 class="section-title wcfadeUp3">Recent <br> Projects</h3>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7">
                        <div class="case-study__text wcfadeUp4">
                            <p>Projects case study environmental <strong>stewardship has impacted</strong> economical
                                viability into
                                the
                                creation of places with distinct <strong>beauty and identity</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper case-study__slider-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide case-study__slide-3 wow wcfadeUp" data-wow-delay="0.15s">
                    <div class="cs-slide3-inner">
                        <a href="{{ route('project_details_path') }}">
                            <img src="1.jpg" alt="Case Study Image">
                            <div class="case-study__info-3">
                                <h4>Crystal Neora</h4>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide case-study__slide-3 wow wcfadeUp" data-wow-delay="0.3s">
                    <div class="cs-slide3-inner">
                        <a href="{{ route('project_details_path') }}">
                            <img src="2.jpg" alt="Case Study Image">
                            <div class="case-study__info-3">
                                <h4>Crystal Neora</h4>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide case-study__slide-3 wow wcfadeUp" data-wow-delay="0.45s">
                    <div class="cs-slide3-inner">
                        <a href="{{ route('project_details_path') }}">
                            <img src="3.jpg" alt="Case Study Image">
                            <div class="case-study__info-3">
                                <h4>Crystal Neora</h4>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide case-study__slide-3 wow wcfadeUp" data-wow-delay="0.6s">
                    <div class="cs-slide3-inner">
                        <a href="{{ route('project_details_path') }}">
                            <img src="1.jpg" alt="Case Study Image">
                            <div class="case-study__info-3">
                                <h4>Crystal Neora</h4>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide case-study__slide-3 wow wcfadeUp" data-wow-delay="0.75s">
                    <div class="cs-slide3-inner">
                        <a href="{{ route('project_details_path') }}">
                            <img src="2.jpg" alt="Case Study Image">
                            <div class="case-study__info-3">
                                <h4>Crystal Neora</h4>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide case-study__slide-3 wow wcfadeUp" data-wow-delay="0.3s">
                    <div class="cs-slide3-inner">
                        <a href="{{ route('project_details_path') }}">
                            <img src="3.jpg" alt="Case Study Image">
                            <div class="case-study__info-3">
                                <h4>Crystal Neora</h4>

                            </div>
                        </a>
                    </div>
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
