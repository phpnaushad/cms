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
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Slug</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Image</th>                            
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">STATUS</th>
                            <th class="align-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="CSS grade: activate to sort column ascending">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($posts as $post)
                         @php 
                    $cat_name = DB::table('post_category')->select('title')->where('id',$post->post_cat_id)->get();                         
                         @endphp
                          <tr>
                              <td>{{$post->id}}</td>
                              <td>                                
                                @foreach($cat_name as $data)
                                  {{ $data->title }}
                                @endforeach                            
                              </td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->slug }}</td>
                             <td>
                              @if($post->image)
                                  <img src="{{ URL::to('/') }}/public/image/{{$post->image}}" style="max-width:50px" alt="{{$post->image}}">
                              @else
                                  <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                              @endif
                             </td>
                              <td>@if($post->status == '1') Active @else Inactive @endif </td> 
                                <td><a href="{{ route('post.show', $post->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>                    

                              <td><a href="{{ route('post.edit', $post->id) }}"><i class="fas fa-edit fa-lg"></i></a>
                              </td>
                               <td>
								<form action="{{ route('post.destroy', $post->id) }}" onsubmit="return confirm('Are you sure?');"  method="post">
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
