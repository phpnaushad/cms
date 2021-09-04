<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use File;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                                                                                               
        $banners = Banner::all();
        return view('backend.banner.index', compact('banners')); 
    }

    /**
     * Show the form for creating a new resource.+
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
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
            'txtTitle'     => 'required',
            'txtBannerDesp' => 'required',
            'txtBannerImage' =>  'required',   
            'txtStatus'       => 'required'
        ]);

        $banner = '';
        if ($files = $request->file('txtBannerImage')) {
            $destinationPath = 'public/image/banner/'; // upload path
            $banner = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $banner);            
        }

        $banner = new Banner([
            'banner_title'   => $request->get('txtTitle'),
            'banner_detail'   => $request->get('txtBannerDesp'),
            'banner_image'   => $banner,
            'status'   => $request->get('txtStatus')
        ]);

        $banner->save();
        return redirect('banner')->with('success', 'banner created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
         $banners = Banner::all();
        return view('banner', compact('banners')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.banner.edit')->with('banner', $banner);        
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
            'txtTitle'     => 'required',
            'txtBannerDesp'=> 'required',            
            'txtStatus'    => 'required'
        ]);

 $banner = Banner::find($id);

if ($request->hasFile('txtBannerImage')){
    $image_path = 'public/image/banner/'.$banner->banner_image;
    if (File::exists($image_path)) {
        File::delete($image_path);
    }
    $bannerImage = $request->file('txtBannerImage');
    $imgName = $bannerImage->getClientOriginalName();
    $destinationPath = 'public/image/banner/'; // upload path
    $bannerImage->move($destinationPath, $imgName);
  } else {
    $imgName = $banner->banner_image;
  }


        /*if ($files = $request->file('txtBannerImage')) {
            $destinationPath = 'public/image/banner/'; // upload path
            $banner = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $banner);            
        }*/
       
        $banner->banner_title   = $request->get('txtTitle');
        $banner->banner_detail  = $request->get('txtBannerDesp'); 
        $banner->banner_image   = $imgName;        
        $banner->status         = $request->get('txtStatus');
        $banner->save();
        //print_r($banner);
        return redirect('banner')->with('success', 'banner listed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
       
        $banner = Banner::find($id);
        $banner->delete();
        return redirect('banner')->with('success', 'banner successfully deleted!');
           
    }    

}
