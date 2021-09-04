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
              <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Banner Name</label>
                    <input type="text" class="form-control" name="txtTitle" id="txtTitleId" placeholder="Enter Banner Title" value="{{ $banner->banner_title }}">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Banner Description</label>                                    
                    <textarea  name="txtBannerDesp" id="txtBannerDespId" class="form-control" rows="4" placeholder="Enter Banner Description">{{ $banner->banner_detail }}</textarea>
                  </div>

                  <!--<div class="form-group">
                  <label for="exampleInputEmail1">Banner Image</label>   
                  <input type="file" name="txtBannerImage" id="txtBannerImageId" value="{{ $banner->banner_image }}">
                  </div>-->

<div class="form-group">
<label for="exampleInputEmail1">Banner Image</label>   
@if($banner->banner_image)
<img id="original" src="{{ url('public/image/banner/'.$banner->banner_image) }}" height="100" width="100">
@endif
 <input type="file" name="txtBannerImage" id="txtBannerImageId" value="{{ $banner->banner_image }}">
<span class="text-danger">{{ $errors->first('image') }}</span>
</div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>                    
                    <select name="txtStatus" id="txtStatusId" class="form-control custom-select">
                      <option value="">Select one</option>                     
                      <option value="1" {{ $banner->status == 1 ? 'selected="selected"' : '' }}>Active</option>
                      <option value="0" {{ $banner->status == 0 ? 'selected="selected"' : '' }}>Inactive</option>           
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
