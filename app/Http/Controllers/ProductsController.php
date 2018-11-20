<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\Brands;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all()->sortByDesc('id');
        return view('products', compact('products', $products));
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
            'name' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:10000'
        ]);
//        image upload
        $image = $request->image;
        if ($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
        }
        Products::create($formInput);
        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $id)
    {
        $product = Products::find($id);
        return view('single-product', compact('product', $product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
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
