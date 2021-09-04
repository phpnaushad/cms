<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('backend.customer.index', compact('customers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('backend.customer.create');
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
            'txtStatus'       => 'required'
        ]);

        $Customer = new Customer([
            'username'   => $request->get('txtCustUserName'),
            'email'   => $request->get('txtCustEmail'),
            'password'   => $request->get('txtCustPassword'),
            'first_name'   => $request->get('txtCustFirstName'),
            'last_name'   => $request->get('txtCustLastName'),
            'mobile'   => $request->get('txtCustMobile'),
            'address'   => $request->get('txtCustAddress'),
            'landmark'   => $request->get('txtCustLandmark'),
            'city'   => $request->get('txtCustCity'),
            'state'   => $request->get('txtCustState'),
            'country'   => $request->get('txtCustCountry'),
            'pincode'   => $request->get('txtCustPincode'),
            'status'   => $request->get('txtStatus')
        ]);

        $Customer->save();
        return redirect('customer')->with('success', 'customer created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $customer = Customer::find($id);
        return view('backend.customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('backend.customer.edit', compact('customer'));
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
            'txtStatus'       => 'required'
        ]);
       
        $customer = Customer::find($id); 
            $customer->username   = $request->get('txtCustUserName');
            $customer->email      = $request->get('txtCustEmail');
            $customer->password   = $request->get('txtCustPassword');
            $customer->first_name = $request->get('txtCustFirstName');
            $customer->last_name  = $request->get('txtCustLastName');
            $customer->mobile     = $request->get('txtCustMobile');
            $customer->address    = $request->get('txtCustAddress');
            $customer->landmark   = $request->get('txtCustLandmark');
            $customer->city       = $request->get('txtCustCity');
            $customer->state      = $request->get('txtCustState');
            $customer->country    = $request->get('txtCustCountry');
            $customer->pincode    = $request->get('txtCustPincode');
            $customer->status     = $request->get('txtStatus');              

        $customer->save();
        return redirect('customer')->with('success', 'customer listed successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);       
        $customer->delete();
        return redirect('customer')->with('success', 'customer successfully deleted!');
    }
}
