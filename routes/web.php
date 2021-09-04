<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    //return view('frontend.index');
    //return "hello";
});

// Frontend Routes
Route::get('/front', 'FrontendController@home')->name('front');
Route::get('/about-us','FrontendController@aboutUs')->name('about-us');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::get('/privacy-policy','FrontendController@privacy')->name('privacy-policy');
Route::get('/terms-condition','FrontendController@terms')->name('terms-condition');
Route::get('/return-policy','FrontendController@return')->name('return-policy');
Route::get('/shop','FrontendController@shop_product')->name('shop');

/*Backend routes code start here*/
Route::get('/', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');

// Admin User

Route::resource('admin','AdminUserController');
//Customer
Route::resource('customer','CustomerController');
// Category
Route::resource('category','CategoryController');
// Product
Route::resource('product','ProductController');
// Product
Route::resource('banner','BannerController');
//Order
Route::resource('order','OrderController');
//getPrice
Route::get('getprice','OrderController@get_by_product');

//postCategory
Route::resource('post-category','PostCategoryController');
//Tags
Route::resource('tags','PostTagController');
//Posts
Route::resource('post','PostController');