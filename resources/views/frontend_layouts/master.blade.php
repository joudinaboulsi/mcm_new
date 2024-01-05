<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="BUILDY HTML5 Template" />

  <title>Mcm - Concrete</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/icon/logo-3.png">

  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/master.css">
  <link rel="stylesheet" href="style.css">
</head>


<body>

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


@include('frontend_layouts.footer')
 


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