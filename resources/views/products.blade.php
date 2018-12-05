@extends('layouts.master')

@section('title')
  Products | Pharmacy
@endsection

@section('content')

    <style>

    </style>


  <div class="container">
      <div class="row">
          <h3>Products</h3>
      </div>
      @can('create product')
          <form method="GET" action="{{route('create-product.store')}}">
            <button type="submit" class="btn btn-success">Add New Product</button>
          </form>
      @endcan
      <div class="row">

          @foreach($products as $product)
            <div class="col-md-3">
                <div class="products-item">
                  <div class="image">
                      <a href="{{route('products.show',$product->id)}}">
                        <img class="img-fluid" src="{{asset('images')}}/{{$product->image}}" alt="{{$product->name}}">
                      </a>
                  </div>

                  <div class="name">
                    <h4><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h4>
                  </div>

                  <div class="descrtipton">
                    <p>{{ str_limit($product->description, 65) }}</p>
                  </div>

                  <div class="price">
                    <h5>Price</h5>
                    <p>$ {{$product->price}}</p>
                  </div>
                    <div class="item_add_cart">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value=" ">
                                <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                <input type="hidden" name="amount" value="30.99">
                                <input type="submit" name="submit" value="Add to cart" class="button">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
          @endforeach
      </div>
          <div class="row">
              <div class="col-md-12 text-center">
                  {{ $products->links() }}
              </div>
          </div>
      </div>
  </div>

@endsection

@section('scripts')
    <script>
        // $(document).ready(function(){
        //     $('.block-27 .page-item,.block-27 .page-link').removeClass();
        // });

    </script>
@endsection

