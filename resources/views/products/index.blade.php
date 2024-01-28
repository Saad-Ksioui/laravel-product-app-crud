@extends('layouts.layout')
@section('content')
    <h1>Product List</h1>
    <div class="successMessage">
      <ul>
        @if (session()->has('success'))
          <li class="list-group-item list-group-item-success">{{session('success')}}</li>
        @endif
      </ul>

    </div>
    @if ($products->count()===0)
        <div class="container d-flex justify-content-center align-items-center" style="margin-top: 15rem">
          <h3>The Store is empty</h3>
        </div>
    @else
      <div class="d-flex justify-content-center flex-wrap align-items-center">
        @foreach ($products as $product)

            <div class="card m-3" style="width: 20rem;">
              <img src="{{ $product->image }}" class="card-img-top w-5 h-5" style="width: 20rem;height: 18rem;object-fit: contain;" alt="{{$product->name}}">
              <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <h6>${{$product->price}}</h6>
                <h6>{{$product->qty}}</h6>
                <p class="card-text">{{$product->description}}</p>
                <div class="d-flex justify-content-between">
                  <a href="{{route('product.edit', ['product'=>$product])}}" class="btn btn-primary">Edit Product</a>
                  <form action="{{route('product.delete', ['product'=>$product])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete Product" class="btn btn-danger">
                  </form>
                </div>
              </div>
            </div>

        @endforeach
      </div>
    @endif

@endsection