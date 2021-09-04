<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\CategoryController;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all();
        $products = Product::paginate(5);
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();  
        return view('backend.product.create')->with('categories', $category);
        //$brand=Brand::get();
        //$category=Category::where('is_parent',1)->get();
        // return $category;
       // return view('backend.product.create')->with('categories',$category)->with('brands',$brand);
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
            'txtCategory'=>'required',
            'txtProduct'=>'required',            
            'txtProductImage' => 'required|mimes:jpeg,png,jpg,svg|max:2048',          
            'txtProductDesp' => 'required',
            'txtProductPrice'=>'required',
            'txtProductSku'=>'required',            
            'txtProductStock' => 'required',
            'txtProductGrn' => 'required'
        ]);

         if ($files = $request->file('txtProductImage')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);            
        }

        $product = new Product([
            'category_id' => $request->get('txtCategory'),
            'product_name' => $request->get('txtProduct'),
            'product_image' => $profileImage,
            'product_detail' => $request->get('txtProductDesp'),
            'product_price' => $request->get('txtProductPrice'),
            'product_sku' => $request->get('txtProductSku'),
            'product_stock' => $request->get('txtProductStock'),
            'product_grn' => $request->get('txtProductGrn'),
            'status' => $request->get('txtStatus')
        ]);
        $product->save();
        return redirect('product')->with('success', 'product created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    
     public function getCatList()
    {        
        $cats = Category::all();  
         //return view('pages.edit_product', compact('cats'));   
         return compact('cats');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product = Product::find($id);
       $category = Category::all();
       return view('backend.product.edit')->with('product', $product)->with('categories', $category);  
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
            'txtCategory'=>'required',
            'txtProduct'=>'required',            
            'txtProductImage' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
            'txtProductDesp' => 'required',
            'txtProductPrice'=>'required',
            'txtProductSku'=>'required',            
            'txtProductStock' => 'required',
            'txtProductGrn' => 'required'
        ]);

        if ($files = $request->file('txtProductImage')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);            
        }

        $product = Product::find($id);
        $product->category_id =  $request->get('txtCategory');
        $product->product_name = $request->get('txtProduct');
        $product->product_image = $profileImage;
        $product->product_detail = $request->get('txtProductDesp');
        $product->product_price =  $request->get('txtProductPrice');
        $product->product_sku = $request->get('txtProductSku');
        $product->product_stock = $request->get('txtProductStock');
        $product->product_grn = $request->get('txtProductGrn');
        $product->status = $request->get('txtStatus');
        $product->save();
        return redirect('product')->with('success', 'product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('product_list')->with('success', 'product deleted!');
    }
}
