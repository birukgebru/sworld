@extends('master')
@section('content')
<div class="container">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    @foreach ($products as $item)
    <div class="carousel-item {{ $item['id']==1?'active': ''}} ">
      <img src="{{$item['gallery']}}" class="d-block w-100" height="200px" width="auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$item['name']}}</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    @endforeach
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





    <h2 class="pb-2 border-bottom">Featured Products</h2>

    <div class="row ">
      
        @foreach($products as $item)
        <div class="col-lg-4">
        <img src="{{ $item['gallery']}}" class="mb-2" width="50px" height="100px">
          <h4 class="mb-0"><a href="detail/{{$item['id']}}">{{ $item['name']}}</a></h4>
          <p>{{ $item['description']}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection