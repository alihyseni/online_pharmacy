<?php

namespace App\Http\Controllers;

use App\Products;
use App\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function MongoDB\BSON\toJSON;

class ProductsController extends Controller
{

    public function index(Request $request)
    {
        if(!$request->input('brand')){
            $brands = Brands::all('id','name');
            $products = Products::orderBy('id','desc')->paginate(12);
            return view('products', compact('products'))->with('brands',$brands);
        }else{
            $brands = Brands::all('id','name');
            $inputs = $_GET['brand'];
            $temp = implode(", ",$inputs);
            //$foo = "'1','2','3','4','5'";
            //dd($foo);
            $products = Products::orderBy('id','desc')->OrWhereIn('brands_id',[$temp])->paginate(12);
            return view('products', compact('products'))->with('brands',$brands);
        }
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


    public function show(Products $products)
    {
        return view('single-product', compact('products'));
    }



    public function edit(Products $product)
    {
        $brands = Brands::all();
        return view('admin.products-edit',compact('product', 'brands'));

    }


    public function update(Request $request,Products $products)
    {
        $formInput =$request->except('image');

        $this->validate($request, [
            'name' => 'required',
            'brands_id' => 'required'
        ]);
        // image update
        $image = $request->image;
        if ($image) {
            $imageName = $request->name . "." . $image->getClientOriginalExtension();
            $image->move('images', $imageName);
            $image_path = public_path().'/images/'.$products->image;
            File::delete($image_path);
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
