@extends('frontend_layouts.master')
@section('content')
    <!-- Breadcrumb Area Start -->
    @include('frontend_layouts.banner', ['title' => 'Contact Us', 'subtitle' => 'MCM Concrete s.a.r.l'])

    <!-- Breadcrumb Area End -->


    <!-- Contact Area Start -->
    <section class="contact__area">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?origin=mfe&pb=!1m13!1m8!1m3!1d26496.906169447091!2d35.581498!3d33.886734!3m2!1i1024!2i768!4f13.1!2m1!1s33.886730,35.581718!5e0!6i14"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7">
                    <div class="contact__content">
                        <h2 class="contact__title">Get in touch</h2>
                        <p>Fill the below form (all the fields are mandatory)
                        </p>
                        <div class="contact__form wow wcfadeUp" data-wow-delay="0.75s">
                            <form action="{{route('contact_sent_path')}}"  method="POST" class="row">
                                @csrf
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="name">Name</label> -->
                                    <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="name">Name</label> -->
                                    <input type="text" id="first_name" name="first_name" placeholder="First Name">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="email">Email</label> -->
                                    <input type="email" id="email" name="email" placeholder="E-mail">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="phone">Phone (Optional)</label> -->
                                    <input type="tel" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                          
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 mb-3">
                                    <select name="sex" class="form-control">
                                        <option selected> Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="subject">Subject</label> -->
                                    <input type="text" id="subject" name="subject" placeholder="Your subject">
                                </div>
                                <div class="col-xxl-12">
                                    <!-- <label for="message">Message</label> -->
                                    <textarea name="message" id="message" placeholder="Type your message..."></textarea>
                                </div>
                                <div class="col-xxl-12">
                                    <button class="submit wc-btn-primary btn-hover" type="submit"><span></span> Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                       
                    </div>

                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="service__item wcfadeUp2">
                                <div class="service__item-inner">

                                    <h4 class="service__title-3">Contact Info</h4>

                                    <ul>
                                        <li> Address: <p style="padding-bottom: 10px;!important"> Naher El Mot. Roumieh
                                                Road Industrial Area - Beirut - Lebanon</p>
                                        </li>
                                        <li> Telephone: <a href="tel:+ +961 1 330 363"> <span class="service__rm-3">+961
                                                    1 330 363</span></a></li>
                                        <li> Mobile: <a href="tel:"><span class="service__rm-3">+961 70 083 700
                                                </span></a></li>
                                        <li> Fax: <a href="tel:+"><span class="service__rm-3">+961 1 330
                                                    363</span></a></li>
                                        <li> Email: <a href="mailto:info@mcm-concrete.com"><span
                                                    class="service__rm-3">info@mcm-concrete.com</span></a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Contact Area End -->
@endsection
