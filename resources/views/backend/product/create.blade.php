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
              <form name="" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Category Name</label>              
                    <select name="txtCategory" id="txtCategoryId" class="form-control custom-select">
                      <option value="">Select Category</option>                      
                      @foreach($categories as $key=>$cat_data)
                          <option value='{{$cat_data->id}}'>{{$cat_data->category_name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="txtProduct" id="txtProductId" placeholder="Enter Product Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Image</label>                    
                    <input type="file" class="form-control" name="txtProductImage" id="txtProductImageId">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Product Description</label>                                    
                    <textarea  name="txtProductDesp" id="txtProductDespId" class="form-control" rows="4" placeholder="Enter Product Description"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" class="form-control" name="txtProductPrice" id="txtProductPriceId" placeholder="Enter Product Price">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Product SKU</label>
                    <input type="text" class="form-control" name="txtProductSku" id="txtProductSkuId" placeholder="Enter Product SKU">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Stock Quantity</label>
                    <input type="text" class="form-control" name="txtProductStock" id="txtProductStockId" placeholder="Enter Product Stock">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Product GRN</label>
                    <input type="text" class="form-control" name="txtProductGrn" id="txtProductGrnId" placeholder="Enter Product GRN">
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
