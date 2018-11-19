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

Route::get('contacts','ContactsController@index')->name('contacts.index');

Route::get('admin/create-product','ProductsController@index')->name('create-product.index');

Route::post('admin/create-product','ProductsController@store')->name('create-product.store');

Route::get('products',function(){
  $products = DB::table('products')->get();
  return view('products', ['products' => $products]);
})->name('products');

Route::get('product/{id}','ProductsController@show')->name('product.show');