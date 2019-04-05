@extends('layouts.admin.app')

@section('content') 

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
     <div class="container-fluid mt-5">
    <!-- Heading --> 
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-3"><strong>List Products</strong></h4>
          <h5>
            <a href="{{ route('admin.product.create') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button></a>
          </h5>

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
      <th class="th-sm">SKU
      </th>
      <th class="th-sm">Brand 
      </th> 
       <th class="th-sm">Category 
      </th> 
       <th class="th-sm">Product Name
      </th>
       <th class="th-sm">Description
      </th>

       <th class="th-sm">Quantity
      </th>
       <th class="th-sm">Price
      </th>
      <th class="th-sm">Size
      </th>

       <th class="th-sm">Color
      </th>
       <th class="th-sm">Stocks
      </th>
       <th class="th-sm">Product Image
      </th>
      <th class="th-sm">Product Image 1
      </th>
      <th class="th-sm">Product Image 2
      </th>
      <th class="th-sm">Product Image 3
      </th>
       <th class="th-sm">Status
      </th>
      <th class="th-sm">Action
       </th>
    </tr>
  </thead>
  <tbody>
   <?php $i=1; ?>
    @foreach($products as $key => $value)
    <tr>
      <td>{{ $i++ }}</td>
       <td>{{ $value->sku }}</td>
       <td>{{ $value->brand }}</td>
        <td>{{ $value->productcategory }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->description }}</td>
        <td>{{ $value->quantity }}</td>
        <td>{{ $value->price }}</td>
        <td>{{ $value->size }}</td>
        <td>{{ $value->color }}</td>
        <td>{{ $value->stocks }}</td>
        <td><a href='{{ asset("images/$value->image") }}'><img src="{{ asset('images/'.$value->image) }}" width="100px"></a></td>
        <td><a href='{{ asset("images/$value->image1") }}'><img src="{{ asset('images/'.$value->image1) }}" width="100px"></a></td>
        <td><a href='{{ asset("images/$value->image2") }}'><img src="{{ asset('images/'.$value->image2) }}" width="100px"></a></td>
         <td><a href='{{ asset("images/$value->image3") }}'><img src="{{ asset('images/'.$value->image3) }}" width="100px"></a></td>
        <td>{{ $value->status }}</td> 
      <td><a href="{{ route('product.edit',$value->id) }}" class="btn btn-info btn-square"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>&nbsp;&nbsp;&nbsp; 
            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$value->id}})" data-target="#DeleteModal" class="btn btn-danger btn-square"><i class="fa fa-trash"></i> Delete</a> 
          </td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
     <th class="th-sm">SL.NO
      </th>
      <th class="th-sm">SKU
      </th>
       <th class="th-sm">Product Name
      </th>
       <th class="th-sm">Description
      </th>
       <th class="th-sm">Brand 
      </th>
       <th class="th-sm">Category 
      </th>
       <th class="th-sm">Quantity
      </th>
       <th class="th-sm">Price
      </th>
       <th class="th-sm">Product Image
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

  <div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are You Sure Want To Delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>

   <script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("product.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>

@endsection

