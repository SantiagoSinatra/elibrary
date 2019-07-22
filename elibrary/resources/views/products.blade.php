@extends('layouts.default')
@extends('layouts.nav')
@section('content')
<ul>
    @foreach ($products as $product)
    <li>{{$product->name_prod}}</li>
    <li>{{$product->price}}</li>
    <br>
    @endforeach
</ul>
@endsection
