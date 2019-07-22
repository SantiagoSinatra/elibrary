@extends('layouts.default')

@section('content')

{{-- carousel inicio --}}
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="\img\test.jpg" alt="test1">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Third slide">
      </div>
    </div>
</div>

<ul>
    @foreach ($products as $product)

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$product->name_prod}}</h5>
          <p class="card-text">${{$product->price}}</p>
        </div>
      </div>
    <br>

    @endforeach
</ul>


@endsection
