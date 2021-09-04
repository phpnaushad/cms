@extends('frontend.layouts.master')
@section('title','E-SHOP || HOME PAGE')
@section('main')
<main id="main">
<div class="container">

    <!--MAIN SLIDE-->
    <div class="wrap-main-slide">
        <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
            @foreach($banners as $banner)
            <div class="item-slide">
                <img src="{{ URL::to('/') }}/public/image/banner/{{$banner->banner_image}}" alt="" class="img-slide">
                <!--<div class="slide-info slide-1">
                    <h2 class="f-title">{{ $banner->banner_title }}</h2>
                    <span class="subtitle">{{ $banner->banner_detail }}</span>                   
                </div>--->
            </div>
             @endforeach		
        </div>
    </div>

    <!--BANNER-->


    <!--On Sale-->	
    <div class="wrap-show-advance-info-box style-1 has-countdown">
        <h3 class="title-box">On Sale</h3>
        <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="assets/images/products/tools_equipment_7.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{asset('frontend/assets/images/products/digital_18.jpg')}}" width="800" height="800" alt=""></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="assets/images/products/fashion_08.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{asset('frontend/assets/images/products/digital_17.jpg')}}" width="800" height="800" alt=""></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{asset('frontend/assets/images/products/tools_equipment_3.jpg')}}" width="800" height="800" alt=""></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{asset('frontend/assets/images/products/fashion_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{asset('frontend/assets/images/products/digital_04.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{asset('frontend/assets/images/products/kidtoy_05.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                </div>
            </div>

        </div>
    </div>

    <!--Latest Products-->
    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Latest Products</h3>
        <!---<div class="wrap-top-banner">
            <a href="#" class="link-banner banner-effect-2">
                <figure><img src="{{asset('frontend/assets/images/digital-electronic-banner.jpg')}}" width="1170" height="240" alt=""></figure>
            </a>
        </div>-->
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">                      
                <div class="tab-contents">
                    <div class="tab-content-item active" id="digital_1a">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                            @foreach($products as $product)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="{{ $product->product_name}}">
                                        <figure><img src="{{ URL::to('/') }}/public/image/{{$product->product_image}}" width="800" height="800" alt="{{ $product->product_name}}"></figure>
                                    </a>
                                    <!--<div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>-->
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->product_name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">₹ {{ $product->product_price}}</span></div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>                          
                </div>
            </div>
        </div>
    </div>

    <!--Product Categories-->
    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Product Categories</h3>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-control">
                    @foreach($categories as $category)
                    <a href="#fashion_{{ $category->id }}" class="tab-control-item @if ($loop->first) active @endif">{{ $category->category_name }}</a>
                    @endforeach                   
                </div>
                <div class="tab-contents">

                    <div class="tab-content-item active" id="fashion_1">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @php
                        $herbals = DB::table('products')->where('category_id',1)->where('status','1')->orderBy('id','DESC')->limit(10)->get();
                        @endphp    

                            @foreach($herbals as $herbal)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="{{ $herbal->product_name}}">
                                        <figure><img src="{{ URL::to('/') }}/public/image/{{$herbal->product_image}}" width="800" height="800" alt="{{ $herbal->product_name}}"></figure>
                                    </a>
                                  
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $herbal->product_name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">₹ {{ $herbal->product_price}}</span></div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>


                    <div class="tab-content-item" id="fashion_2">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @php
                        $singleherbs = DB::table('products')->where('category_id',2)->where('status','1')->orderBy('id','DESC')->limit(10)->get();
                        @endphp    

                            @foreach($singleherbs as $singleherb)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="{{ $singleherb->product_name}}">
                                        <figure><img src="{{ URL::to('/') }}/public/image/{{$singleherb->product_image}}" width="800" height="800" alt="{{ $singleherb->product_name}}"></figure>
                                    </a>
                                  
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $singleherb->product_name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">₹ {{ $singleherb->product_price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-content-item" id="fashion_3">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @php
                        $vinegars = DB::table('products')->where('category_id',3)->where('status','1')->orderBy('id','DESC')->limit(10)->get();
                        @endphp    

                            @foreach($vinegars as $vinegar)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="{{ $vinegar->product_name}}">
                                        <figure><img src="{{ URL::to('/') }}/public/image/{{$vinegar->product_image}}" width="800" height="800" alt="{{ $vinegar->product_name}}"></figure>
                                    </a>
                                  
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $vinegar->product_name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">₹ {{ $vinegar->product_price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="tab-content-item" id="fashion_5">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @php
                        $boosters = DB::table('products')->where('category_id',5)->where('status','1')->orderBy('id','DESC')->limit(10)->get();
                        @endphp    

                            @foreach($boosters as $booster)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="{{ $booster->product_name}}">
                                        <figure><img src="{{ URL::to('/') }}/public/image/{{$booster->product_image}}" width="800" height="800" alt="{{ $booster->product_name}}"></figure>
                                    </a>
                                  
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $booster->product_name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">₹ {{ $booster->product_price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="tab-content-item" id="fashion_6">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @php
                        $hairs = DB::table('products')->where('category_id',6)->where('status','1')->orderBy('id','DESC')->limit(10)->get();
                        @endphp    

                            @foreach($hairs as $hair)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="{{ $hair->product_name}}">
                                        <figure><img src="{{ URL::to('/') }}/public/image/{{$hair->product_image}}" width="800" height="800" alt="{{ $hair->product_name}}"></figure>
                                    </a>
                                  
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $hair->product_name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">₹ {{ $hair->product_price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="tab-content-item" id="fashion_7">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @php
                        $skins = DB::table('products')->where('category_id',7)->where('status','1')->orderBy('id','DESC')->limit(10)->get();
                        @endphp    

                            @foreach($skins as $skin)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="{{ $skin->product_name}}">
                                        <figure><img src="{{ URL::to('/') }}/public/image/{{$skin->product_image}}" width="800" height="800" alt="{{ $skin->product_name}}"></figure>
                                    </a>
                                  
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $skin->product_name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">₹ {{ $skin->product_price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="tab-content-item" id="fashion_8">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @php
                        $gonds = DB::table('products')->where('category_id',8)->where('status','1')->orderBy('id','DESC')->limit(10)->get();
                        @endphp    

                            @foreach($gonds as $gond)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="{{ $gond->product_name}}">
                                        <figure><img src="{{ URL::to('/') }}/public/image/{{$gond->product_image}}" width="800" height="800" alt="{{ $gond->product_name}}"></figure>
                                    </a>
                                  
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $gond->product_name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">₹ {{ $gond->product_price}}</span></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>          

</div>

</main>
@endsection