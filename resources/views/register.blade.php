@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-4">
            <h2>Register</h2>
        <form method='POST' action="/register">
        @csrf 
        <div class="form-group">

            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="" aria-describedby="" placeholder="Name/Company">
        </div>
        <div class="form-group">
        <br>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection