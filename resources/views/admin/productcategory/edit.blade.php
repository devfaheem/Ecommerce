@extends('layouts.admin.app')

@section('content')
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
     <div class="container-fluid mt-5">
    <!-- Heading --> 
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-3"><strong>Edit Product Category</strong></h4>
          
        </div> 

    </div>

    <div class="container-fluid"><br>
 
      <!-- Extended material form grid -->
<section class="section-preview">

    <!-- Extended material form grid -->
    <div class="container"> 

  <div class="row">
   
    <div class="col-md-8 order-md-1">
      
       {!! Form::model($productcategory, ['method' => 'PUT','route' => ['productcategory.update', $productcategory->id]]) !!} 

           {{ csrf_field() }} 

           @if(count($errors) > 0)
            @foreach($errors->all() as $error)
              <div class="alert alert-danger">
                  {{ $error }}
              </div>
              @endforeach
           @endif
        <div class="mb-3">
          <div class="md-form md-outline my-2">
            <input type="text" id="name" name="name" value="{{ $productcategory->name }}" class="form-control" required>
            <label for="username">Product Category Name</label>
          </div>
          <div class="invalid-feedback">
            Your product Category is required.
          </div>
        </div>
   <input type="hidden" value="{{ $productcategory->id }}" class="form-control" required>
        <hr class="mb-4">
        <button class="my-3 pt-3 btn btn-primary" type="submit">Save</button> 
            <a href="{{ route('admin.productcategory') }}"><button type="button" class="btn btn-primary">Cancel</button></a> 

    {!! Form::close() !!}
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
