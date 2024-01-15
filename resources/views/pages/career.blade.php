@extends('frontend_layouts.master')
@section('content')
    <!-- Breadcrumb Area Start -->
    @include('frontend_layouts.banner', ['title' => 'Careers', 'subtitle' => 'MCM Concrete s.a.r.l'])

    <!-- Breadcrumb Area End -->


    <!-- Contact Area Start -->
    <section class="contact__area">
        <div class="container line">
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"> </span>
            <div class="row">

                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7">
                    <div class="contact__content">
                        <h2 class="contact__title">Join our team</h2>
                        <p>If you wish to be considered for a position in MCM concrete please
                            complete the application form below. We look forward to hearing from you!

                        </p>

                        <div class="contact__form wow wcfadeUp" data-wow-delay="0.75s">

                            <form action="{{route('career_sent_path')}}" method="POST" id="career-form" class="row">
                                @csrf

                                <div  style="display:none">

                                    <ul></ul>
                            
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="name">Name</label> -->
                                    <input type="text" name="name"  id="name" placeholder="Your name" required>
                                  
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="email">Email</label> -->
                                    <input type="email" name="email" id="email" placeholder="Your email" required>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <!-- <label for="phone">Phone (Optional)</label> -->
                                    <input type="text" name="phone" id="phone" placeholder="Your phone" required>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 mb-3">
                                    <select name="gender" class="form-control" required>
                                        <option> Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>


                                <div class="col-xxl-12">
                                    <!-- <label for="message">Message</label> -->
                                    <textarea  name="message" id="message" placeholder="Type your message..." required></textarea>
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
