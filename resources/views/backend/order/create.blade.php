@extends('backend.layouts.master') 
@section('title','E-SHOP || DASHBOARD') 
@section('main-content')
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
            <h3 class="card-title">Create Customer Order</h3>
           </div> 
          <form action="{{ route('order.store') }}" method="post">
            <div class="card-body">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="txtCustUserName" id="txtCustUserNameId" placeholder="Enter Name">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="txtCustPassword" id="txtCustPasswordId" placeholder="Password">
                  </div>
                </div>

              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="txtCustEmail" id="txtCustEmailId" placeholder="Enter email">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="number" class="form-control" name="txtCustMobile" id="txtCustMobileId" placeholder="Enter Mobile no">
                  </div>
                </div>

            </div>    

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">First Name</label>
                      <input type="text" class="form-control" name="txtCustFirstName" id="txtCustFirstNameId" placeholder="Enter First Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Last Name</label>
                      <input type="text" class="form-control" name="txtCustLastName" id="txtCustLastNameId" placeholder="Enter Last Name">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control" name="txtCustAddress" id="txtCustAddressId" class="form-control" rows="4" placeholder="Enter Address"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Landmark</label>
                      <input type="text" class="form-control" name="txtCustLandmark" id="txtCustLandmarkId" placeholder="Enter Landmark">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">City</label>
                      <input type="text" class="form-control" name="txtCustCity" id="txtCustCityId" placeholder="Enter city">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">State</label>
                      <input type="text" class="form-control" name="txtCustState" id="txtCustStateId" placeholder="Enter State">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Country</label>
                      <input type="text" class="form-control" name="txtCustCountry" id="txtCustCountryId" placeholder="Enter Country">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Postalcode</label>
                      <input type="text" class="form-control" name="txtCustPincode" id="txtCustPincodeId" placeholder="Enter Postalcode">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Status</label>
                      <select name="txtStatus" id="txtStatusId" class="form-control custom-select">
                        <option value="">Select one</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->  
<hr>  
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Courier Charge</label>
          <input type="number" class="form-control" name="txtCourier" placeholder="Enter Courier">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Discount</label>
          <input type="number" class="form-control" name="txtDiscount" placeholder="Enter Discount">
        </div>
      </div>
    </div>
 <div class="row clearfix"></div>
 </div>                

<hr>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12">
     <table class="table table-bordered table-hover" id="dynamic_field">
            <tr>
              <td>
              <select name="txtProduct[]" id="txtProductId" class="form-control custom-select">
                <option value="">Select Product</option>
                @foreach($products as $key=>$pro_data)
                    <option value='{{$pro_data->id}}'>{{$pro_data->product_name}}</option>
                @endforeach
              </select>
              </td>
              <td><input type="text" name="txtPrice[]" placeholder="Enter Price" class="form-control" /></td>
              <td><input type="text" name="txtQty[]" placeholder="Enter QTY" class="form-control"/></td>
              <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>  
            </tr>
      </table>
    </div>
  </div>
             <div class="row clearfix"></div>

                <div class="card-footer">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="txtProduct[]" id="txtProductId" class="form-control custom-select"><option value="">Select Product</option>@foreach($products as $key=>$pro_data)<option value={{$pro_data->id}}>{{$pro_data->product_name}}</option>@endforeach</select></td><td><input type="text" name="txtPrice[]" placeholder="Enter Price" class="form-control" /></td><td><input type="text" name="txtQty[]" placeholder="Enter QTY" class="form-control"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
    });

    $(document).on('click', '.btn_remove', function(){  
      var button_id = $(this).attr("id");   
      $('#row'+button_id+'').remove();  
    });

    /*$("#submit").on('click',function(){
      var formdata = $("#add_name").serialize();
      $.ajax({
        url   :"action.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#add_name")[0].reset();
        }
      });
    });*/
  
  });
</script>

<script type=text/javascript>
 $('#txtProductId').on('change', function(e){
  console.log(e);
  var countryID = $(this).val(); 
  alert(countryID);
  if(countryID){
    $.ajax({
      type:"GET",
      url:"{{url('getprice')}}?product_id="+countryID,
      success:function(res){ 
      if(res){
        $("#state").empty();
        $("#state").append('<option>Select</option>');
        $.each(res,function(key,value){
           alert('rttttjhhhh');     
          $("#state").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#state").empty();
      }
      }
    });
  }else{
    $("#state").empty();
    $("#city").empty();
  }   
  }); 
</script>


