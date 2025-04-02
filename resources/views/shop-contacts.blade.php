<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Contact | Metronic Shop UI</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"> 
  <!-- Fonts END -->

  <!-- Global styles START -->          
  @vite(['resources/css/font-awesome/font-awesome.min.css'])
  @vite(['resources/css/bootstrap/bootstrap.min.css'])
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  @vite(['resources/css/fancybox/jquery.fancybox.css'])
  @vite(['resources/css/owl.carousel/owl.carousel.css"'])
  @vite(['resources/css/uniform/uniform.default.css'])
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  @vite(['resources/css/components.css'])
  @vite(['resources/css/style.css'])
  @vite(['resources/css/style-shop.css'])
  @vite(['resources/css/style-responsive.css'])
  @vite(['resources/css/themes/red.css'])
  @vite(['resources/css/custom.css'])
  
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER --> 

   @include('header')
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Pages</a></li>
            <li class="active">Contact</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Login/Register</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Restore Password</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> My account</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Address book</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Wish list</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Returns</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Newsletter</a></li>
            </ul>

            <h2>Our Contacts</h2>
            <address>
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              <abbr title="Phone">P:</abbr> 300 323 3456<br>
            </address>
            <address>
              <strong>Email</strong><br>
              <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              <a href="mailto:support@metronic.com">support@metronic.com</a>
            </address>
            <ul class="social-icons margin-bottom-10">
              <li><a href="javascript:;" data-original-title="facebook" class="facebook"></a></li>
              <li><a href="javascript:;" data-original-title="github" class="github"></a></li>
              <li><a href="javascript:;" data-original-title="Goole Plus" class="googleplus"></a></li>
              <li><a href="javascript:;" data-original-title="linkedin" class="linkedin"></a></li>
              <li><a href="javascript:;" data-original-title="rss" class="rss"></a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Contact</h1>
            <div class="content-page">
              <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>

              <h2>Contact Form</h2>
              <p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, sed diam nonummy nibh euismod tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
              
              <!-- BEGIN FORM-->
              <form action="#" class="default-form" role="form">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email <span class="require">*</span></label>
                  <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" rows="8" id="message"></textarea>
                </div>
                <div class="padding-top-20">                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- END FORM-->          
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

    <!-- BEGIN BRANDS -->
    <div class="brands">
      <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
            <a href="shop-product-list.html"><img src="{{asset('images/brands/canon.jpg')}}" alt="canon" title="canon"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/esprit.jpg')}}" alt="esprit" title="esprit"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/gap.jpg')}}" alt="gap" title="gap"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/next.jpg')}}" alt="next" title="next"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/puma.jpg')}}" alt="puma" title="puma"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/zara.jpg')}}" alt="zara" title="zara"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/canon.jpg')}}" alt="canon" title="canon"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/esprit.jpg')}}" alt="esprit" title="esprit"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/gap.jpg')}}" alt="gap" title="gap"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/next.jpg')}}" alt="next" title="next"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/puma.jpg')}}" alt="puma" title="puma"></a>
              <a href="shop-product-list.html"><img src="{{asset('images/brands/zara.jpg')}}" alt="zara" title="zara"></a>
            </div>
        </div>
    </div>
    <!-- END BRANDS -->

    <!-- BEGIN STEPS -->
    <div class="steps-block steps-block-red">
      <div class="container">
        <div class="row">
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-truck"></i>
            <div>
              <h2>Free shipping</h2>
              <em>Express delivery withing 3 days</em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-gift"></i>
            <div>
              <h2>Daily Gifts</h2>
              <em>3 Gifts daily for lucky customers</em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-phone"></i>
            <div>
              <h2>477 505 8877</h2>
              <em>24/7 customer care available</em>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END STEPS -->

    <!-- BEGIN PRE-FOOTER -->
    @include('footer')
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/back-to-top.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    
    <!-- END CORE PLUGINS -->
    
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    
    <script src="{{ asset('js/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.touchspin.js') }}"></script>
    <script src="{{ asset('js/uniform/jquery.uniform.min.js') }}"></script>
    <script src="{{ asset('js/rateit/jquery.rateit.js')}}"></script>
    
    <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    <script src="{{asset('js/gmaps/gmaps.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
    <script src="{{asset('js/contact-us.js')}}" type="text/javascript"></script>
    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
            ContactUs.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>