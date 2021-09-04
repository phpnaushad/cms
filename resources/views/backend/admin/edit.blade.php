@extends('backend.layouts.master')
@section('title','E-SHOP || DASHBOARD')
@section('main-content')
   <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                
              <!-- form start -->
              <form name="" action="{{ route('admin.update', $user->id) }}" method="post">
                 @csrf
                 @method('PUT')
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="txtUserName" id="txtUserNameId" placeholder="Enter Name" value="{{ $user->name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="txtEmail" id="txtEmailId" placeholder="Enter email" value="{{ $user->email }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="txtPassword" id="txtPasswordId" placeholder="Password" value="{{ $user->password }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="txtCnfrmPassword" id="txtCnfrmPasswordId" placeholder="Confirm Password" value="">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                         
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
@endsection
