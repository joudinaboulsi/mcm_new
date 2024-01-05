@extends('frontend_layouts.master')
@section('content')
    <!-- Breadcrumb Area Start -->
    @include('frontend_layouts.banner', ['title' => 'E-booking', 'subtitle' => 'MCM Concrete s.a.r.l'])

    <!-- Breadcrumb Area End -->


    <!-- Contact Area Start -->
    <section class="contact__area">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row">

                <div class="col-xxl-8 col-xl-8 col-lg-10 col-md-7">
                    <div class="contact__content">
                        <h2 class="contact__title">Online E-booking</h2>
                        <p>You may place an order by filling out the form below
                        </p>
                        <div class="contact__form wow wcfadeUp" data-wow-delay="0.75s">
                            <form action="#" class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="name">Name</label> -->
                                    <input type="text" id="name" placeholder="Your name">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="email">Email</label> -->
                                    <input type="email" id="email" placeholder="Your email">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="phone">Phone (Optional)</label> -->
                                    <input type="tel" id="phone" placeholder="Your phone">
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="phone">Phone (Optional)</label> -->
                                    <input type="tel" id="phone" placeholder="Ordered By">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="phone">Phone (Optional)</label> -->
                                    <input type="tel" id="phone" placeholder="Address">
                                </div>


                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="subject">Subject</label> -->
                                    <input type="number" id="subject" placeholder="Quantity in meter cubed (m3)">
                                </div>

                                <div class="col-xxl-12 mb-3">
                                    <select class="form-control">
                                        <option selected> Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Gender</option>

                                    </select>
                                </div>


                                <div class="col-xxl-12">
                                    <!-- <label for="message">Message</label> -->
                                    <textarea name="Message" id="message" placeholder="Type your message..."></textarea>
                                </div>
                                <div class="col-xxl-12">
                                    <button class="submit wc-btn-primary btn-hover" type="submit"><span></span> Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
@endsection
