<?php

use App\ProductCategory;

$productcategory = ProductCategory::all();


?>

<div class="header-section section  header-sticky">

    <!-- Header Top Start -->
    <div class="header-top header-top-one pt-10 pb-8">
       <!--  <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-10 mb-10"> 
                    <div class="header-links">
                        <a href="#"><img src="{{ asset('assets/images/icons/car.png') }}" alt="Car Icon"> <span>Track your order</span></a> 
                    </div> 
                </div>
 
            </div>
        </div> -->

         <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-15 mb-15">
                    <!-- Logo Start -->
                    <div class="header-logo">
                        <a href="{{route('home')}}"><h2><strong>YOUR LOGO</strong></h2>
                           <!--  <img src="assets/images/logo.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template"> -->
                           <!--  <img class="theme-dark" src="assets/images/logo-light.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template"> -->
                        </a>
                    </div><!-- Logo End -->
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    <!-- Header Advance Search Start -->
                    <div class="header-advance-search">
                        
                        <form action="#">
                            <div class="input"><input type="text" placeholder="Search your product"></div>
                            <div class="select">
                                <select class="nice-select">
                                    <option>All Categories</option>
                                    <@foreach($productcategory as $productcat)
                                    <option>{{$productcat->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                        </form>
                        
                    </div><!-- Header Advance Search End -->
                </div>


                <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links">
                        @if (Auth::check())
                        <a href="#"><i class="icofont icofont-user-alt-7"></i><span>my account</span></a>
                        @else
                        <a href="{{ route('home.register') }}"><i class="icofont icofont-user-alt-7"></i><span>my account</span></a>
                        @endif   
                        @if (Auth::check())
                        <a href="#"><i class="icofont icofont-login d-none"></i> <span>{{Auth::user()->name}}</span></a>
                        @else
                        <a href="{{ route('home.login') }}"><i class="fa fa-user-plus" aria-hidden="true"></i><span>Login</span></a>
                        @endif 
                    </div><!-- Header Account Links End -->
                </div>

                <div class="col order-2 order-lg-12 order-xl-12">
                    <!-- Header Shop Links Start -->
                    <div class="header-shop-links">
                        
                        <!-- Compare -->
                      <!--   <a href="compare.html" class="header-compare"><i class="ti-control-shuffle"></i></a> -->
                        <!-- Wishlist -->
                       <!--  <a href="#" class="header-wishlist"><i class="ti-heart"></i> <span class="number">3</span></a> -->
                        <!-- Cart -->
                        @if(Auth::check())
                        <a href="{{ route('showcart') }}" class=""><i class="ti-shopping-cart"></i> <span class="number">{{Cart::count()}}</span></a>
                        @else
                      <a href="{{ route('home.login') }}" class=""><i class="ti-shopping-cart"></i> <span class="number">{{Cart::count()}}</span></a>
                        @endif
                        
                    </div><!-- Header Shop Links End -->
                </div>
                
                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
        
    </div><!-- Header Bottom End -->
    </div><!-- Header Top End -->

   
 

</div><!-- Header Section End -->

<!-- Mini Cart Wrap Start -->                      
<!-- <div class="mini-cart-wrap">
 
    <div class="mini-cart-top">    
    
        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>
        
    </div>
 
    <ul class="mini-cart-products">
        <li>
            <a class="image"><img src="{{ asset('assets/images/product/product-1.png') }}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 02</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{ asset('assets/images/product/product-2.png') }}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Aquet Drone D 420</a>
                <span class="price">Price: $275</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{ asset('assets/images/product/product-3.png') }}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Game Station X 22</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
    </ul>
 
    <div class="mini-cart-bottom">    
    
        <h4 class="sub-total">Total: <span>$1160</span></h4>

        <div class="button">
            <a href="checkout.html">CHECK OUT</a>
        </div>
        
    </div>

</div> --><!-- Mini Cart Wrap End --> 