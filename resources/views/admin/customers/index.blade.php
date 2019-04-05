@extends('layouts.admin.app')

@section('content') 

  <!--Main layout-->

<main class="pt-5 mx-lg-5">
     <div class="container-fluid mt-5">
    <!-- Heading --> 
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-3"><strong>List Users</strong></h4>
          <!-- <h5>
            <a href="{{ route('admin.customer.create') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button></a>
          </h5>
 -->
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
      <th class="th-sm">Firstname
      </th>
       <th class="th-sm"> Lastname
      </th>
       <th class="th-sm">Email
      </th>
      <th class="th-sm">Gender 
      </th>
       <th class="th-sm">phone 
      </th>
       <th class="th-sm">Address 
      </th>
       <th class="th-sm">Country
      </th>
       <th class="th-sm">State
      </th>
       <th class="th-sm">City
      </th>
       <th class="th-sm">Zipcode
      </th>
      <th class="th-sm">Action
       </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>2</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>3</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>4</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>5</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>6</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>7</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>8</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>9</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>10</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>11</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>12</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>13</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>14</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>15</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td> 
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>16</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>17</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>18</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>19</td>
       <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>20</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>21</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>22</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>23</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>24</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>25</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>26</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>27</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>28</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
    <tr>
      <td>29</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr>
   <tr>
      <td>30</td>
      <td>Tiger</td>
      <td>Nixon</td>
      <td>Nixon@gmail.com</td>
      <td>Male</td>
      <td>9087886766</td>
      <td>abcdef</td>
      <td>India</td>
      <td>Karnataka</td>
      <td>Bangalore</td>
      <td>6868787</td>
      <td><a href=""><button type="button" class="btn btn-info btn-square btn-square">Edit</button></a>&nbsp;&nbsp;&nbsp;<a href=""><button type="button" class="btn btn-danger btn-square btn-square">Delete</button></a></td> 
    </tr> 
  </tbody>
  <tfoot>
     <tr>
      <th class="th-sm">SL.NO
      </th>
      <th class="th-sm">Firstname
      </th>
       <th class="th-sm"> Lastname
      </th>
       <th class="th-sm">Email
      </th>
      <th class="th-sm">Gender 
      </th>
       <th class="th-sm">phone 
      </th>
       <th class="th-sm">Address 
      </th>
       <th class="th-sm">Country
      </th>
       <th class="th-sm">State
      </th>
       <th class="th-sm">City
      </th>
       <th class="th-sm">Zipcode
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

