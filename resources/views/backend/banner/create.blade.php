@extends('backend.layouts.master')
@section('title','E-SHOP || DASHBOARD')
@section('main-content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
               @endif

              <!-- form start -->
              <form name="" action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Banner Title</label>
                    <input type="text" class="form-control" name="txtTitle" id="txtTitleyId" placeholder="Enter Banner Title Name">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Banner Description</label>                                    
                    <textarea  name="txtBannerDesp" id="txtBannerDespId" class="form-control" rows="4" placeholder="Enter Category Description"></textarea>
                  </div>

                   <div class="form-group">
                  <label for="exampleInputEmail1">Banner Image</label>                                    
                   <input type="file" name="txtBannerImage" id="txtBannerImageId" placeholder="select banner image">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>                    
                    <select name="txtStatus" id="txtStatusId" class="form-control custom-select">
                      <option value="">Select one</option>
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>                     
                  </select>
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



