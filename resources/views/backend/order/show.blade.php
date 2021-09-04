@extends('backend.layouts.master') @section('title','E-SHOP || DASHBOARD') @section('main-content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
             Customer details with products detail Page
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Sahil Khan General Trading
                    <small class="float-right">Date: {{$order->created_at}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <strong>From</strong>
                  <address>
                  <strong>Sahil Khan General Trading L.L.C</strong><br>
                  Room No 401, Dar Al Makatib Frij<br>
                  Murar Near Al Hotel,<br>
                  Deira, Dubai-UAE<br>
                  Phone: 0509423867
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                   <strong>To</strong>
                  <address>
                    <strong>{{$order->first_name}}&nbsp;{{$order->last_name}}</strong><br>
                    {{$order->address}}, {{$order->landmark}}<br>
                      {{$order->country}}, {{$order->pincode}}<br>
                    Phone: {{$order->mobile}}<br>
                    Email: {{$order->email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">                 
                  <br>
                  <b>Order ID:</b> {{$order->order_no}}<br>              
                  <b>TRN:</b> 100603800200003

                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>                     
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                     
                    @foreach($items as $item)  
@php
@$pro_id = DB::table('products')->select('product_name')->where('id', $item->product_id)->get();               
@endphp           
                    <tr>                     
                      <td>
                        @foreach($pro_id as $data)
                          {{ $data->product_name }}
                        @endforeach 
                       </td>
                      <td>{{ $item->quantity }}</td>
                      <td>{{ $item->price }}</td>
                      <td>{{ $item->quantity*$item->price }}</td>
                    </tr>                    
                    @endforeach
                        
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <hr>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods: <strong> @if($order->payment_mode == '1') COD @else ONLINE @endif </strong></p>
                </div>
                <!-- /.col -->
                <div class="col-6">                 

                  <div class="table-responsive">
                    <table class="table">
                      <tbody><tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Discount</th>
                        <td>{{$order->discount}}</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>{{$order->courier_amount}}</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
@endsection