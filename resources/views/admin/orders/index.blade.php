@extends('layouts.admin.app')

@section('content')
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
     <div class="container-fluid mt-5">
    <!-- Heading --> 
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-3"><strong>List Orders</strong></h4> 

        </div> 
        <hr class="mb-0">
    </div>


    <div class="container-fluid"><br>
 
      <!-- Extended material form grid -->
<section class="section-preview">

    <!-- Extended material form grid -->
    <div class="container"> 

  <div class="row" style="overflow-x: scroll;">
   
    <div class="col-md-12 order-md-1">
      
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr> 
      <th class="th-sm">SL.NO
      </th>
      <th class="th-sm">Order Number
      </th>
       <th class="th-sm"> Customer
      </th>
       <th class="th-sm">Total
      </th>
      <th class="th-sm">Order Date 
      </th> 
       <th class="th-sm">Status
      </th>
      <th class="th-sm">Action
       </th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>2</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>3</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>4</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td>  
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>5</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td>  
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>6</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>7</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>8</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td>  
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>9</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>10</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>11</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>12</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>13</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>14</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>15</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td>  
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>16</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>17</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>18</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>19</td>
        <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>20</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>21</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>22</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>23</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>24</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>25</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>26</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>27</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>28</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>29</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td>
        <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>30</td>
       <td>765769809</td>
      <td>Nixon</td>
      <td><i class="fas fa-rupee-sign"></i> 1299</td>
      <td>Mar 10, 2017 11:28 am</td> 
      <td>Pending</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr> 
  </tbody>
  <tfoot>
     <tr>
      <th class="th-sm">SL.NO
      </th>
      <th class="th-sm">Order Number
      </th>
       <th class="th-sm">Customer
      </th>
       <th class="th-sm">Total
      </th>
      <th class="th-sm">Order Date 
      </th> 
       <th class="th-sm">Status
      </th>
      <th class="th-sm">Action
       </th>
    </tr>
  </tfoot>
</table>
    </div>
  </div>
 
</div>
    <!-- Extended material form grid -->

  </section>
<!-- Extended material form grid -->

    </div>
  </main>
  <!--Main layout-->

  @endsection

