<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {!! SEO::generate() !!}
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="{{URL::asset('assets/css/master.css')}}">
  <link rel="stylesheet" href="style.css">
 
 

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
</head>


<body>
  @if(Session::has('msg'))

  <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog__hero">
      <div class="modal-content modal-content__hero" style="height: 100px!important">
        <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><i
            class="fa-solid fa-xmark"></i></button>
            <div class="row p-4" style="width:500px;">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 mb-3">
                <p class="wow wcfadeUp" data-wow-delay="0.15s">{{ session('msg') }}</p>
              </div>
          </div>
      </div>
    </div>
  </div>
  @endif
  <!-- Loading... Start -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>
  <!-- Loading... End -->


   @include('frontend_layouts.header')


   
  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>



  <main>

   @yield('content')


  </main>


   <!-- f00ter --> 
   @include('frontend_layouts.footer')
   <script>
    $("#contact-form").validate();
    $("#career-form").validate();
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>

  <!-- All JS files -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/typed.js"></script>
  <script src="assets/js/vanilla-tilt.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/progressbar.js"></script>
  <script src="assets/js/TweenMax.min.js"></script>
  <script src="assets/js/ScrollMagic.min.js"></script>
  <script src="assets/js/animation.gsap.min.js"></script>
  <script src="assets/js/debug.addIndicators.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/scripts.js"></script>


</body>

</html>