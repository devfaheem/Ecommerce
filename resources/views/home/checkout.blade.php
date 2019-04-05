 @include('layouts.home.header_css')

<!-- Header Section Start -->
 @include('layouts.home.header')

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Checkout</h1>
                
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Checkout</a></li>
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

<!-- Checkout Page Start -->
<div class="page-section section mt-90 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <!-- Checkout Form s-->
                <form action="#" class="checkout-form">
                   <div class="row row-40">
                       
                       <div class="col-lg-7 mb-20">
                          
                           <!-- Billing Address -->
                           <div id="billing-form" class="mb-40">
                               <h4 class="checkout-title">Billing Address</h4>

                               <div class="row">

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>First Name*</label>
                                       <input type="text" placeholder="First Name">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Last Name*</label>
                                       <input type="text" placeholder="Last Name">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Email Address*</label>
                                       <input type="email" placeholder="Email Address">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Phone no*</label>
                                       <input type="text" placeholder="Phone number">
                                   </div>

                                   <div class="col-12 mb-20">
                                       <label>Company Name</label>
                                       <input type="text" placeholder="Company Name">
                                   </div>

                                   <div class="col-12 mb-20">
                                       <label>Address*</label>
                                       <input type="text" placeholder="Address line 1">
                                       <input type="text" placeholder="Address line 2">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Country*</label>
                                       <select class="nice-select">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                       </select>
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Town/City*</label>
                                       <input type="text" placeholder="Town/City">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>State*</label>
                                       <input type="text" placeholder="State">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Zip Code*</label>
                                       <input type="text" placeholder="Zip Code">
                                   </div>

                                   <div class="col-12 mb-20">
                                       <div class="check-box">
                                           <input type="checkbox" id="create_account">
                                           <label for="create_account">Create an Acount?</label>
                                       </div>
                                       <div class="check-box">
                                           <input type="checkbox" id="shiping_address" data-shipping>
                                           <label for="shiping_address">Ship to Different Address</label>
                                       </div>
                                   </div>

                               </div>

                           </div>
                           
                           <!-- Shipping Address -->
                           <div id="shipping-form" class="mb-40">
                               <h4 class="checkout-title">Shipping Address</h4>

                               <div class="row">

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>First Name*</label>
                                       <input type="text" placeholder="First Name">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Last Name*</label>
                                       <input type="text" placeholder="Last Name">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Email Address*</label>
                                       <input type="email" placeholder="Email Address">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Phone no*</label>
                                       <input type="text" placeholder="Phone number">
                                   </div>

                                   <div class="col-12 mb-20">
                                       <label>Company Name</label>
                                       <input type="text" placeholder="Company Name">
                                   </div>

                                   <div class="col-12 mb-20">
                                       <label>Address*</label>
                                       <input type="text" placeholder="Address line 1">
                                       <input type="text" placeholder="Address line 2">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Country*</label>
                                       <select class="nice-select">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                       </select>
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Town/City*</label>
                                       <input type="text" placeholder="Town/City">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>State*</label>
                                       <input type="text" placeholder="State">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Zip Code*</label>
                                       <input type="text" placeholder="Zip Code">
                                   </div>

                               </div>

                           </div>
                           
                       </div>
                       
                       <div class="col-lg-5">
                           <div class="row">
                               
                               <!-- Cart Total -->
                               <div class="col-12 mb-60">
                               
                                   <h4 class="checkout-title">Cart Total</h4>
                           
                                   <div class="checkout-cart-total">

                                       <h4>Product <span>Total</span></h4>
                                      
                                       		 
                                       <ul>
                                       	 @foreach( $data as $data_del)
                                           <li>{{$data_del->name}} <span><i class="fa fa-inr" aria-hidden="true"></i>{{$data_del->qty * $data_del->price}}</span></li>
                                            
                                           @endforeach
                                       </ul>
                                       
                                       <p>Sub Total <span><i class="fa fa-inr" aria-hidden="true"></i>{{Cart::subtotal()}}</span></p>
                                       <p>Shipping Fee <span><i class="fa fa-inr" aria-hidden="true"></i>00.00</span></p>
                                       
                                       <h4>Grand Total <span><i class="fa fa-inr" aria-hidden="true"></i>{{Cart::total()}}</span></h4>
                                       
                                       
                                   </div>
                                   
                               </div>
                               
                               <!-- Payment Method -->
                               <div class="col-12 mb-60">
                               
                                   <h4 class="checkout-title">Payment Method</h4>
                           
                                   <div class="checkout-payment-method">
                                     
                                       <div class="single-method">
                                           <input type="radio" id="payment_check" name="payment-method" value="check">
                                           <label for="payment_check">Check Payment</label>
                                           <p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                       </div>
                                     
                                       <div class="single-method">
                                           <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                           <label for="payment_bank">Direct Bank Transfer</label>
                                           <p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                       </div>
                                     
                                       <div class="single-method">
                                           <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                           <label for="payment_cash">Cash on Delivery</label>
                                           <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                       </div>
                                     
                                       <div class="single-method">
                                           <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                           <label for="payment_paypal">Paypal</label>
                                           <p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                       </div>
                                     
                                       <div class="single-method">
                                           <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                           <label for="payment_payoneer">Payoneer</label>
                                           <p data-method="payoneer">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                       </div>
                                     
                                       <div class="single-method">
                                           <input type="checkbox" id="accept_terms">
                                           <label for="accept_terms">I’ve read and accept the terms & conditions</label>
                                       </div>
                                       
                                   </div>
                                   
                                   <button class="place-order">Place order</button>
                                   
                               </div>
                               
                           </div>
                       </div>
                       
                   </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- Checkout Page End --> 


<!-- Footer Section Start -->
@include('layouts.home.footer')

<!-- Footer Section Start -->
@include('layouts.home.footer_script')