@extends('layouts.admin.app')

@section('content') 

 <!--Main layout-->
  <main class="pt-5 mx-lg-5">
     <div class="container-fluid mt-5">
    <!-- Heading --> 
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-3"><strong>Edit Brand</strong></h4>
          
        </div> 
        <hr class="mb-0">
    </div>

    <div class="container-fluid"><br>
 
      <!-- Extended material form grid -->
<section class="section-preview">

    <!-- Extended material form grid -->
    <div class="container"> 

  <div class="row">
   
    <div class="col-md-8 order-md-1">
      
      {!! Form::model($brand, ['method' => 'PUT','route' => ['brand.update', $brand->id]]) !!} 

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
            <input type="text" id="name" name="name" value="{{ $brand->name }}" class="form-control" required>
            <label for="username">Brand Name</label>
          </div>
          <div class="invalid-feedback">
            Your Brand is required.
          </div>
        </div>

       <!--  <div class="mb-3">
          <div class="md-form md-outline my-2">
            <textarea  type="text" id="description" rows="4" cols="8" class="form-control" required></textarea>
            <label for="username">Description</label>
          </div>
          <div class="invalid-feedback">
            Your Description is required.
          </div>
        </div>
  -->
  <input type="hidden" value="{{ $brand->id }}" class="form-control" required>
        <hr class="mb-4">
        <button class="my-3 pt-3 btn btn-primary" type="submit">Update</button>
         
            <a href="{{ route('admin.brand') }}"><button type="button" class="btn btn-primary">Cancel</button></a>
           {!! Form::close() !!}</form>
    </div>
  </div>
 
</div>
    <!-- Extended material form grid -->
<!-- 
    <div class="container">
  <div class="row">
  <div class="col-sm-2 imgUp">
    <div class="imagePreview"></div>
<label class="btn btn-info">
                              Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
        </label>
  </div>
  <i class="fa fa-plus imgAdd"></i>
 </div>
</div> -->

  </section>
<!-- Extended material form grid -->

    </div>
  </main>
  <!--Main layout-->

 
@endsection
