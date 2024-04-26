<!DOCTYPE html>
<html lang="en" class="no-js">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title> @yield('pageTitle') | Apollo Africa Security System</title>
    <meta content="Apollo Africa Security Systems combines over 40 years of expertise with advanced technology to protect Nigeria and beyond. Our focus is clear: provide reliable, cutting-edge security solutions for every sector. From individual safety to national security, Apollo is dedicated to your peace of mind" name="description"/>
    <meta content="Apollo, Africa, Security, Apollo Security, Apollo Africa, Apollo Africa Security, Apollo System, Security System, Africa Security" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="stylesheet" href="/website/assets/css/master.css"/>
    <!-- SWITCHER-->
    {{-- <link href="/website/assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all"/>
    <link href="/website/assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all"/>
    <link href="/website/assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all"/>
    <link href="/website/assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all"/>
    <link href="/website/assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all"/> --}}
    <link rel="icon" type="image/x-icon" href="/website/assets/media/image/favicon.png"/>
  </head>
  <body>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    
    <div data-header="sticky" data-header-top="200" class="l-theme animated-css">
      <!-- Start Switcher-->
      <!-- <div class="switcher-wrapper">
        <div class="demo_changer">
          <div class="demo-icon color-primary"><i class="fa fa-cog fa-spin fa-2x"></i></div>
          <div class="form_holder">
            <div class="predefined_styles">
              <div class="skin-theme-switcher">
                <h4>Color</h4><a href="javascript:void(0);" data-switchcolor="color1" style="background-color:#5aaff7;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color2" style="background-color:#FFAC3A;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color3" style="background-color:#28af0f;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color4" style="background-color:#e425e9;" class="styleswitch"></a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- end switcher-->
      
      {{-- <header class="header">
        
        <div class="header-main">
          <div class="container">
            <div class="row">
              <div class="col-xs-12"><a href="/" class="logo"><img src="/website/assets/media/image/AASS_logo_colour-transparent.png" alt="Logo" class="logo__img img-responsive" width="280"/></a>
                <div class="header-nav">
                  <nav class="navbar yamm">
                    <div id="navbar-collapse-1" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                        <li class=""><a href="/">Home</a></li>
                        <li class=""><a href="/about">About Us</a></li>
                        <li><a href="/services">Services</a></li>
                        <li class=""><a href="/about">Our Team</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                      </ul>
                    </div>
                  </nav>
                  <!-- end nav-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </header> --}}
      <!-- end header-->



      <header class="header">
        {{-- <div class="header-top clearfix">
        </div> --}}
        <div class="header-main">
          <div class="container">
            <div class="row">
              <div class="col-xs-12"><a href="/" class="logo"><img src="/website/assets/media/image/AASS_logo_colour-transparent.png" alt="Logo" class="logo__img img-responsive" width="280"/></a>
                <div class="header-nav">
                  <div class="navbar-trigger visible-xs">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                  {{-- <a href="home.html" class="btn-second header-main__btn btn btn-sm btn-effect">ask a quote</a> --}}
                  <div class="search-trigger">
                    {{-- <i class="icon pe-7s-search"></i> --}}
                  </div>
                  <nav class="navbar yamm" style="background-color: #fff;">
                    <div id="navbar-collapse-1" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                        <li class=""><a href="/"  style="color: #2A3063">Home</a></li>
                        <li class=""><a href="/about" style="color: #2A3063">About Us</a></li>
                        <li><a href="/services" style="color: #2A3063">Services</a></li>
                        <li class=""><a href="/about"  style="color: #2A3063">Our Team</a></li>
                        <li><a href="/contact"  style="color: #2A3063">Contact Us</a></li>
                      </ul>
                    </div>
                  </nav>
                  <!-- end nav-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- end header-->



      
      @yield('body')

      <footer class="footer wow footer_mod-a">
        <div class="footer__main footer__main_mod-a parallax-bg parallax-dark">
          <ul class="bg-slideshow">
            <li>
              <div style="background-image:url(/website/assets/media/components/footer/bg.jpg)" class="bg-slide"></div>
            </li>
          </ul>
          <div class="parallax__inner">
            <div class="container">
              
              <div class="row">
                <div class="col-md-6"><a href="/" class="footer__logo"><img src="/website/assets/media/image/AASS_logo_white-transparent.png" alt="Logo" class="img-responsive"/></a>
                  <div class="footer-form__info">
                    <p>1st Floor,</br>
                     Mega Mound Building </br>
                     1B Muri Okunola Extenstion </br>
                      Victoria Island , </br>
                      Lagos Nigeria</p>
                  </div>
                  <div class="footer__contact footer__contact">+234 805 444 4994 </br>+234 817 774 4444 </br>+234 805 444 4995</div>
                  <div class="footer__contact">services@apollosystemsafrica.com</div>
                  <!-- <ul class="social-net list-inline">
                    <li class="social-net__item"><a href="twitter.html" class="social-net__link"><i class="icon fa fa-twitter"></i></a></li>
                    <li class="social-net__item"><a href="facebook.html" class="social-net__link"><i class="icon fa fa-facebook"></i></a></li>
                    <li class="social-net__item"><a href="linkedin.html" class="social-net__link"><i class="icon fa fa-linkedin"></i></a></li>
                    <li class="social-net__item"><a href="vimeo.html" class="social-net__link"><i class="icon fa fa-vimeo"></i></a></li>
                    <li class="social-net__item"><a href="rss.html" class="social-net__link"><i class="icon fa fa-rss"></i></a></li>
                    <li class="social-net__item"><a href="plus.google.html" class="social-net__link"><i class="icon fa fa-google-plus"></i></a></li>
                  </ul> -->
                  <!-- end social-list-->
                </div>
                <div class="col-md-3">
                  <section class="footer-section">
                    <h3 class="footer-section__title">About Us</h3>
                    <ul class="footer-section__list list list-mark-4">
                      <li><a href="/about">Mission</a></li>
                      <li><a href="/about">Vision</a></li>
                      <li><a href="/services">Government Security</a></li>
                      <li><a href="/services">Private Security</a></li>
                    </ul>
                  </section>
                </div>
                <div class="col-md-3">
                  <section class="footer-section">
                    <h3 class="footer-section__title">Help & Support</h3>
                    <ul class="footer-section__list list list-mark-4">
                      <li><a href="/contact">Contact Us</a></li>
                      <li><a href="#">Terms of Use</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Whistleblowing Policy</a></li>
                    </ul>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">2024. All rights reserved. Apollo African Security System - Nigeria</div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end layout-theme-->
    
    
    <script src="/website/assets/js/jquery.js"></script> 
    <script src="/website/assets/js/custom.js"></script>
    <script src="/website/assets/js/bootstrap.min.js"></script>
      
    <script src="/website/assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
    <script src="/website/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="/website/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/website/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/website/assets/plugins/doubletaptogo.js"></script>
    <script src="/website/assets/plugins/waypoints.min.js"></script>
    <script src="/website/assets/plugins/flowplayer/flowplayer.min.js"></script>
    <script src="/website/assets/plugins/classie.js"></script>
    <script src="/website/assets/plugins/scrollreveal/scrollreveal.min.js"></script>
   <script src="/website/assets/plugins/switcher/js/dmss.js"></script>
    <script src="/website/assets/plugins/jarallax/jarallax.min.js"></script>
    <script src="/website/assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>




  </body>
</html>