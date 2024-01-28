@extends('layouts.layout')
@section('content')
  @if ($errors->any())
          <ul class="list-group">
              @foreach ($errors->all() as $error)
                  <li class="list-group-item list-group-item-danger">{{ $error }}</li>
              @endforeach
          </ul>
  @endif
  <form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name">
    </div>
    <div class="form-group">
      <label for="quantity">Quantity</label>
      <input type="text" class="form-control" id="quantity" value="{{old('qty')}}" name="qty">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" value="{{old('price')}}" name="price">
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" value="{{old('description')}}" name="description">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="text" class="form-control" id="image" value="{{old('image')}}" name="image">
    </div>

    <input type="submit" class="btn btn-primary" value="Submit"/>
  </form>
@endsection