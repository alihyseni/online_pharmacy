@extends('layouts.master')

@section('title')
    {{$products->name}} | Pharmacy
@endsection

@section('content')

    <div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg product-detail-wrap">
                <div class="col-sm-8">
                    <div class="product-entry border">
                        <img src="{{ asset('images')}}/{{$products->image}}" class="img-fluid" alt="{{$products->name}}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-desc">
                        <h3>{{$products->name}}</h3>
                        <p class="price">
                            <span>{{$products->price}}</span>
                            <span class="rate">
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-half"></i>
                            (74 Rating)
                        </span>
                        </p>
                        <p>{{$products->description}}</p>

                        <div class="input-group mb-4">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                <i class="icon-minus2"></i>
                            </button>
                        </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                   min="1" max="100">
                            <span class="input-group-btn ml-1">
                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="icon-plus2"></i>
                            </button>
                        </span>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p class="addtocart"><a href="{{route('cart')}}" class="btn btn-primary btn-addtocart"><i
                                                class="icon-shopping-cart"></i> Add to Cart</a></p>
                                @can('edit product')
                                    <form method="GET" action="{{route('products.edit', [$products->id])}}">
                                        <button type="submit" class="btn btn-success">Edit Product</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 pills">
                            <div class="bd-example bd-example-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description"
                                           role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer"
                                           role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Ingredients</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                           role="tab" aria-controls="pills-review" aria-expanded="true">Usage</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane border fade show active" id="pills-description" role="tabpanel"
                                         aria-labelledby="pills-description-tab">
                                        <h3 class="head">Description</h3>
                                        <p>{{$products->description}}</p>
                                    </div>

                                    <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel"
                                         aria-labelledby="pills-manufacturer-tab">
                                        <h3 class="head">Ingredients</h3>
                                        <p>{{$products->ingredients}}</p>
                                    </div>

                                    <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                        <h3 class="head">Usage</h3>
                                        <p>{{ $products->usage }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
