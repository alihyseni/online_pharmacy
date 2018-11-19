@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Add Product</h2>

            <form method="POST" action="{{ route('create-product.store') }}" enctype="multipart/form-data">
            <div class="form-group">
            {{ csrf_field() }}
                <label for="exampleFormControlInput1">Product Name *</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Category *</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category" required>
                    <option value="" disabled selected hidden>Select Category</option>
                    @foreach($products as $product)
                    <option value="{{$product->name}}" >{{$product->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Usage</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="2" name="usage"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ingredients</label>
                <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" name="ingredients"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input type="number" class="form-control" id="exampleFormControlInput2" step="any" name="price">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Add Product Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" accept='image/*' name="image">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add Product</button>
            </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
</div>

@endsection
