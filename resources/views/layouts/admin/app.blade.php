<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/addons/datatables.min.css') }}" rel="stylesheet">
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
.file-field.medium .file-path-wrapper {
height: 3rem; }
.file-field.medium .file-path-wrapper .file-path {
height: 2.8rem; }

.file-field.big-2 .file-path-wrapper {
height: 3.7rem; }
.file-field.big-2 .file-path-wrapper .file-path {
height: 3.5rem; }

.form-check-input[type=checkbox].filled-in:checked+label:after, 
label.btn input[type=checkbox].filled-in:checked+label:after {
  border: 2px solid #4285f4;
  background-color: #4285f4;
}
.mb-4-5 {
  margin-bottom: 24px;
}


    .input-default-js{
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;

}
    .input-default-js + label {
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    color: #000;
}

.input-default-js:focus + label {
    border-color: #80bdff;
    outline: 0 ;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.15);
}
.input-default-js + label {
    border: 1px solid rgba(33, 47, 41, .2);
    background-color: transparent;
    padding: 0;
}

.input-default-js + label span{
    padding: 0.425rem .7rem;
    color: #495057;
}

.input-default-js + label span:not(.span-browse) {
    width: 200px;
    display: inline-block;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    vertical-align: top;
}

.input-default-js + label .span-browse {
    height: 100%;
    color: #000;
    background-color: #E8EBEF;
    border-left: 1px solid rgba(33, 47, 41, .2);
    display: inline-block;
    padding: 0.425rem .8rem;
    color: #495057;
}

@media screen and (max-width: 50em) {
  .input-default-js + label .span-browse {
    display: block;
  }
}

.label-for-default-js{
  width: 100%;
  height: calc(2.25rem + 2px);
}
  </style>
</head>

<body class="grey lighten-3">
    <div id="app">
  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
         @include('layouts.admin.header')
    <!-- Navbar -->

    <!-- Sidebar -->
         @include('layouts.admin.sidebar')
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->
        @yield('content')
    </div>

    <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">
 

    <!-- Social icons -->
    <!-- <div class="pb-4">
      <a href="#" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-google-plus mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div> -->
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright
      <a href="#" target="_blank"> xyz.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
 
  <script src="{{ asset('js/app.js') }}"></script>


    <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="{{ asset('js/addons/datatables.min.js') }}"></script>


    @section('scripts')
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();


     $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});


  </script>

  @endsection 

</body>
</html>
