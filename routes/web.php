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
//------------------ ADMIN routes
// Matches The "/admin/create-product" URL namely adds the "/admin" before created-product

Route::prefix('admin')->group(function () {

    Route::get('create-product',function(){
        $brands = DB::table('brands')->get();
        return view('admin.products-create',compact('brands',$brands));
    })->name('create-product.index')->middleware('permission:create product');

    Route::post('create-product','ProductsController@store')->name('create-product.store');

    Route::get('{product}/edit-product', 'ProductsController@edit')->name('products.edit')->middleware('permission:edit product');

    Route::patch('update-product/{products}', 'ProductsController@update')->name('products.update');
});

//----------------------------Guest Routes------------------------------------

Route::get('', function(){ return view('home'); })->name('home');
Route::get('home', function(){ return view('home'); })->name('home');
Route::get('contacts',function(){ return view('contacts'); })->name('contacts');
Route::get('products','ProductsController@index')->name('products.index');
Route::get('products/{products}', 'ProductsController@show')->name('products.show');
Route::get('about-us', function(){
        return view('about');
    })->name('about');
Route::get('brands','BrandsController@index')->name('brands.index');

Auth::routes();


//-----------------------------User Routes----------------------------
Route::resource('cart','CartsController')->middleware('auth');