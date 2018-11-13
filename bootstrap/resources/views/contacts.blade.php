@extends('layouts.master')

@section('content')
<style>
iframe{
    margin:100px 0;
}
#contact-container{
    margin-top:50px;
}
</style>
<div id="contact-container" class="container">
    <div class="row">
    <h4>Contact</h4>
        <div class="col-md-12">
            <div class="kontakti-right">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11738.207760768055!2d21.162463918695128!3d42.64965783338949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee51e2b8be5%3A0xc1a61266fd75271e!2sPublic+Services+Ministry!5e0!3m2!1sen!2s!4v1536237420801"
                    width="735" height="532" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@endsection