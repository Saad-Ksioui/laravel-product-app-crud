@extends('layouts.layout')
@section('content')
  @if ($errors->any())
  <ul class="list-group">
      @foreach ($errors->all() as $error)
          <li class="list-group-item list-group-item-danger">{{ $error }}</li>
      @endforeach
  </ul>
  @endif
  <form method="post" action="{{route('product.update', ['product'=>$product])}}">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
    </div>
    <div class="form-group">
      <label for="quantity">Quantity</label>
      <input type="text" class="form-control" id="quantity" name="qty" value="{{$product->qty}}">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="text" class="form-control" id="image" name="image" value="{{$product->image}}">
    </div>

    <input type="submit" class="btn btn-primary" value="Submit"/>
  </form>
@endsection