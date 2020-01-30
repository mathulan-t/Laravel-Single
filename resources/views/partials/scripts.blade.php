  <!-- JAVASCRIPT
      ================================================== -->

    <!-- Jquery-->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>

    <!-- Bootstrap Jquery-->
    <script src="{{ asset('frontend/js/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Jquery Easing-->
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>

    <!-- Wow Animation -->
    <script src="{{ asset('frontend/plugins/wow/wow.min.js') }}"></script>

    <!-- Smooth Scroll-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/SmoothScroll/SmoothScroll.js') }}"></script>

    <!-- Stellar-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/stellar/jquery.stellar.min.js') }}"></script>

    <!-- Waypoint and Counters-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/counter/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/counter/jquery.counterup.min.js') }}"></script>

    <!--Isotope-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/isotope/isotope.pkgd.min.js') }}"></script>

    <!--Magnific Popup-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!--Images Load-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/imagesloaded/imagesloaded.pkgd.js') }}"></script>

    <!-- Owl Carousel-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/owl-carousel/owl.carousel.min.js') }}"></script>

    <!-- NIVO LIGHTBOX-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/nivo-lightbox/nivo-lightbox.js') }}"></script>

    <!--Visible-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/visible/visible.js') }}"></script>

    <!--Fitvids-->
    <script type="text/javascript" src="{{ asset('frontend/plugins/fitvids/fitvids.js') }}"></script>

    <!-- Google Maps-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>
      <script type="text/javascript" src="{{ asset('frontend/js/map.js') }}"></script>

    <!-- Recaptcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Contact-->
    <script src="{{ asset('frontend/js/contact.js') }}"></script>

     <!--YTPlayer-->
      <script type="text/javascript" src="{{ asset('frontend/plugins/YTPlayer/jquery.mb.YTPlayer.min.js') }}"></script>
      
    <!--Custom JS-->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
      <script>
        new WOW().init();
		jQuery(document).ready(function() {
        $(".player").mb_YTPlayer();
       });
      </script>
