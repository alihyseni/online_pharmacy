@extends('layouts.master')

@section('title')
    Products | Pharmacy
@endsection

@section('content')

    <style>
        .page-title{
            margin-left:25%;
        }
    </style>


    <div class="container">
        <div class="row">
            <h3 class="page-title">Products</h3>
        </div>
        @can('create product')
            <form method="GET" action="{{ route('create-product.store') }}">
                <button type="submit" class="btn btn-success">Add New Product</button>
            </form>
        @endcan
        <div class="row">
            <div class="col-md-2">
                <form action="{{ route('products.index') }}" method="GET">
                    @foreach($brands as $brand)
                    <input type="checkbox" name="brand[]" value="{{$brand->id}}">{{$brand->name}}
                    <br>
                    @endforeach
                    <input type="submit">
                </form>
            </div>
            <div class="col-md-10">
                @foreach($products as $product)
                            <div class="col-md-3">
                                <div class="products-item">
                                    <div class="image">
                                        <a href="{{route('products.show',$product->id)}}">
                                            <img class="img-fluid" src="{{asset('images')}}/{{$product->image}}"
                                                 alt="{{$product->name}}">
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
                                        <p>€ {{$product->price}}</p>
                                    </div>
                                    <div class="item_add_cart">
                                        <form action="{{route('cart.store')}}" method="POST">
                                            <fieldset>
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-primary btn-addtocart">
                                                    <i class="icon-shopping-cart"></i> Add to Cart
                                                </button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {{ $products->links() }}
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

