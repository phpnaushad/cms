<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Login Page</title>  
  @include('backend.layouts.head')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h2"><b>Admin</b></a>
    </div>
    <div class="card-body">      

     <form action="{{url('post-login')}}" method="POST" id="logForm">
        {{ csrf_field() }}
        
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>
          @if ($errors->has('email'))
            <span class="alert-danger">{{ $errors->first('email') }}</span>
          @endif 
        </div>
        
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
           <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>
          @if ($errors->has('password'))
              <span class="alert-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember"> Remember Me</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>            
          </div>
          <!-- /.col -->
        </div>
        
      </form>

      <p class="mb-1"> <a href="#">Forgot Password</a> </p>
      <p class="mb-0"><a href="#" class="text-center">Register</a></p>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>

</body>
</html>