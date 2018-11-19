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

Route::get('', function(){ return view('home'); })->name('home');

Route::resource('contacts','ContactsController');

Route::resource('admin/create-product','ProductsController');

Route::get('products',function(){
  $products = DB::table('products')->get();
  return view('products', ['products' => $products]);
})->name('products');


/*
Route::get('admin/create-product',function(){

    $tasks = Product::all();
    return view('tasks.index',compact('tasks',$product_categories));
    return view('admin.product-create');
})->name('admin.product.create');
*/
