<?php

namespace App\Http\Controllers;

use App\Models\PostsTag;

use Illuminate\Http\Request;

class PostTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = PostsTag::all();
        return view('backend.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return View('backend.tags.create');
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
            'txtPostTag'     => 'required',
            'txtPostTagSlug' => 'required',
            'txtStatus'       => 'required'
        ]);

        $tag = new PostsTag([
            'title'   => $request->get('txtPostTag'),
            'slug'   => $request->get('txtPostTagSlug'),
            'status'   => $request->get('txtStatus')
        ]);

        $tag->save();
        return redirect('tags')->with('success', 'post tags created successfully!');
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
        $tag = PostsTag::find($id);
        return view('backend.tags.edit', compact('tag'));
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
            'txtPostTag'     => 'required',
            'txtPostTagSlug' => 'required',
            'txtStatus'       => 'required'
        ]);

        $tag = PostsTag::find($id);
        $tag->title =  $request->get('txtPostTag');
        $tag->slug  =  $request->get('txtPostTagSlug');        
        $tag->status=  $request->get('txtStatus');

        $tag->save();
        return redirect('tags')->with('success', 'tags listed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = PostsTag::find($id);
        $tag->delete();
        return redirect('tags')->with('success', 'post tag successfully deleted!');
    }
}
