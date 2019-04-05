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
                <h1>Cart</h1> 
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Cart</a></li>
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
 

@if($cartProducts->isEmpty()) 
    <div class="page-section section pt-90 pb-50">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 text-center"> 
       <img src="{{ asset('assets/images/banner/cart-empty.jpg') }}" class="img-fluid"> 
       </div>
        <div class="col-12 text-center">
        <div class="cart-summary">
                            <div class="cart-summary-wrap" style="padding: 45px 50px; margin-bottom: 20px; background-color: #fff">
          <div class="cart-summary-button"> 
                <button class="Continue Shopping" style="background:#68cad4;"><a href="{{ url('/home')}}">Continue Shopping</a></button>
             </div> 
         </div>
     </div>
 </div>
         </div>
         </div>
          </div>
            

@else
 
<!-- Cart Page Start -->
<div class="page-section section pt-90 pb-50">
    <div class="container-fluid">
        <div class="row">

            <div class="col-8"> 
                  @if(session('success_msg'))
     <div class="alert alert-success">
      {{ session('success_msg') }}
    </div>
    @endif
                    <!-- Cart Table -->
                    <div class="cart-table table-responsive mb-40">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl.no</th>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody> 
                                    <?php $i=1; $subTotal = 0; $total = 0; ?>
                                @foreach($cartProducts as $cartProduct)
                                       <!--  <?php print_r($cartProduct);  ?> -->
                                 
                                <tr>
                                    <td><strong>{{ $i++ }}</strong></td>

                                    <td class="pro-thumbnail"><a href="#"><a class="thumb-image" href="{{ url('products/productdetails/'.$cartProduct->id) }}"><img src="{{ asset('images/'.$cartProduct->options->image) }}" alt="Product"></a></td>
                                    {!! Form::open(['url' => '/products/update-cart', 'method' =>'POST']) !!}
                                {!! csrf_field() !!}
                                    <td class="pro-title"><a href="#">{{ $cartProduct->name }}</a><br><strong>Size: {{ $cartProduct->options->size }}</strong>&nbsp;&nbsp;<strong>Color: </strong>{{ $cartProduct->options->color }}</td>

                                    <td class="pro-price"><span><i class="fa fa-inr" aria-hidden="true"></i> {{ $cartProduct->price }}</span></td>

                                    <td class="pro-quantity">
                                
                                 <div class="pro-qty"><input type="number" value="{{ $cartProduct->qty }}" min="1" name="qty"> 
                                 </div><br>
                                  <input type="hidden" value="{{ $cartProduct->rowId }}" name="rowId">
                                <input class="pro-qty" style="    background: #68cad4;" type="submit" value="update">
                                    </td>

                                  {!! Form::close() !!}

                                   <?php  $subtotal = $cartProduct->qty * $cartProduct->price;   ?>
                                    <td class="pro-subtotal"><span><i class="fa fa-inr" aria-hidden="true"></i> {{ $subtotal }}</span></td>

                                    <td class="pro-remove"><a href="{{ url('/products/delete-cart-product/'.$cartProduct->rowId) }}"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <?php  

                                        $subTotal = $subTotal + $subtotal;

                                        $deliveryFee = 50;

                                         $total = $subTotal + $deliveryFee;

                                ?>
                                
                    @endforeach
                            </tbody>
                        </table>
                    </div>
                     
                
            </div> 
             <div class="col-lg-4 col-4 mb-40 d-flex">
                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4>Cart Summary</h4>
                                <p>Sub Total <span><i class="fa fa-inr" aria-hidden="true"></i> {{ $subTotal }}</span></p>
                                <p>Shipping Cost <span><i class="fa fa-inr" aria-hidden="true"></i> 50</span></p>
                                <h2>Grand Total <span><i class="fa fa-inr" aria-hidden="true"></i> {{ $total }}</span></h2>
                            </div>
                             @if (Auth::check())
                              <input type="hidden" name="userid" value="{{Auth::user()->id}}">
                              @endif
                            <div class="cart-summary-button">
                                  @if(Auth::check())
                                <button class="checkout-btn"><a href="{{ route('checkout')}}">Checkout</button></button>
                                    @else
                                    <button class="checkout-btn"><a href="{{ route('home.login')}}">Checkout</button></button>
                                    @endif
                              <button class="checkout-btn"><a href="{{ url('/home')}}">Continue Shopping</a></button>
                             
                            </div>
                        </div>
                    </div>
           
        </div>
    </div>
</div>
<!-- Cart Page End --> 
@endif
 

<!-- Brands Section Start -->
<div class="brands-section section mb-90">
    <div class="container">
        <div class="row">
            
            <!-- Brand Slider Start -->
            <div class="brand-slider col">
                <div class="brand-item col"><img src="{{ asset('assets/images/brands/brand-1.png') }}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{ asset('assets/images/brands/brand-2.png') }}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{ asset('assets/images/brands/brand-3.png') }}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{ asset('assets/images/brands/brand-4.png') }}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{ asset('assets/images/brands/brand-5.png') }}" alt="Brands"></div>
            </div><!-- Brand Slider End -->
            
        </div>
    </div>
</div><!-- Brands Section End -->
  

<!-- Footer Section Start -->
@include('layouts.home.footer')


<!-- JS
============================================ -->
@include('layouts.home.footer_script')