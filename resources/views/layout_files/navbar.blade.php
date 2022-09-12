<header class="section page-header">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap rd-navbar-modern-wrap">
    <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand @yield('active_about_us_page')"><a class="brand" href="/"><img src="/assets/images/logo/kilimofy_logo.jpg" alt="" style="height:40px;"></a></div>
          </div>
          <div class="rd-navbar-main-element">
            <div class="rd-navbar-nav-wrap">
              <!-- RD Navbar Basket-->
              <!-- RD Navbar Search-->
              <div class="rd-navbar-search">
                <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                <form class="rd-search" action="#" method="POST">
                  <div class="form-wrap">
                    <label class="form-label" for="rd-navbar-search-form-input"></label>
                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" placeholder="search...">
                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                    <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                  </div>
                 @csrf
                </form>
              </div>
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item @yield('/')"><a class="rd-nav-link" href="/">Home</a>
                  <!-- <li class="rd-nav-item @yield('active_kilimo_page')"><a class="rd-nav-link" href="/Utafiti/je_ni_wapi_na_kipi_ulime_tanzania"><img src="/assets/images/kilimo.png" alt=""> Kilimo</a> -->
                    <!-- RD Navbar Dropdown-->
                    <!-- <ul class="rd-menu rd-navbar-dropdown"> -->
                      <!-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/Utafiti/je_ni_wapi_na_kipi_ulime_tanzania">Nini &amp; wapi ulime ?</a></li> -->
                      <!-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/Magonjwa_na_Tiba_za_Mazao/tafuta_magonjwa_na_tiba_za_mazao">Magonjwa &amp; Dawa za Mazao</a></li> -->
                      <!-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/Dukani/shop_index_page">Dukani</a></li> -->
                    <!-- </ul> -->
                  <!-- </li> -->
                <!-- <li class="rd-nav-item @yield('active_dukani_page')"><a class="rd-nav-link" href="/Dukani/shop_index_page"></a> -->
                </li>
                <li class="rd-nav-item @yield('active_about_us_page')"><a class="rd-nav-link" href="/">About Us</a>
                  <!-- RD Navbar Dropdown-->
                  <!-- <ul class="rd-menu rd-navbar-dropdown"> -->
                    <!-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/Nyumbani/huduma_zinazo_tolewa_na_t_kilimo">Our Services</a></li> -->
                    <!-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/Nyumbani/timu_ya_wafanyakazi_wa_t_kilimo">Timu Yetu</a></li> -->
                  <!-- </ul> -->
                </li>
                  <!-- RD Navbar Dropdown-->
                </li>
                <li class="rd-nav-item @yield('active_contact_us_page')"><a class="rd-nav-link" href="/">Contact Us</a>
                </li>
                <!-- <li class="rd-nav-item @yield('active_blog_page')"><a class="rd-nav-link" href="/UserAccount/index_page"><img src="/assets/images/user.png" alt=""></a> -->
              </ul>
            </div>
            <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
              <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
              <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
              </div>
              <div class="project-close"><span></span><span></span></div>
            </div>
          </div>
          <div class="rd-navbar-project rd-navbar-modern-project">
            <div class="rd-navbar-project-modern-header">
              <h4 class="rd-navbar-project-modern-title">Join Us</h4>
              <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                <div class="project-close"><span></span><span></span></div>
              </div>
            </div>
            <div class="rd-navbar-project-content rd-navbar-modern-project-content">
              <div>
                <p> We make agriculture more easier and fun</p>
                <div class="heading-6 subtitle">instagram</div>
                <div class="row row-10 gutters-10">
                  <div class="col-12"><img src="/assets/images/nav/tech.png" alt="" width="394" height="255"/>
                  </div>
                </div>
                <ul class="rd-navbar-modern-contacts">

                  <li>
                    <div class="unit unit-spacing-sm">
                      <div class="unit-left"><img src="/assets/images/join-us/location.png" alt="" style="width:30px; height:30px;"> </div>
                      <div class="unit-body"><a class="link-location" href="#">Arusha, Tanzania</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm">
                      <div class="unit-left"><img src="/assets/images/join-us/mail.png" alt="" style="width:30px; height:30px;"> </div>
                      <div class="unit-body"><a class="link-email" href="mailto:#">kilimofy@gmail.com</a></div>
                    </div>
                  </li>
                </ul>
                <ul class="list-inline rd-navbar-modern-list-social">
                  <li><a href="https://twitter.com/kilimofy1?lang=en"><img src="/assets/images/join-us/facebook.png" alt="" style="width:30px; height:30px;"> </a></li>
                  <li><a  href="https://sw-ke.facebook.com/john.swai.39982"><img src="/assets/images/join-us/twitter.png" alt="" style="width:30px; height:30px;"> </a></li>
                  <li><a href="https://www.instagram.com/kilimofy/?hl=en"><img src="/assets/images/join-us/instagram.png" alt="" style="width:30px; height:30px;"> </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
