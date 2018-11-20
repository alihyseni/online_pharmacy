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


//---------- ADMIN routes

Route::get('admin/create-product',function(){
    $brands = DB::table('brands')->get();
    return view('admin.products-create',compact('brands',$brands));
})->name('create-product.index');


Route::post('admin/create-product','ProductsController@store')->name('create-product.store');

//----------------------------------------------------------------


Route::resource('products','ProductsController');



