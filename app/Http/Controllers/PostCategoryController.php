<?php

namespace App\Http\Controllers;

use App\Models\PostsCategory;

use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $cats = PostsCategory::all();
        return view('backend.post-category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('backend.post-category.create');
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
            'txtPostCategory'     => 'required',
            'txtPostCategorySlug' => 'required',
            'txtStatus'       => 'required'
        ]);

        $category = new PostsCategory([
            'title'   => $request->get('txtPostCategory'),
            'slug'   => $request->get('txtPostCategorySlug'),
            'status'   => $request->get('txtStatus')
        ]);

        $category->save();
        return redirect('post-category')->with('success', 'post category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post_category = PostsCategory::find($id);
        return view('backend.post-category.edit', compact('post_category'));
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
            'txtPostCategory'     => 'required',
            'txtPostCategorySlug' => 'required',
            'txtStatus'       => 'required'
        ]);

        $category = PostsCategory::find($id);
        $category->title =  $request->get('txtPostCategory');
        $category->slug  = $request->get('txtPostCategorySlug');        
        $category->status= $request->get('txtStatus');

        $category->save();
        return redirect('post-category')->with('success', 'category listed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_category = PostsCategory::find($id);
        $post_category->delete();
        return redirect('post-category')->with('success', 'post category successfully deleted!');
    }
}
