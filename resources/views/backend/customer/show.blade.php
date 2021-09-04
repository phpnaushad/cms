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
            <h3 class="card-title">Profile Customer</h3>
           </div> 
                <div class="card-body">
                    <div class="row">                     

                      <div class="col-md-12">
                      <strong><i class="fas fa-user" aria-hidden="true"></i>Name</strong>
                          <p class="text-muted">
                            {{ $customer->first_name }} &nbsp; {{ $customer->last_name }}
                          </p>
                      </div> 

                      <div class="col-md-12">
                      <strong><i class="fas fa-mobile" aria-hidden="true"></i> Mobile</strong>
                          <p class="text-muted">
                            {{ $customer->mobile }}
                          </p>
                      </div> 

                     
                      <div class="col-md-12">
                      <strong> <i class="fas fa-envelope" aria-hidden="true"></i> Email</strong>
                          <p class="text-muted">
                            {{ $customer->email }}
                          </p>
                      </div>            
                     
                   
                      <div class="col-md-12">
                      <strong><i class="fa fa-key" aria-hidden="true"></i>Username</strong>
                          <p class="text-muted">
                            {{ $customer->username }}
                          </p>
                      </div> 
                      
                      
                      <div class="col-md-12">
                          <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
                          <p class="text-muted">  {{ $customer->address }}</p>
                      </div>


                      <div class="col-md-12">
                      <strong><i class="fa fa-city" aria-hidden="true"></i>City</strong>
                          <p class="text-muted">
                            {{ $customer->city }}
                          </p>
                      </div> 

                      
                      <div class="col-md-12">
                      <strong><i class="fal fa-landmark"></i>Landmark</strong>
                          <p class="text-muted">
                            {{ $customer->landmark }}
                          </p>
                      </div> 

                      <div class="col-md-12">
                      <strong><i class="fas fa-book mr-1"></i>Country</strong>
                          <p class="text-muted">
                            {{ $customer->country }}
                          </p>
                      </div> 

                      <div class="col-md-12">
                      <strong><i class="far fa-file-alt mr-1"></i> Pincode</strong>
                          <p class="text-muted">
                            {{ $customer->pincode }}
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