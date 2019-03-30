@extends('layouts.admin.app')

@section('content') 

  
 
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
     <div class="container-fluid mt-5">
    <!-- Heading --> 
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-3"><strong>Add Products</strong></h4>   

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
      
      <form class="needs-validation" novalidate method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
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
            <input type="text" id="sku" name="sku" class="form-control" required>
            <label for="username">SKU</label>
          </div>
          <div class="invalid-feedback">
            Your SKU is required.
          </div>
        </div>

        <div class="mb-3">
          <div class="md-form md-outline my-2">
            <input type="text" id="name" name="name" class="form-control" required>
            <label for="username">Product Name</label>
          </div>
          <div class="invalid-feedback">
            Your Product is required.
          </div>
        </div>

        <div class="mb-3">
          <div class="md-form md-outline my-2">
            <textarea  type="text" id="description" rows="4" cols="8" class="form-control" name="description" required></textarea>
            <label for="username">Description</label>
          </div>
          <div class="invalid-feedback">
            Your Description is required.
          </div>
        </div>


        <div class="mb-3">
          <!-- <label for="username">Brand</label> -->
            <select class="custom-select d-block w-100 mt-2" id="brand_id" name="brandname" required>
              <option>-- Select Brand --</option>
               @foreach ($brand as $brands) 
          {
            <option value="{{ $brands->id }}">{{ $brands->name }}</option>
          }
          @endforeach
            </select> 
          </div>

           <div class="mb-3">
          <!-- <label for="username">Category</label> -->
            <select class="custom-select d-block w-100 mt-2" id="productcategory_id" name="productcategory" required>
              <option>-- Select Category --</option>
               @foreach ($productcategory as $category) 
          {
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          }
          @endforeach
            </select> 
          </div>

        <div class="mb-3">
          <div class="md-form md-outline my-2">
            <input type="text" id="quantity"  name="quantity" class="form-control" required>
            <label for="username">Quantity</label>
          </div> 
        </div>

        <div class="mb-3">
          <div class="md-form md-outline my-2">
            <input type="text" id="price" name="price" class="form-control" required>
            <label for="username">Price</label>
          </div>
          <div class="invalid-feedback">
            Your Price is required.
          </div>
        </div>

        <label for="username">Product Image</label> <br>
      <input type="file" id="file-with-multi-file"  name="image"><br> 

      <label for="username">Product Image 1</label> <br>
      <input type="file" id="file-with-multi-file"  name="image1"><br> 

      <label for="username">Product Image 2</label> <br>
      <input type="file" id="file-with-multi-file"  name="image2"> <br>

      <label for="username">Product Image 3</label> <br>
      <input type="file" id="file-with-multi-file"  name="image3"> 


 
        <hr class="mb-4">
        <button class="my-3 pt-3 btn btn-primary" type="submit">Save</button> 
            <a href="{{ route('admin.product') }}"><button type="button" class="btn btn-primary">Cancel</button></a> 
      </form>
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

   @section('scripts')
  <!-- Initializations -->
  <script type="text/javascript">

      $(document).on('change', '.input-default-js', (e) => {

        const $this = $(e.target),
          $label = $this.next('label'),
          $files = $this[0].files;
        let fileName = '';

        if ($files && $files.length > 1)
          fileName = ($this.attr('data-multiple-target') || '').replace('{count}', $files.length);
        else if (e.target.value)
          fileName = e.target.value.split('\\').pop();

        if (fileName) {
          $label.find('.span-choose-file').html(fileName);
        } else {
          $label.html($label.html());
        }

      });
</script>
@endsection