<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\Brands;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::paginate(12);
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');
//        validation
        $this->validate($request, [
            'name' => 'required|unique:products',
            'image' => 'image|mimes:png,jpg,jpeg|max:10000',
            'brands_id' => 'required'
        ]);
//        image upload
        $image = $request->image;
        if ($image) {
            $imageName = $request->name .".". $image->getClientOriginalExtension();;
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
        }
        Products::create($formInput);
        return redirect('products');
    }


    public function show(Products $id)
    {
        $products = Products::findOrFail($id);
        return view('single-product', compact('products'));
    }



    public function edit(Products $id)
    {
        $products = Products::find($id);
        return view('admin.products-edit',compact('products'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
