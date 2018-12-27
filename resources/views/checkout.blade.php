@extends('layouts.master')

@section('title')
    Checkout | Pharmacy
@endsection

@section('content')

    <div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-sm-10 offset-md-1">
                    <div class="process-wrap">
                        <div class="process text-center active">
                            <p><span>01</span></p>
                            <h3>Shopping Cart</h3>
                        </div>
                        <div class="process text-center active">
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

            <form action="{{ route('checkout.store') }}" method="POST" class="colorlib-form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Shipping Details</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Select City</label>
                                    <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="city_id" id="people" class="form-control" required>
                                            <option value="#" selected disabled hidden>Select City</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" name="firstname" placeholder="Your Firstname" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control" name="lastname" placeholder="Your Lastname" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="companyname">Company Name</label>
                                    <input type="text" id="companyname" class="form-control"
                                          name="company" placeholder="Company Name(optional)">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" class="form-control"
                                          name="address" placeholder="Enter Your Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="address2" class="form-control"
                                          name="address2" placeholder="Second Address(optional)">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="companyname">Provice/City</label>
                                    <input type="text" id="provincecity" class="form-control"
                                          name="province" placeholder="Province or City" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Phone">Phone Number</label>
                                    <input type="text" id="zippostalcode" class="form-control" name="phone" placeholder="" required>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-detail">
                                    <h2>Cart Total</h2>
                                    <ul>
                                        <li>
                                            <span>Subtotal</span> <span>$100.00</span>
                                            <ul>
                                                <li><span>1 x Product Name</span> <span>$99.00</span></li>
                                                <li><span>1 x Product Name</span> <span>$78.00</span></li>
                                            </ul>
                                        </li>
                                        <li><span>Shipping</span> <span>$0.00</span></li>
                                        <li><span>Order Total</span> <span>$180.00</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="cart-detail">
                                    <h2>Payment Method</h2>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="paymentbank"> Direct Bank Tranfer</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="paymentarrival"> Payment on arrival</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="terms" value=""> I have read and accept the terms
                                                    and conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Place an order</button>
                            </div>
                        </div>
                        @include('layouts.error')
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
@endsection