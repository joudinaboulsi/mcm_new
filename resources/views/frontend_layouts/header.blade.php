
  <!-- header area start -->
  <header>
    <div class="header__area">
  
      <div class="header__info">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-6">
              <div class="header__info-left">
                <ul class="header__address">
                  <li><span><i class="fa-solid fa-location-dot"></i></span> Naher El Mot. Roumieh Road - Beirut - Lebanon</li>
                  <li><a href="mailto:info@mcm-concrete.com"><span><i class="fa-solid fa-envelope"></i></span>
                      info@mcm-concrete.com</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-6">
              <div class="header__info-right">
                <ul class="header__links">
                  <li class="{{ request()->routeIs('career_path') ? 'active' : ''}}"><a href="{{route('career_path')}}">Careers</a></li>
                  <li><a href="MCM_brochure.pdf">Brochure <span><i class="flaticon-download"></i></span></a></li>
                </ul>
                <ul class="header__social">
                  <li><a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                  <li><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                  <li><a href="#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                  <li><a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="header__menu-area" id="header_menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xxxl-3 col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-5">
              <div class="header__logo">
                <a href="{{route('home_path')}}">
                  <img class="logo-1" src="logo.png" alt="Header Logo">
                  <img class="logo-2" src="logo2.png" alt="Header Logo">
                </a>
              </div>
            </div>
            <div class="col-xxxl-7 col-xxl-6 col-xl-6 col-lg-3 col-md-3 col-2">
              <nav class="header__nav b-right">
                <ul>
                  <li class="menu-li {{ request()->routeIs('home_path') ? 'active' : ''}}"><a href="{{route('home_path')}}"> Home</a> </li>
                  <li class="menu-li {{ request()->routeIs('about_path') ? 'active' : ''}}"><a href="{{route('about_path')}}">About</a></li>
                  <li class="menu-li {{ request()->routeIs('projects_path') ? 'active' : ''}}"><a href="{{route('projects_path')}}">Projects</a></li>
                  <li class="menu-li {{ request()->routeIs('fleets_path') ? 'active' : ''}}"><a href="{{route('fleets_path')}}">Our Fleets</a></li>
                  <li class="menu-li {{ request()->routeIs('booking_path') ? 'active' : ''}}"><a href="{{route('booking_path')}}">E-Booking</a></li>
                  <li class="menu-li {{ request()->routeIs('contact_path') ? 'active' : ''}}"><a href="{{route('contact_path')}}">Contact</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-xxxl-2 col-xxl-3 col-xl-3 col-lg-5 col-md-5 col-5">
              <div class="header__others">
                <div class="header__support">
                  <p>Call us <a href="tel:+961 70 083 700">961 70 083 700</a></p>
                </div>
                <div class="header__lang">
                
                </div>
                <div class="header__offcanvas" id="open_offcanvas">
                  <span><i class="flaticon-align-left"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </header>
  <!-- header area end -->


  <!-- Offcanvas Area Start -->
  <section class="offcanvas__area">
    <div class="close_offcanvas" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></div>
    <div class="offcanvas__inner">
      <div class="offcanvas__left ">

        <div class="side__navbar-wrapper">
          <nav class="side__navbar">
            <ul>
              <li><a href="{{route('home_path')}}">Home  </a></li>
              <li><a href="{{route('about_path')}}">About </a> </li>
              <li><a href="{{route('projects_path')}}"> Projects </a></li>
              <li><a href="{{route('fleets_path')}}"> Our Fleets</a></li>
              <li><a href="{{route('career_path')}}"> Careers </a></li>
              <li><a href="{{route('booking_path')}}"> E-booking</a></li>
              <li><a href="{{route('contact_path')}}"> Contact </a></li>
              <li>
                <a href="MCM_brochure.pdf">Brochure  <span><i class="flaticon-download"></i></span></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="offcanvas__right">
        <div class="offcanvas__logo">
          <a href="index.html"><img src="logo.png" alt="Site Logo"></a>
        </div>
        <div class="offcanvas__contact">
          <ul>
            <li>
              <span>Location</span>
              <a>Naher El Mot. Roumieh Road <br>
                Industrial Area - Beirut - Lebanon
              </a>
            </li>
            <li>
              <span>Call Us</span>
              <a href="tel:+02387321032">+961 1 330 363</a>
            </li>
            <li>
              <span>Email Us</span>
              <a href="mailto:info@mcm-concrete.com">info@mcm-concrete.com</a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Offcanvas Area End -->