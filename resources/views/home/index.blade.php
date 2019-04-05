@extends('layouts.home.app')
 
@section('content')
 <!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Hero Section Start -->
<div class="hero-section section mb-30">
    <div class="container">
        <div class="row">
            <div class="col">
             <div class="container text-center my-4"> 
                <div class="row mx-auto my-auto">
                 <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                         <div class="carousel-item active">
                        <img class="col-4 img-fluid" src="{{ asset('assets/images/banner/scroll-banner-image1.jpg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="col-4 img-fluid" src="{{ asset('assets/images/banner/scroll-banner-image2.jpg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="col-4 img-fluid" src="{{ asset('assets/images/banner/scroll-banner-image3.jpg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="col-4 img-fluid" src="{{ asset('assets/images/banner/scroll-banner-image1.jpg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="col-4 img-fluid" src="{{ asset('assets/images/banner/scroll-banner-image2.jpg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="col-4 img-fluid" src="{{ asset('assets/images/banner/scroll-banner-image3.jpg') }}">
                        </div>
                     </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #68cad4;"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #68cad4;"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> 
</div> 
                <!-- Hero Slider Start -->
                <div class="hero-slider hero-slider-one">

                    <!-- Hero Item Start -->
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>GL G6</span></h1>
                                <h1>IT’S <span class="big">35%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            <div class="hero-image col">
                               <img src="{{$sliderimage[1]["slider_image"]}}" alt="Hero Image" style="    height: 430px;">
                            </div>
                             
                           
                           
                        
                        </div>     
                    </div><!-- Hero Item End -->

                    <!-- Hero Item Start -->
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>GL G6</span></h1>
                                <h1>IT’S <span class="big">35%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image col">
                               <img src="{{$sliderimage[2]["slider_image"]}}" alt="Hero Image">
                            </div>
                        
                        </div>     
                    </div><!-- Hero Item End -->

                    <!-- Hero Item Start -->
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>MSVII Case</span></h1>
                                <h1>IT’S <span class="big">15%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image col">
                               <img src="{{$sliderimage[3]["slider_image"]}}" alt="Hero Image">
                            </div>
                        
                        </div>     
                    </div><!-- Hero Item End -->

                </div><!-- Hero Slider End -->

            </div>
        </div>
    </div>
</div><!-- Hero Section End -->

<!-- Wow-Slider

<div id="wowslider-container1">
    <div class="ws_images"><ul>
        <li><img src="assets/data1/images/pexelsphoto291762.jpg" alt="" title="" id="wows1_0"/></li>
        <li><a href="http://wowslider.net"><img src="assets/data1/images/pexelsphoto974911.jpg" alt="slider" title="" id="wows1_1"/></a></li>
        <li><img src="assets/data1/images/pexelsphoto1345082.jpg" alt="pexels-photo-1345082" title=" " id="wows1_2"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title=""><span><img src="assets/data1/tooltips/pexelsphoto291762.jpg" alt=""/>1</span></a>
        <a href="#" title=""><span><img src="assets/data1/tooltips/pexelsphoto974911.jpg" alt="pexels-photo-974911"/>2</span></a>
        <a href="#" title=""><span><img src="assets/data1/tooltips/pexelsphoto1345082.jpg" alt="pexels-photo-1345082"/>3</span></a>
    </div></div> 
    <div class="ws_shadow"></div>
    </div>  


-->
<!-- Banner Section Start  
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row row-10">
             
            <div class="col-md-8 col-12 mb-30">
                <div class="banner"><a href="#"><img src="assets/images/banner/banner-1.jpg" alt="Banner"></a></div>
            </div>
             
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="assets/images/banner/banner-2.jpg" alt="Banner"></a></div>
            </div>
            
        </div>
    </div>
</div> Banner Section End -->

<!-- Feature Product Section Start -->
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">
            
            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="{{ $sections[1]["title"] }}"><h1>{{ $sections[1]["title"] }}</h1></div>
            </div><!-- Section Title End -->
            
            <div class="col-12">
                <div class="row">
                    @foreach($products as $product )
                                      <input type="hidden" name="product_id" value="{{  $product->id}}"> 
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="{{ url('products/productdetails/'.$product->id) }}" class="img"><img src="{{ asset('images/'.$product->image) }}" alt="Product Image"></a>


                               <!--  <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div> -->
                               <!--   <div class="actions">
                   
                            <button class="addtocart" type="submit"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></button>
 

                        </div> -->
                                <!-- <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a> -->

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title"> 
                                    <a href="#" class="cat">{{$product->name}}</a>
                                                <h5 class="title"><a href="{{ url('products/productdetails/'.$product->id) }}">{{$product->productcategory}}</a></h5>
                                                <input type="hidden" value="1" name="quantity">
                                                   @if ($product->color != "")
                              @foreach(explode(',', $product->color) as $color_del)  <input type="hidden" name="color" value="{{ $color_del }}" required="">      
                                  
                              @endforeach
                                @endif
                                 @if ($product->size != "")
                          @foreach(explode(',', $product->size) as $size_del) 
                              <input type="hidden" name="size" value="{{ $size_del }}" required="">  
                          @endforeach
                        @endif  
                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                   <h5 class="price"><strong><i class="fa fa-inr" aria-hidden="true"></i></strong>{{$product->price}}</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    @endforeach
                     
                    
                </div>
            </div>
            
        </div>
    </div>
</div><!-- Feature Product Section End -->

<!-- Best Sell Product Section Start -->
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">
            
            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="{{ $sections[2]["title"] }}"><h1>{{ $sections[2]["title"] }}</h1></div>
            </div><!-- Section Title End -->
                
            <div class="col-12">
                <div class="row">
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="  " class="img"><img src="{{ asset('assets/images/product/2.jpg') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="  ">Mony Handycam Z 105</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$110.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>
                            
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label sale">sale</span>

                                <a href="  " class="img"><img src="{{ asset('assets/images/product/product6-1.jpg') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="  ">Axor Digital camera</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$265</span>$199.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="  " class="img"><img src="{{ asset('assets/images/product/3.jpg') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="  ">Silvex DSLR Camera T 32</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$580.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label new">new</span>

                                <a href="  " class="img"><img src="{{ asset('assets/images/product/product8-1.jpg') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="  ">Necta Instant Camera</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$320.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label sale">sale</span>

                                <a href="  " class="img"><img src="{{ asset('assets/images/product/product8-1.jpg') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Watch</a>
                                    <h5 class="title"><a href="  ">Mascut Smart Watch</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$365</span>$295.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="  " class="img"><img src="{{ asset('assets/images/product/3.jpg') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Watch</a>
                                    <h5 class="title"><a href="  ">Z Bluetooth Headphone</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$189.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">
                                
                                <span class="label new">new</span>

                                <a href="  " class="img"><img src="{{ asset('assets/images/product/2.jpg') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Printer</a>
                                    <h5 class="title"><a href="  ">Pranon Photo Printer Y 25</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$210.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="  " class="img"><img src="{{ asset('assets/images/product/product6-1.jpg') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Audio</a>
                                    <h5 class="title"><a href="  ">Roses Speaker Box</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$210.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div><!-- Best Sell Product Section End -->

<!-- Banner Section Start -->
<div class="banner-section section mb-90">
    <div class="container">
        <div class="row">
            
            <!-- Banner -->
            <div class="col-12">
                <div class="banner"><a href="#"><img src="{{ $middlebannerimage }}" alt="Banner"></a></div>
            </div>
            
        </div>
    </div>
</div><!-- Banner Section End -->

<!-- Feature Section Start -->
<div class="feature-section section mb-60">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-shipping">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('assets/images/icons/feature-van.png') }}" alt="Feature"></div>
                        <h4>FREE SHIPPING</h4>
                        <p>Start from $100</p>
                    </div>
                </div><!-- Feature End -->
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-guarantee">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('assets/images/icons/feature-walet.png') }}" alt="Feature"></div>
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>Back within 15 days</p>
                    </div>
                </div><!-- Feature End -->
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-security">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('assets/images/icons/feature-shield.png') }}" alt="Feature"></div>
                        <h4>SECURE PAYMENTS</h4>
                        <p>Payment Security</p>
                    </div>
                </div><!-- Feature End -->
            </div>
            
        </div>
    </div>
</div><!-- Feature Section End -->
 

<!-- New Arrival Product Section Start -->
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">
            
            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="{{ $sections[3]["title"] }}"><h1>{{ $sections[3]["title"] }}</h1></div>
            </div><!-- Section Title End -->
            
            <div class="col-12">
                <div class="row">
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label sale">sale</span>

                                <a href="  " class="img"><img src="assets/images/product/product10-1.jpg" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Tv & Audio</a>
                                    <h5 class="title"><a href="  ">Nexo Andriod TV Box</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$360 </span>$250.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label new">new</span>

                                <a href="  " class="img"><img src="assets/images/product/product8-1.jpg" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Smartphone</a>
                                    <h5 class="title"><a href="  ">Ornet Note 9</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$285</span>$230.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="  " class="img"><img src="assets/images/product/2.jpg" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Tv & Audio</a>
                                    <h5 class="title"><a href="  ">Xonet Speaker P 9</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$185.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label sale">sale</span>

                                <a href="  " class="img"><img src="assets/images/product/7.jpg" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Smartphone</a>
                                    <h5 class="title"><a href="  ">flex P 3310</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$220</span>$180.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label sale">sale</span>

                                <a href="  " class="img"><img src="assets/images/product/5.jpg" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Kitchen Appliances</a>
                                    <h5 class="title"><a href="  ">Jackson Toster V 27</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$185</span>$135.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="  " class="img"><img src="assets/images/product/3.jpg" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Kitchen Appliances</a>
                                    <h5 class="title"><a href="  ">mega Juice Maker</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$125.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label new">new</span>

                                <a href="  " class="img"><img src="assets/images/product/8.jpg" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Kitchen Appliances</a>
                                    <h5 class="title"><a href="  ">shine Microwave Oven</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$389</span>$245.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="  " class="img"><img src="assets/images/product/product2-1.jpg" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Kitchen Appliances</a>
                                    <h5 class="title"><a href="  ">Auto Rice Cooker</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$130.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div><!-- New Arrival Product Section End -->

<!-- Banner Section Start 
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row">
            
           
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="assets/images/banner/banner-4.jpg" alt="Banner"></a></div>
            </div>
            
             
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="assets/images/banner/banner-5.jpg" alt="Banner"></a></div>
            </div>
            
           
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="assets/images/banner/banner-6.jpg" alt="Banner"></a></div>
            </div>
            
        </div>
    </div>
</div> Banner Section End -->

<!-- Brands Section Start 
<div class="brands-section section mb-90">
    <div class="container">
        <div class="row"> 

            <div class="brand-slider col">
                <div class="brand-item col"><img src="assets/images/brands/brand-1.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-2.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-3.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-4.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-5.png" alt="Brands"></div>
            </div> 
            
        </div>
    </div>
</div> Brands Section End -->
@endsection

