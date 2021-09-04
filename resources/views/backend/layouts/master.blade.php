<!DOCTYPE html>
<html lang="en">
@include('backend.layouts.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   @include('backend.layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend.layouts.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v3</h1>
			 <?php //dd(session()->all()); 
			 /*if(session()->get('email')){
				print session()->get('email'); 
			 }else {
				//return Redirect::to("http://localhost/demo/cms/public");
				header("Location: http://localhost/demo/cms/public");
			 }*/			 
			 ?>				
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
      <div class="content">
         @include('backend.layouts.notification')

      @yield('main-content')
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @include('backend.layouts.footer')
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }} "></script>
<!-- Bootstrap -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<!-- AdminLTE -->
<script src="{{ asset('backend/dist/js/adminlte.js') }} "></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }} "></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard3.js') }} "></script>

<script src="{{ asset('backend/plugins/jquery-validation/jquery.validate.min.js') }} "></script>
<script src="{{ asset('backend/plugins/jquery-validation/additional-methods.min.js') }} "></script>

<script>
    $(".delete").on("submit", function(){
        return confirm("Are you sure?");
    });
</script>

</body>
</html>
