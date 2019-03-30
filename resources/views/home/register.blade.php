 @include('layouts.home.header_css')

<!-- Header Section Start -->
 @include('layouts.home.header')
 
 <!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Register</h1> 
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
            <div class="banner"><a href="#"><img src="{{ asset('assets/images/banner/banner-15.jpg') }}" alt="Banner"></a></div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
            <div class="banner"><a href="#"><img src="{{ asset('assets/images/banner/banner-14.jpg') }}" alt="Banner"></a></div>
        </div>

    </div>
</div><!-- Page Banner Section End -->

<!-- Register Section Start -->
<div class="register-section section mt-90 mb-90">
    <div class="container">
        <div class="row">
            <!-- Register -->
            <div class="col-md-6 col-12 d-flex">
                <div class="ee-register">
                    
                    <h3>We will need for your registration</h3>
                    <p>E&E provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>
                    <div class="form-group">
                         @include('layouts.errors-and-messages')
                        </div>
                    <!-- Register Form -->
                     <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                             {{ csrf_field() }} 
                        <div class="row">
                            <div class="col-12 mb-30"><input type="text" placeholder="Your name here" name="name" id="name" required=""></div>
                            <div class="col-12 mb-30"><input type="email" placeholder="Your email here" name="email" id="email" required=""></div>
                            <div class="col-12 mb-30"><input type="password" id="password" placeholder="Enter passward" name="password" required=""></div>
                            <div class="col-12 mb-30"><input type="password" placeholder="Confirm password" name="password_confirmation" id="password_confirmation" required=""></div>

                            <div class="col-12"><input type="submit" value="register"></div>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
            
            <!-- <div class="col-md-1 col-12 d-flex">
                
                <div class="login-reg-vertical-boder"></div>
                
            </div>
 -->            
            <!-- Account Image -->
           <!--  <div class="col-md-5 col-12 d-flex">
                
                <div class="ee-account-image">
                    <h3>Upload your Image</h3>
                    
                    <img src="assets/images/account-image-placeholder.jpg" alt="Account Image Placeholder" class="image-placeholder">
                    
                    <div class="account-image-upload">
                        <input type="file" name="chooseFile" id="account-image-upload">
                        <label class="account-image-label" for="account-image-upload">Choose your image</label>
                    </div>
                    
                    <p>jpEG 250x250</p>
                    
                </div>
                
            </div> -->
            
        </div>
    </div>
</div><!-- Register Section End -->


<!-- Footer Section Start -->
@include('layouts.home.footer')


<!-- JS
============================================ -->
@include('layouts.home.footer_script')
