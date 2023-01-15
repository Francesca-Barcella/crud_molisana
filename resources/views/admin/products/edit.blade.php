@extends('layouts.app')

@section('content')

<div class="container py-5 bg-light bg-opacity-75">
  <h1>Edit product:  {{$product->title}}</h1>
  <form action="{{route('products.update', $product->id)}}" method="post" class="card p-3">
    @csrf
    @method('PUT')
    <!-- campo title -->
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Insert Title" aria-describedby="titleHelpId" value="{{$product->title}}">
      <small id="titleHelpId" class="text-muted">Add the product title here</small>
    </div>

    <div class="d-flex">
      <!-- campo preview image -->
      <div class="image_preview me-5">
        <img src="{{$product->src}}" alt="" width="100">
      </div>
      <!-- campo image -->
      <div class="mb-3">
        <label for="src" class="form-label">Product Image</label>
        <input type="text" name="src" id="src" class="form-control" placeholder="Insert Image" aria-describedby="titleHelpId" value="{{$product->src}}">
        <small id="titleHelpId" class="text-muted">Add the product image here</small>
      </div>
    </div>

    <!-- campo description -->
    <div class="mb-3">
      <label for="descritpion" class="form-label">Description</label>
      <textarea class="form-control" name="descritpion" id="descritpion" rows="4" value="{{$product->description}}"></textarea>
    </div>
    <!-- campo type -->
    <div class="mb-3">
      <label for="type" class="form-label">Product Type</label>
      <input type="text" name="type" id="type" class="form-control" placeholder="Insert type procut" aria-describedby="typeHelpId" value="{{$product->type}}">
      <small id="typeHelpId" class="text-muted">Add the product type here</small>
    </div>
    <!-- campo title -->
    <div class="mb-3">
      <label for="cooking_time" class="form-label">Product cooking time</label>
      <input type="text" name="cooking_time" id="cooking_time" class="form-control" placeholder="Insert cooking time" aria-describedby="cookingTimeHelpId" value="{{$product->cooking_time}}">
      <small id="cookingTimeHelpId" class="text-muted">Add product ooking time here</small>
    </div>
    <!-- campo title -->
    <div class="mb-3">
      <label for="weight" class="form-label">Product Weight </label>
      <input type="text" name="weight" id="weight" class="form-control" placeholder="Insert Weight" aria-describedby="weightHelpId" value="{{$product->weight}}">
      <small id="weightHelpId" class="text-muted">Add the product type here</small>
    </div>
    <!-- button invio -->
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</div>

@endsection