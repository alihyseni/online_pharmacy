@extends('layouts.master')

@section('title')
  Products | Pharmacy
@endsection

@section('content')

  <div class="container">
      <div class="row">
          <h3>Products</h3>
      </div>
      <div class="row">
          @foreach($products as $product)
            <div class="col-md-3">

              <div class="image">
                <img class="img-fluid" src="{{asset('images')}}/{{$product->image}}" alt="{{$product->name}}">
              </div>

              <div class="name">
                <h4><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h4>
              </div>

              <div class="descrtipton">
                <p>{{ str_limit($product->description, 65) }}</p>
              </div>

              <div class="price">
                <h5>Price</h5>
                <p>{{$product->price}}</p>
              </div>


            </div>
          @endforeach
          {{ $products->links() }}
      </div>
  </div>
@endsection
