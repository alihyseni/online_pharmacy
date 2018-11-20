@extends('layouts.master')

@section('title')
    Name | Pharmacy
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">

                @foreach($products as $product)
                    <div class="product">
                        <p>{{ $product->name }}</p>
                        <img src="{{ asset('images')}}/{{$product->image}}" alt="{{$product->name}}">
                        <h5>Description</h5>
                        <p>{{ $product->description }}</p>
                        <h5>Ingredients</h5>
                        <p>{{ $product->ingredients }}</p>
                        <h5>Usage</h5>
                        <p>{{ $product->usage }}</p>
                        <h5>Price</h5>
                        <p>{{ $product->price }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
