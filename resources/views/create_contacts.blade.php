@extends('layouts.master')

@section('content')
<style>
  .create-contact{
    margin:50px auto;
  }
</style>
  <div class="container create-contact">
    <h1>Add New Contact</h1>
    <hr>
     <form action="/contacts" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="taskTitle"  name="address">
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="taskDescription" name="phone">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="taskDescription" name="email">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
