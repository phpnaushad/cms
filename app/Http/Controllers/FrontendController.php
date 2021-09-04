<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
        public function home(){
        $banners = Banner::all();	
        $categories = Category::all();
        $products = Product::all();
        return view('frontend.index')->with('banners', $banners)->with('categories', $categories)->with('products', $products);
        /*$featured=Product::where('status','active')->where('is_featured',1)->orderBy('price','DESC')->limit(2)->get();
        $posts=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $banners=Banner::where('status','active')->limit(3)->orderBy('id','DESC')->get();
        // return $banner;
        $products=Product::where('status','active')->orderBy('id','DESC')->limit(8)->get();
        $category=Category::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
        // return $category;
        return view('frontend.index')
                ->with('featured',$featured)
                ->with('posts',$posts)
                ->with('banners',$banners)
                ->with('product_lists',$products)
                ->with('category_lists',$category);*/
    }  


    public function aboutUs(){
        return view('frontend.pages.about-us');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function privacy(){
        return view('frontend.pages.privacy-policy');
    }

    public function terms(){
        return view('frontend.pages.terms-condition');
    }

    public function return(){
        return view('frontend.pages.return-policy');
    }

    public function register(){
        return view('frontend.pages.register');
    }

    public function login(){
        return view('frontend.pages.login');
    }

    public function shop_product(){
        return view('frontend.pages.shop');
    }






}
