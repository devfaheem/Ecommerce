@extends('layouts.admin.app')

@section('content')
  <!--Main layout-->
<main class="pt-5 mx-lg-5">
     <div class="container-fluid mt-5">
    <!-- Heading --> 
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-3"><strong>List Product Category</strong></h4>
          <h5>
            <a href="{{ route('admin.productcategory.create') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button></a>
          </h5>

        </div> 
          <hr class="mb-0">
    </div>


    <div class="container-fluid"><br>
 
      <!-- Extended material form grid -->
<section class="section-preview">

    <!-- Extended material form grid -->
    <div class="container"> 

  <div class="row">

    <div class="col-md-12 order-md-1">
      @if(session('success_msg'))
     <div class="alert alert-success">
      {{ session('success_msg') }}
    </div>
    @endif
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">SL.NO
      </th>
      <th class="th-sm">Product Category Name
      </th>
      <th class="th-sm">Action
       </th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($productcategory as $key => $value)
    <tr>
      <td>{{ $i++ }}</td>
       <td>{{ $value->name }}</td>
      <td><a href="{{ route('productcategory.edit',$value->id) }}" class="btn btn-info btn-square"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>&nbsp;&nbsp;&nbsp; 
        {!! Form::open(['method' => 'DELETE','route' => ['productcategory.destroy', $value->id],'style'=>'display:inline']) !!}
            <button type="submit" class="btn btn-danger btn-square"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</button>
            {!! Form::close() !!}
          </td>
    </tr>
    @endforeach 
  </tbody>
  <tfoot>
    <tr>
      <th>SL.NO
      </th>
      <th>Product Category
      </th>
      <th>Action
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

