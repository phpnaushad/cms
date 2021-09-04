<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                                                                                               
        $categories = Category::all();
        return view('backend.category.index', compact('categories')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
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
            'txtCategory'     => 'required',
            'txtCategoryDesp' => 'required',
            'txtStatus'       => 'required'
        ]);

        $category = new Category([
            'category_name'   => $request->get('txtCategory'),
            'category_detail'   => $request->get('txtCategoryDesp'),
            'status'   => $request->get('txtStatus')
        ]);

        $category->save();
        return redirect('category')->with('success', 'category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
         $categories = Category::all();
        return view('category', compact('categories')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtCategory'     => 'required',
            'txtCategoryDesp' => 'required',
            'txtStatus'       => 'required'
        ]);

        $category = Category::find($id);
        $category->category_name   =  $request->get('txtCategory');
        $category->category_detail = $request->get('txtCategoryDesp');        
        $category->status          = $request->get('txtStatus');

        $category->save();
        return redirect('category')->with('success', 'category listed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('category')->with('success', 'category successfully deleted!');
    }    

}
