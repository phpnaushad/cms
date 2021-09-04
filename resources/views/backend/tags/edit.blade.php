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
              <form action="{{ route('tags.update', $tag->id) }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tag Name</label>
                    <input type="text" class="form-control" name="txtPostTag" id="txtPostTagId" placeholder="Enter Post Tag" value="{{ $tag->title }}">
                  </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Tag Slug</label>
                    <input type="text" class="form-control" name="txtPostTagSlug" id="txtPostTagSlugId" placeholder="Enter Post Tag" value="{{ $tag->slug }}">
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
