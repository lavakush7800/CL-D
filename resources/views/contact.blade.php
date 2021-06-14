@extends('layouts.app')

@section('content')
<div class="container">
<div class="card col-10">
<center><div class="card col-3 bg-success"><h2>Contact Us</h2></div></center>
<form style="margin-top: 20px; margin-bottom:30px" method="Post" action="save">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Messages</label>
    <input type="text" class="form-control" id="message" aria-describedby="message" name="message">
  </div>
  <button type="submit" class="btn btn-sm btn-block btn-dark">Submit</button>
</form>
</div>
</div>
@endsection
