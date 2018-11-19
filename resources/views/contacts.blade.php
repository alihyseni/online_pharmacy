@extends('layouts.master')

@section('title')
Contact | Pharmacy
@endsection

@section('content')

<style>
.contact-wrapper{
    margin:50px auto;
}
</style>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container contact-wrapper">
    <h4>Contact</h4>
    <div class="row">
        <div class="col-md-4">
            @foreach($contacts as $contact)
                <p>{{$contact->address}}</p>
                <p>{{$contact->phone}}</p>
                <p>{{$contact->email}}</p>
            @endforeach
        </div>
        <div class="col-md-8">
            <div class="kontakti-right">
                <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=prishtine+(Pharmacy)&amp;ie=UTF8&amp;t=&amp;z=9&amp;iwloc=B&amp;output=embed" frameborder="0"  marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google Maps iframe generator</a></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
