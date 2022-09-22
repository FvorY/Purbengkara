<?php

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



Route::get('/', 'HomefrontController@index')->name('/');
Route::get('/product/search', 'ProductController@search');

Route::group(['middleware' => 'guest'], function () {

    Route::get('/admin', function () {
        return view('auth.login');
    })->name('admin');

    Route::get('login', 'loginController@authenticate')->name('login');
});


Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('index');
    Route::get('logout', 'HomeController@logout')->name('logout');

    Route::get('/setting', 'SettingController@index');
    Route::post('/setting/save', 'SettingController@save');

    //Sosial Media
    Route::get('/sosmed', 'SosmedController@index');
    Route::get('/sosmedtable', 'SosmedController@datatable');
    Route::post('/simpansosmed', 'SosmedController@simpan');
    Route::get('/editsosmed', 'SosmedController@edit');
    Route::get('/hapussosmed', 'SosmedController@hapus');

    //Manage User
    Route::get('/user', 'UserController@index');
    Route::get('/usertable', 'UserController@datatable');
    Route::post('/simpanuser', 'UserController@simpan');
    Route::get('/edituser', 'UserController@edit');
    Route::get('/hapususer', 'UserController@hapus');

    //Slide Image
    Route::get('/slideimage', 'SlideimageController@index');
    Route::get('/slideimagetable', 'SlideimageController@datatable');
    Route::post('/simpanslideimage', 'SlideimageController@simpan');
    Route::get('/editslideimage', 'SlideimageController@edit');
    Route::get('/hapusslideimage', 'SlideimageController@hapus');

    //Category
    Route::get('/category', 'CategoryController@index');
    Route::get('/categorytable', 'CategoryController@datatable');
    Route::post('/simpancategory', 'CategoryController@simpan');
    Route::get('/editcategory', 'CategoryController@edit');
    Route::get('/hapuscategory', 'CategoryController@hapus');

    //Product
    Route::get('/product', 'ProductController@index');
    Route::get('/tambahproduct', 'ProductController@tambahproduct');
    Route::get('/producttable', 'ProductController@datatable');
    Route::post('/simpanproduct', 'ProductController@simpan');
    Route::get('/editproduct/{id}', 'ProductController@edit');
    Route::get('/hapusproduct', 'ProductController@hapus');

    //Featured
    Route::get('/featured', 'FeaturedController@index');
    Route::get('/featuredtable', 'FeaturedController@datatable');
    Route::post('/simpanfeatured', 'FeaturedController@simpan');
    Route::get('/editfeatured', 'FeaturedController@edit');
    Route::get('/hapusfeatured', 'FeaturedController@hapus');

    //Special Price
    Route::get('/specialprice', 'SpecialpriceController@index');
    Route::get('/tambahspecialprice', 'SpecialpriceController@tambahspecialprice');
    Route::get('/specialpricetable', 'SpecialpriceController@datatable');
    Route::post('/simpanspecialprice', 'SpecialpriceController@simpan');
    Route::get('/editspecialprice/{id}', 'SpecialpriceController@edit');
    Route::get('/hapusspecialprice', 'SpecialpriceController@hapus');
}); // End Route Groub middleware auth
