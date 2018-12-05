@extends('layouts.master')

@section('title')
  Products | Pharmacy
@endsection

@section('content')

    <style>
        .products-item{
            margin-bottom:40px;
        }

        .products-item .name h4{
            font-size: 1.3em;
            color: #fc636b;
            text-decoration: none;
            font-weight: 600;
            text-align:center;
        }
        .products-item .name h4:hover{
            text-decoration: none!important;
        }

        .products-item {
            position: relative;
            box-shadow: 0px 0px 15px 0px #D6D6D6;
            padding-bottom: 20px;
            padding-left:15px;
            padding-right:15px;

        }
        .item_add_cart form{
            text-align:center;
            margin:0 auto;
        }
        .item_add_cart input.button {
            font-size: 13px;
            color: #fff;
            background: #2fdab8;
            text-decoration: none;
            position: relative;
            border: none;
            border-radius: 0;
            width: 80%;
            text-transform: uppercase;
            padding: .5em 0;
            outline: none;
            letter-spacing: 1px;
            font-weight: 600;

        }
        .image img{
            padding: 22px 8px 5px;
            object-fit: cover;
            width: 100%;
            height: 188px;
        }

        .products-item .button:hover{
            cursor:pointer;
        }
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

