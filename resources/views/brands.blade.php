@extends('layouts.master')

@section('title')
    Brands | Pharmacy
@endsection

@section('content')
    <style>
        #page{
            height:auto !important;
        }
    </style>
    <div class="container">
        <h5 class="partneret-page-titulli">Brands</h5>
        <div class="partneret-content">
            <div class="col-sm-12">
                <p class="brands-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="row publikimiPage animated fadeInUp">
                @foreach($brands as $brand)
                <div class="col-lg-4 col-md-6 col-sm-6 partneretItem" >
                    <img class="img-fluid" src="{{asset('images')}}/{{$brand->image}}" style="max-width: 320px; max-height:150px;">
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')


@endsection