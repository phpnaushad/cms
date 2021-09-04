@extends('backend.layouts.master') @section('title','E-SHOP || DASHBOARD') @section('main-content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">@if ($errors->any())
          <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)
              <li>{{ $error }}</li>@endforeach</ul>
          </div>
          <br />@endif
          <!-- form start -->
          <div class="card-header">
            <h3 class="card-title">Post Preview</h3>
           </div> 
                <div class="card-body">
                    <div class="row">                     

                      <div class="col-md-12">
                      <strong><i class="fas fa-user" aria-hidden="true"></i>Title</strong>
                          <p class="text-muted">
                            {{ $post->title }} &nbsp; {{ $post->slug }}
                          </p>
                      </div> 

                      <div class="col-md-12">
                      <strong><i class="fas fa-mobile" aria-hidden="true"></i> Post Category</strong>
                          <p class="text-muted">
                            {{ $post->post_cat_id }}
                          </p>
                      </div> 

                     
                      <div class="col-md-12">
                      <strong> <i class="fas fa-envelope" aria-hidden="true"></i> Post Tags</strong>
                          <p class="text-muted">
                            {{ $post->tags }}
                          </p>
                      </div>            
                     
                   
                      <div class="col-md-12">
                      <strong><i class="fa fa-key" aria-hidden="true"></i>Image</strong>
                          <p class="text-muted">                        
                             <img src="{{ URL::to('/') }}/public/image/{{$post->image}}" style="max-width:100px" alt="{{$post->image}}">
                          </p>
                      </div> 
                      
                      
                      <div class="col-md-12">
                          <strong><i class="fas fa-map-marker-alt mr-1"></i> Description</strong>
                          <p class="text-muted">  {{ $post->description }}</p>
                      </div>


                      <div class="col-md-12">
                      <strong><i class="fa fa-city" aria-hidden="true"></i>Quote</strong>
                          <p class="text-muted">
                            {{ $post->quote }}
                          </p>
                      </div> 

                      
                      <div class="col-md-12">
                      <strong><i class="fal fa-landmark"></i>Status</strong>
                          <p class="text-muted">
                            @if($post->status == '1') Active @else Inactive @endif
                          </p>
                      </div> 



                    </div>                    
                </div>
              
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    @endsection