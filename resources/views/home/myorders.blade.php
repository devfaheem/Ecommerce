 @include('layouts.home.header_css')

<!-- Header Section Start -->
 @include('layouts.home.header') 

<!-- Orders Section Start -->

    <!-- Cart Page Start -->
<div class="page-section section pt-90 pb-50">
    <div class="container">
        <div class="row">

            <div class="col-12">
            <div class="card border-light bg-white card proviewcard shadow-sm">
            <div class="card-header"> <a href="#" class="btn btn-info" style=" color: #fff; border: none;">OD987986878113</a><span style="float: right;"> <a href="#" class="btn btn-info" style=" color: #000; border: none; background-color: rgb(0,0,0,.03); text-transform: none"><i class="fa fa-question-circle" aria-hidden="true"></i> Need Help</a> <a href="#" class="btn btn-info" style=" color: #000; border: none; background-color: rgb(0,0,0,.03); text-transform: none"><i class="fa fa-map-marker" aria-hidden="true"></i> Track</a></span> </div>
            <div class="card-body">             
                    <!-- Cart Table -->
                    <div class="cart-table table-bordered mb-40">
                        <table class="table"> 
                            <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-1.png" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Zeon Zen 4 Pro</a><br><strong>Size: XL</strong>&nbsp;&nbsp;<strong>Color: </strong>Red</td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity">Delivered on Tue, Dec 12th '17<br>
                                    Your item has been delivered</td>
                                    <td class=""><a href="#" style="color: #48a2ef"><i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;RATE & REVIEW PRODUCT</a></td> 
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-2.png" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Aquet Drone D 420</a><br><strong>Size: XL</strong>&nbsp;&nbsp;<strong>Color: </strong>Blue</td>
                                    <td class="pro-price"><span>$275.00</span></td>
                                   <td class="pro-quantity">Delivered on Tue, Dec 12th '17<br>
                                    Your item has been delivered</td>
                                    <td class=""><a href="#" style="color: #48a2ef"><i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;RATE & REVIEW PRODUCT</a></td> 
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-3.png" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Game Station X 22</a><br><strong>Size: XL</strong>&nbsp;&nbsp;<strong>Color: </strong>Red</td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity">Delivered on Tue, Dec 12th '17<br>
                                    Your item has been delivered</td>
                                    <td class=""><a href="#" style="color: #48a2ef"><i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;RATE & REVIEW PRODUCT</a></td> 
                                </tr> 
                            </tbody>
                        </table>
                    </div>  
                </div><!-- card-body -->
                <div class="card-header"> Ordered On Thu, Dec 7th '17 <span style="float: right;">Order Total &nbsp;<i class="fa fa-rupee" aria-hidden="true"></i> 1075</span></div>
            </div><!-- card --> 
    </div><!-- col-12-->
        </div><!-- row -->
    </div>
</div>
<!-- Cart Page End --> 

<!-- Orders Section End -->


<!-- Footer Section Start -->
@include('layouts.home.footer')


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

</body>

</html>