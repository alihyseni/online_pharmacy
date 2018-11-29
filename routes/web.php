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
    })->name('create-product.index')->middleware('auth');
    Route::post('create-product','ProductsController@store')->name('create-product.store');
    Route::get('{product}/edit-product', 'ProductsController@edit')->name('products.edit')->middleware('auth');
    Route::patch('update-product/{products}', 'ProductsController@update')->name('products.update');
});

//----------------------------------------------------------------

Route::get('', function(){

    $permission = \Spatie\Permission\Models\Permission::all();

    return $permission;

    return view('home'); })->name('home');
Route::get('contacts',function(){ return view('contacts'); })->name('contacts');
Route::get('products','ProductsController@index')->name('products.index');
Route::get('products/{products}', 'ProductsController@show')->name('products.show');
Auth::routes();
