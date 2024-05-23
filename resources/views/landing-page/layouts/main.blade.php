<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job board HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('css/price_rangs.css') }}">
            <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
   @include('landing-page.layouts.navbar')
   @yield('content');
    @include('landing-page.layouts.footer')
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/price_rangs.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
		<script src="{{ asset('js/animated.headline.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/contact.js') }}"></script>
        <script src="{{ asset('js/jquery.form.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
     
    </body>
</html>