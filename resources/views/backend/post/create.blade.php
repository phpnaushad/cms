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
              <form name="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Category Name</label>              
                    <select name="txtCategory" id="txtCategoryId" class="form-control custom-select">
                      <option value="">Select Category</option>                      
                      @foreach($category as $key=>$cat_data)
                          <option value='{{$cat_data->id}}'>{{$cat_data->title}}</option>
                      @endforeach
                    </select>
                  </div>

                   <label for="exampleInputEmail1">Tags Name</label>              
                    <select name="txtTag" id="txtTagId" class="form-control custom-select">
                      <option value="">Select Category</option>                      
                      @foreach($tags as $key=>$tag)
                        <option value='{{$tag->id}}'>{{$tag->title}}</option>
                      @endforeach
                    </select>

              <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2 select2-hidden-accessible form-control" multiple="" data-placeholder="Select a State">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" class="form-control" name="txtPostTitle" id="txtPostTitleId" placeholder="Enter Post Title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Slug</label>
                    <input type="text" class="form-control" name="txtPostSlug" id="txtPostSlugId" placeholder="Enter Post Slug">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Image</label>                    
                    <input type="file" class="form-control" name="txtPostImage" id="txtPostImageId">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Post Description</label>                                    
                    <textarea  name="txtPostDesp" id="txtPostDespId" class="form-control" rows="4" placeholder="Enter Product Description"></textarea>
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Post Quote</label>                                    
                    <textarea  name="txtPostQuote" id="txtPostQuoteId" class="form-control" rows="4" placeholder="Enter Product Quote"></textarea>
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