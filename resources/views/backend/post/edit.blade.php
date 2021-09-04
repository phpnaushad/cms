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
           <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Category Name</label>              
                    <select name="txtCategory" id="txtCategoryId" class="form-control custom-select">
                      <option value="">Select Category</option>                      
                      @foreach($category as $key=>$cat_data)
                          <option value='{{$cat_data->id}}' {{ ( $cat_data->id == $post->post_cat_id) ? 'selected' : '' }}>{{$cat_data->title}}</option>

                      @endforeach
                    </select>
                  </div>

                   <label for="exampleInputEmail1">Tags Name</label>              
                    <select name="txtTag" id="txtTagId" class="form-control custom-select">
                      <option value="">Select Tags</option>                      
                      @foreach($tags as $key=>$tag)
                          <option value='{{$tag->id}}' {{ ( $cat_data->id == $post->post_tag_id) ? 'selected' : '' }}>{{$tag->title}}</option>
                      @endforeach
                    </select>

              <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                  
                  <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 492.5px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                </div>
                 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" class="form-control" name="txtPostTitle" id="txtPostTitleId" placeholder="Enter Post Title" value="{{ $post->title }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Slug</label>
                    <input type="text" class="form-control" name="txtPostSlug" id="txtPostSlugId" placeholder="Enter Post Slug" value="{{ $post->slug }}">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Image</label>                    
                    <input type="file" class="form-control" name="txtPostImage" id="txtPostImageId" value="{{ $post->image }}">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Post Description</label>                                    
                    <textarea  name="txtPostDesp" id="txtPostDespId" class="form-control" rows="4" placeholder="Enter Product Description">{{ $post->description }}</textarea>
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Post Quote</label>                                    
                    <textarea  name="txtPostQuote" id="txtPostQuoteId" class="form-control" rows="4" placeholder="Enter Product Quote">{{ $post->quote }}</textarea>
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>                    
                    <select name="txtStatus" id="txtStatusId" class="form-control custom-select">
                      <option value="">Select one</option>
                      <option value="1" {{ $post->status == 1 ? 'selected="selected"' : '' }}>Active</option>
                      <option value="0" {{ $post->status == 0 ? 'selected="selected"' : '' }}>Inactive</option>  
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