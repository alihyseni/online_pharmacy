@extends('layouts.master')

@section('title')
    Edit Product | Pharmacy
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edit Product</h2>

                <form method="POST" action="{{ route('products.update', $product->id) }}">
                    <div class="form-group">
                        @csrf
                        @method('PATCH')
                        <label for="exampleFormControlInput1">Product Name *</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$product->name}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Category *</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="brands_id" required>
                            <option value="" disabled {{$product->brand_id}} hidden>Select Category</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}" >{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$product->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Usage</label>
                        <textarea class="form-control" id="exampleFormControlTextarea2" rows="2" name="usage">{{$product->usage}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ingredients</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" name="ingredients">{{$product->ingredients}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Price</label>
                        <input type="number" class="form-control" id="exampleFormControlInput2" step="any" name="price" value="{{$product->price}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Add Product Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept='image/*' name="image" value="{{$product->image}}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update Product</button>
                    </div>
                </form>
                @include('layouts.error')

            </div>
        </div>
    </div>

@endsection