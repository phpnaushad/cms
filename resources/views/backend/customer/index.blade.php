@extends('backend.layouts.master')
@section('title','E-SHOP || DASHBOARD')
@section('main-content')
 <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customer List</h3>              
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
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">NAME</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">EMAILS</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Mobile</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">City</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">STATUS</th>
                            <th class="align-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="CSS grade: activate to sort column ascending">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($customers as $customer)
                          <tr>
                              <td>{{$customer->id}}</td>
                              <td>{{$customer->first_name}}</td>
                              <td>{{$customer->email}}</td>
                              <td>{{$customer->mobile}}</td>
                              <td>{{$customer->city}}</td>
                              <td>@if($customer->status == '1') Active @else Inactive @endif </td>   
                              <td><a href="{{ route('customer.show', $customer->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                              <td><a href="{{ route('customer.edit', $customer->id) }}">
                                <i class="fas fa-edit fa-lg"></i></a></td>      
                              <td>
                                
                                <form action="{{ route('customer.destroy', $customer->id) }}" onsubmit="return confirm('Are you sure?');"  method="post">
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
