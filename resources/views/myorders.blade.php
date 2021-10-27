
@extends('master')
@section('content')

<div class="container">
    <h1>My Orders</h1>
<table class="table">
    <tbody>
      @foreach($products as $item)
    <tr>
      <th scope="row">{{ $item->name}}</th>
      <td>{{ $item->price}}</td>
      <td>{{ $item->category}}</td>
      <td>{{ $item->address}}</td>
      <td>{{ $item->payment_method}}</td>
      <td>{{ $item->payment_status}}</td>
      <td>{{ $item->status}}</td>
      <td><img src="{{ $item->gallery}}" alt="" srcset="" height="50px"></td>
</tr>
@endforeach
  </tbody>
</table>

</div>

@endsection