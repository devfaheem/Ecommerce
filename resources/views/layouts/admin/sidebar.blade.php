<div class="sidebar-fixed position-fixed">

      <a href="dashboard.html" class="logo-wrapper waves-effect">
        <img src="{{ asset('img/logo.jpg') }}" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}" class="@if(request()->segment(2) == 'dashboard') active @endif list-group-item waves-effect">
          <i class="fa fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="{{ route('admin.productcategory') }}" class="@if(request()->segment(2) == 'Products Category') active @endif list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Products Category</a>

           <!-- <a class="nav-link dropdown-toggle list-group-item" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><i class="fas fa-user mr-3"></i>Dropdown 1</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div> 
 -->
  <a href="{{ route('admin.brand') }}" class="list-group-item  list-group-item-action waves-effect">
          <i class="fab fa-btc mr-3"></i>Brands</a>

        <a href="{{ route('admin.product') }}" class="list-group-item list-group-item-action waves-effect">
          <i class="fab fa-product-hunt mr-3"></i>Products</a>
         <a href="{{ route('admin.customer') }}" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-users mr-3"></i>Users</a>

        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Payments</a>
        <a href="{{ route('admin.order') }}" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Orders</a>
      </div>

    </div>