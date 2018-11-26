<?php

namespace App\Http\Controllers;

use App\Products;
use App\Brands;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Products::paginate(12);
        return view('products', compact('products'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $formInput = $request->except('image');
        // validation
        $this->validate($request, [
            'name' => 'required|unique:products',
            'image' => 'image|mimes:png,jpg,jpeg|max:10000',
            'brands_id' => 'required'
        ]);
        // image upload
        $image = $request->image;
        if ($image) {
            $imageName = $request->name . "." . $image->getClientOriginalExtension();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
        }
        Products::create($formInput);
        return redirect('/products');
    }


    public function show($id)
    {
        $products = Products::findOrFail($id);
        return view('single-product', compact('products'));
    }



    public function edit(Products $product)
    {
        $brands = Brands::all();
        return view('admin.products-edit',compact('product', 'brands'));

    }



    public function update(Request $request, Products $products)
    {

        $formInput = $request->except('image');
        // validation

        $this->validate($request, [
            'name' => 'required|unique',
            'brands_id' => 'required'
        ]);
        // image upload
        $image = $request->image;
        if ($image) {
            $imageName = $request->name .".". $image->getClientOriginalExtension();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
        }

        $products->update($formInput);

        return redirect('/products');
    }


    public function destroy(Products $products)
    {
        //
    }
}
