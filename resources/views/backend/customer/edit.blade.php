@extends('backend.layouts.master') @section('title','E-SHOP || DASHBOARD') @section('main-content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">@if ($errors->any())
          <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)
              <li>{{ $error }}</li>@endforeach</ul>
          </div>
          <br />@endif
          <!-- form start -->
          <div class="card-header">
            <h3 class="card-title">Create Customer</h3>
           </div> 
          <form action="{{ route('customer.update', $customer->id) }}" method="post">
              @csrf
              @method('PUT')
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="txtCustUserName" id="txtCustUserNameId" placeholder="Enter Name" value="{{ $customer->username }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                   <input type="password" class="form-control" name="txtCustPassword" id="txtCustPasswordId" placeholder="Password" value="{{ $customer->password }}">
                  </div>
                </div>
              </div>

             
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="txtCustEmail" id="txtCustEmailId" placeholder="Enter email" value="{{ $customer->email }}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="number" class="form-control" name="txtCustMobile" id="txtCustMobileId" placeholder="Enter Mobile no" value="{{ $customer->mobile }}">
                  </div>
                </div>

            </div>   

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">First Name</label>
                      <input type="text" class="form-control" name="txtCustFirstName" id="txtCustFirstNameId" placeholder="Enter First Name" value="{{ $customer->first_name }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Last Name</label>
                      <input type="text" class="form-control" name="txtCustLastName" id="txtCustLastNameId" placeholder="Enter Last Name" value="{{ $customer->last_name }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control" name="txtCustAddress" id="txtCustAddressId" class="form-control" rows="4" placeholder="Enter Address">{{ $customer->address }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Landmark</label>
                      <input type="text" class="form-control" name="txtCustLandmark" id="txtCustLandmarkId" placeholder="Enter Landmark" value="{{ $customer->landmark }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">City</label>
                      <input type="text" class="form-control" name="txtCustCity" id="txtCustCityId" placeholder="Enter city" value="{{ $customer->city }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">State</label>
                      <input type="text" class="form-control" name="txtCustState" id="txtCustStateId" placeholder="Enter State" value="{{ $customer->state }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Country</label>
                      <input type="text" class="form-control" name="txtCustCountry" id="txtCustCountryId" placeholder="Enter Country" value="{{ $customer->country }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Postalcode</label>
                      <input type="text" class="form-control" name="txtCustPincode" id="txtCustPincodeId" placeholder="Enter Postalcode" value="{{ $customer->pincode }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Status</label>
                       <select name="txtStatus" id="txtStatusId" class="form-control custom-select">
                      <option value="">Select one</option>                     
                      <option value="1" {{ $customer->status == 1 ? 'selected="selected"' : '' }}>Active</option>
                      <option value="0" {{ $customer->status == 0 ? 'selected="selected"' : '' }}>Inactive</option>           
                  </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
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
