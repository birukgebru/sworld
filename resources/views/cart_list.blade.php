
@extends('master')
@section('content')

<div class="container">
    <h1>Cart</h1>
    <a href="/ordernow" class="btn btn-success">Order Now</a>
<table class="table">
    <tbody>
      @foreach($products as $item)
    <tr>
      <th scope="row">{{ $item->name}}</th>
      <td>{{ $item->price}}</td>
      <td>{{ $item->category}}</td>
      <td>{{ $item->description}}</td>
      <td><img src="{{ $item->gallery}}" alt="" srcset="" height="50px"></td>
      <td><a href="removecart/{{$item->cartId}}" class="btn btn-warning">Remove from cart</a></td> 
</tr>
@endforeach
  </tbody>
</table>

</div>

@endsection