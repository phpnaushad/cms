@extends('backend.layouts.master')
@section('title','E-SHOP || DASHBOARD')
@section('main-content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products</h3>               
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"> 

                      <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Category</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Product Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Product Image</th>                            
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">STATUS</th>
                            <th class="align-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="CSS grade: activate to sort column ascending">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($products as $product)
                         @php 
                    $cat_name = DB::table('category')->select('category_name')->where('id',$product->category_id)->get();                         
                         @endphp
                          <tr>
                              <td>{{$product->id}}</td>
                              <td>                                
                                @foreach($cat_name as $data)
                                  {{ $data->category_name }}
                                @endforeach                            
                              </td>
                              <td>{{ $product->product_name }}</td>
                              <td>{{ $product->product_price }}</td>
                             <td>
                              @if($product->product_image)
                                  <img src="{{ URL::to('/') }}/public/image/{{$product->product_image}}" style="max-width:50px" alt="{{$product->product_image}}">
                              @else
                                  <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                              @endif
                             </td>
                              <td>@if($product->status == '1') Active @else Inactive @endif </td>                          
                              <td><a href="{{ route('product.edit', $product->id) }}"><i class="fas fa-edit fa-lg"></i></a>
                              </td>
                               <td>
								<form action="{{ route('product.destroy', $product->id) }}" onsubmit="return confirm('Are you sure?');"  method="post">
                                  @csrf
                                  @method('DELETE')               
                                 <button class="btn btn-warning" type="submit">
                                  <i class="fas fa-trash-alt fa-lg"></i>
                                </button>                                 
                                </form>
                              </td>                              
                          </tr>
                          @endforeach
                        </tbody>
                       

                      </table>
                        {{  $products->links()  }}
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
@endsection
