<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('backend.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $product = Product::all();  
        return view('backend.order.create')->with('products', $product);
    }


    public function get_by_product(Request $request)
    {     

        if (!$request->product_id)
        {
            $subcategories = '';
            $products = Product::where('id', $request->product_id)->get();
            //dd($products);
            foreach ($products as $product) {
            $subcategories .= '<input type="text" name="txtProductPrice[]" placeholder="Enter Price" class="form-control name_list" value="'.$product->product_price.'" />';            
             }
             return response()->json(['subcategories' => $subcategories]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtCustUserName' => 'required',
            'txtCustPassword' => 'required',
            'txtCustEmail'    => 'required',
            'txtCustMobile'   => 'required',
            'txtCustFirstName'=> 'required',
            'txtCustLastName' => 'required',
            'txtCustAddress'  => 'required',
            'txtCustLandmark' => 'required',
            'txtCustCity'     => 'required',
            'txtCustState'    => 'required',
            'txtCustCountry'  => 'required',
            'txtCustPincode'  => 'required',
            'txtStatus'       => 'required',
            'txtCourier'      => 'required',  
            'txtDiscount'     => 'required',  
            'txtPrice'        => 'required',
            'txtQty'          => 'required',
            'txtProduct'      => 'required'
        ]);

        //dd($request); txtCourier txtDiscount

        $Customer = new Customer([
        'username'   => $request->get('txtCustUserName'),
        'email'      => $request->get('txtCustEmail'),
        'password'   => $request->get('txtCustPassword'),
        'first_name' => $request->get('txtCustFirstName'),
        'last_name'  => $request->get('txtCustLastName'),
        'mobile'     => $request->get('txtCustMobile'),
        'address'    => $request->get('txtCustAddress'),
        'landmark'   => $request->get('txtCustLandmark'),
        'city'       => $request->get('txtCustCity'),
        'state'      => $request->get('txtCustState'),
        'country'    => $request->get('txtCustCountry'),
        'pincode'    => $request->get('txtCustPincode'),
        'status'     => $request->get('txtStatus')
        ]);
        $Customer->save();
        $last_cuid = $Customer->id;


        $gen_orderid = sprintf("ATIYA%'.05d\n", $last_cuid);

        //Order table data insertion
        $Order = new Order([
        'customer_id'   => $last_cuid,
        'order_no'      => $gen_orderid,
        'courier_amount'=> $request->get('txtCourier'),
        'discount'      => $request->get('txtDiscount'),
        'total_amount'  => '0',
        'payment_mode'  => '1',
        'status'        => '1'
        ]);
        $Order->save();
        $last_ordid = $Order->id;      
         
         $items = $request->only('txtProduct', 'txtQty', 'txtPrice');
        //dd($items);
        $rowcount = count($request->txtProduct);

            for($i=0; $i<$rowcount; $i++)
            {
                $data = new OrderItem();
                $data->order_id = $last_ordid;
                $data->product_id = $request->txtProduct[$i];
                $data->quantity = $request->txtQty[$i];
                $data->price = $request->txtPrice[$i];
                $data->status = '1';        
                $data->save();
            }    
      
        return redirect('order')->with('success', 'order created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //$items = OrderItem::find($id);
        
    $order = Order::where('id', $id)->first()
    ->Join('customers', 'orders.customer_id', '=', 'customers.id')
    ->first();
   $items = Order::find($id)->getItems;
   return view('backend.order.show')->with('order', $order)->with('items', $items);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
