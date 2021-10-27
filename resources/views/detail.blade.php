@extends('master')
@section('content')
<div class="container">
    <h1>{{$product['name']}}</h1>
    <img src="{{ asset($product['gallery']) }}" height="100px" width="auto" alt="">
    <p>Price: {{$product['price']}}</p>
    <p>Category: {{$product['category']}}</p>
    <p> {{$product['description']}}</p>
    <form action="/add_to_cart" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
    <button class="btn btn-primary">Add to cart</button>
    </form>

    <button class="btn btn-success">Buy Now</button>
</div>
@endsection