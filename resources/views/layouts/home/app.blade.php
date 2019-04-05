<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shopping Zone</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icon-font.min.css') }}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>


    <style type="text/css">

.carousel-inner .carousel-item-right.active,
.carousel-inner .carousel-item-next {
  transform: translateX(33.33%);
}

.carousel-inner .carousel-item-left.active, 
.carousel-inner .carousel-item-prev {
  transform: translateX(-33.33%)
}
  
.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}

 
</style>
       
</head>

<body>
 
 @include('layouts.home.header_categories')


 @yield('content')


 <!-- Footer Section Start -->
@include('layouts.home.footer')


<!-- Popup Subscribe Section Start -->
<div class="popup-subscribe-section section bg-gray pt-55 pb-55" data-modal="popup-modal">
   
    <!-- Popup Subscribe Wrap Start -->
    <div class="popup-subscribe-wrap">
        
        <button class="close-popup">X</button>
       
        <!-- Popup Subscribe Banner -->
        <div class="popup-subscribe-banner banner">
            <a href="#"><img src="assets/images/banner/banner-7.jpg" alt="Banner"></a>
        </div>

        <!-- Popup Subscribe Form Wrap Start -->
        <div class="popup-subscribe-form-wrap">
            
            <h1>SUBSCRIBE <br>OUR NEWSLETTER</h1>
            <h4>Get latest product update...</h4>
           
            <!-- Newsletter Form -->
            <form action="#" method="post" class="popup-subscribe-form validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="popup_subscribe" class="d-none">Subscribe to our mailing list</label>
                    <input type="email" value="" name="EMAIL" class="email" id="popup_subscribe" placeholder="Enter your email here" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                    <button type="submit" name="subscribe" id="" class="button">subscribe</button>
                </div>
            </form>
            
            <p>Be the first in the by getting special deals and offers send directly to your inbox.</p>
            
        </div><!-- Popup Subscribe Form Wrap End -->

    </div><!-- Popup Subscribe Wrap End -->
    
</div><!-- Popup Subscribe Section End -->
    

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script type="text/javascript"> 
$('#recipeCarousel').carousel({
  interval: 1000
});

$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
    }
    else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});

</script>

</body>

</html>