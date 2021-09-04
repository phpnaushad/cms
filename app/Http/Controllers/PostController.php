<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\PostsTag;
use App\Models\PostsCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = PostsCategory::all();
        $tags = PostsTag::all();
        return view('backend.post.create')->with('category', $category)->with('tags', $tags);
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
            'txtTag'=>'required',            
            'txtPostImage' => 'required|mimes:jpeg,png,jpg,svg|max:2048',          
            'txtPostTitle' => 'required',
            'txtPostSlug'=>'required',
            'txtPostDesp'=>'required',            
            'txtPostQuote' => 'required',
            'txtStatus' => 'required'
        ]);

         if ($files = $request->file('txtPostImage')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);            
        }

        $post = new Posts([
            'post_cat_id' => $request->get('txtCategory'),
            'post_tag_id' => $request->get('txtTag'),
            'image' => $profileImage,
            'title' => $request->get('txtPostTitle'),
            'slug' => $request->get('txtPostSlug'),
            'description' => $request->get('txtPostDesp'),
            'quote' => $request->get('txtPostQuote'),
            'tags'  => '1',           
            'status' => $request->get('txtStatus')
        ]);
        $post->save();
        return redirect('post')->with('success', 'post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);       
        return view('backend.post.show')->with('post', $post);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post = Posts::find($id);
       $category = PostsCategory::All();
       $tags = PostsTag::all();
       return view('backend.post.edit')->with('post', $post)->with('category', $category)->with('tags', $tags );
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
            'txtTag'=>'required',            
            'txtPostImage' => 'required|mimes:jpeg,png,jpg,svg|max:2048',          
            'txtPostTitle' => 'required',
            'txtPostSlug'=>'required',
            'txtPostDesp'=>'required',            
            'txtPostQuote' => 'required',
            'txtStatus' => 'required'
        ]);

        if ($files = $request->file('txtPostImage')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);  
        }

        $post = Posts::find($id);
        $post->post_cat_id =  $request->get('txtCategory');
        $post->post_tag_id = $request->get('txtTag');
        $post->image = $profileImage;
        $post->title = $request->get('txtPostTitle');
        $post->slug =  $request->get('txtPostSlug');
        $post->description = $request->get('txtPostDesp');
        $post->quote = $request->get('txtPostQuote');       
        $post->status = $request->get('txtStatus');
        $post->save();
         return redirect('post')->with('success', 'post updated successfully!');         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect('post')->with('success', 'post deleted!');
    }
}
