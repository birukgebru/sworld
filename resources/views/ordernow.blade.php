
@extends('master')
@section('content')

<div class="container">
    <h1>Order</h1>
<table class="table">
    <tbody>
     
    <tr>
      <th scope="row">Amount</th>
      <td>Br. {{ $total}}</td>
    </tr>
    <tr>
      <th scope="row">Tax</th>
      <td>Br. 0</td>
    </tr>
    <tr>
      <th scope="row">Delivery</th>
      <td>Br. 10</td>
    </tr>
    <tr>
      <th scope="row">Total Amount</th>
      <td>{{ $total + 10}}</td>
    </tr>

  </tbody>
</table>


<form action="/orderplace" method="post">
    @csrf
    <textarea name="address" id="" cols="30" rows="5" placeholder="your adress"></textarea><br><br>
    <h3>Pament</h3> 
    <label><input type="radio" value="online" name="payment" id=""> Online </label><br>
    <label> <input type="radio" value="emi" name="payment" id=""> EMI </label><br>
    <label> <input type="radio" value="on delivery" name="payment" id=""> On Delivery </label><br>

    <button type="submit"class="btn btn-primary">Order Now</button>

</form>


</table>

</div>

@endsection