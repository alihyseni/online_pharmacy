@extends('layouts.master')

@section('title')
    Shopping Cart | Pharmacy
@endsection

@section('content')
    <div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-md-10 offset-md-1">
                    <div class="process-wrap">
                        <div class="process text-center active">
                            <p><span>01</span></p>
                            <h3>Shopping Cart</h3>
                        </div>
                        <div class="process text-center">
                            <p><span>02</span></p>
                            <h3>Checkout</h3>
                        </div>
                        <div class="process text-center">
                            <p><span>03</span></p>
                            <h3>Order Complete</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="product-name d-flex">
                        <div class="one-forth text-left px-4">
                            <span>Product Details</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Price</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Quantity</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Total</span>
                        </div>
                        <div class="one-eight text-center px-4">
                            <span>Remove</span>
                        </div>
                    </div>

                    @foreach($cart_products as $cart_product)
                        <div class="product-cart d-flex">
                            <div class="one-forth">
                                <div class="product-img" style="background-image: url('{{asset('images')}}/{{$cart_product->image}}');">
                                </div>
                                <div class="display-tc">
                                    <h3>{{$cart_product->name}}</h3>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">€{{$cart_product->price}}</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="{{$cart_product->quantity}}" min="1" max="10">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">€ 5.00</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <form action="{{ route('cart.destroy', $cart_product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="cart-remove-button" type="submit"><p class="closed"></p></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="total-wrap">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form action="#">
                                        <div class="row form-group">
                                            <div class="col-sm-9">
                                                <p>Shipping free for orders over €15.</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="submit" value="Checkout" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="total">
                                        <div class="sub">
                                            <p><span>Subtotal:</span> <span>€20.00</span></p>
                                            <p><span>Delivery:</span> <span>€0.00</span></p>
                                        </div>
                                        <div class="grand-total">
                                            <p><span><strong>Total:</strong></span> <span>€20.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                    <h2>Might also like</h2>
                </div>
            </div>

            <div class="row">
                @foreach($random_products as $random_product)
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="{{ route('products.show', $random_product->id) }}" class="prod-img" style="width:253px;">
                                <img src="{{asset('images')}}/{{$random_product->image}}" class="img-fluid" alt="{{$random_product->name}}">
                            </a>
                            <div class="desc">
                                <h2><a href="{{ route('products.show', $random_product->id) }}">{{$random_product->name}}</a></h2>
                                <span class="price">€{{$random_product->price}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection