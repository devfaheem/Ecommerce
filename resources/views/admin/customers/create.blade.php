@extends('layouts.admin.app')

@section('content') 

   <!--Main layout-->
  <main class="pt-5 mx-lg-5">
     <div class="container-fluid mt-5">
    <!-- Heading --> 
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-3"><strong>Add Users</strong></h4>
          
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
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" id="firstName" class="form-control" required>
              <label for="firstName">First name</label>
            </div>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" id="lastName" class="form-control" required>
              <label for="lastName">Last name</label>
            </div>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div> 

        <div class="row">
          <div class="col-12 mb-3">
            <div class="md-form md-outline my-2">
              <input type="email" id="email" class="form-control" required="">
              <label for="email">Email</label>
            </div>
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>


        <div class="row" style="margin-left: 0px">
          <div class="col-12 mb-3">
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" checked="">
              <label class="form-check-label">Male</label>
              </div>

              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
              <label class="form-check-label">Female</label>
              </div>
        </div>
        </div>

          <div class="col-12 mb-3">
            <div class="md-form md-outline my-2">
              <textarea  type="text" id="address" rows="4" cols="8" class="form-control" required></textarea>
              <label for="address">Address</label>
            </div>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="col-12 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" id="phone" class="form-control" required>
              <label for="phone">Phone</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <select class="custom-select d-block w-100 mt-2" id="country" required>
              <option value="">Country</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <select class="custom-select d-block w-100 mt-2" id="state" required>
              <option value="">State</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
           <div class="col-md-4 mb-3">
            <select class="custom-select d-block w-100 mt-2" id="state" required>
              <option value="">City</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid City.
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-6 mb-3">
             <div class="md-form md-outline mt-2 mb-0">
              <input type="text" id="zip" class="form-control mb-0" required>
              <label for="zip">Zip</label>
            </div>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
 

        <hr class="mb-4">
        <button class="btn btn-primary" type="submit">Save</button> 
            <a href="{{ route('admin.customer') }}"><button type="button" class="btn btn-primary">Cancel</button></a> 
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