@extends('layouts.master')

@section('title')
Contact | Pharmacy
@endsection

@section('content')
    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Contact Information</h3>
                    <div class="row contact-info-wrap">
                        <div class="col-md-3">
                            <p><span><i class="icon-location"></i></span> Pristina, <br> Str.Agim Ramadani, Nr.23</p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+38344123456</a></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@pharmacy.com</a></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-globe"></i></span> <a href="#">www.pharmacy.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-wrap">
                        <h3>Get In Touch</h3>
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="Your email address">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="6" class="form-control" placeholder="Say something about us"></textarea>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe width="100%" height="620" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=prishtine+(Pharmacy)&amp;ie=UTF8&amp;t=&amp;z=9&amp;iwloc=B&amp;output=embed" frameborder="0"  marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google Maps iframe generator</a></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
