@extends('layouts.master')

@section('title')
    Name | Pharmacy
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">

                    <div class="product">
                        <p>{{ $products->name }}</p>
                        <img src="{{ asset('images')}}/{{$products->image}}" alt="{{$products->name}}">
                        <h5>Description</h5>
                        <p>{{ $products->description }}</p>
                        <h5>Ingredients</h5>
                        <p>{{ $products->ingredients }}</p>
                        <h5>Usage</h5>
                        <p>{{ $products->usage }}</p>
                        <h5>Price</h5>
                        <p>{{ $products->price }}</p>
                    </div>

                @if(Auth::user())
                    <form method="GET" action="{{route('products.edit', [$products->id])}}">
                        <button type="submit" class="btn btn-success">Edit Product</button>
                    </form>
                @endif

            </div>
        </div>
    </div>
@endsection
