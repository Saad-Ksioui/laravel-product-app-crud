@extends('layouts.layout')
@section('content')
    <h1>Product List</h1>
    <div class="d-flex justify-content-center align-items-center">
    @foreach ($products as $product)

        <div class="card" style="width: 18rem;">
          <img src="{{ $product->image }}" class="card-img-top" alt="{{$product->name}}">
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <h6>${{$product->price}}</h6>
            <h6>{{$product->qty}}</h6>
            <p class="card-text">{{$product->description}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

    @endforeach
  </div>
@endsection