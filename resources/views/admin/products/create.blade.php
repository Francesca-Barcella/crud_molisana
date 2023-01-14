@extends('layouts.app')

@section('content')

<div class="container py-5 bg-light bg-opacity-75">
    <h1>Create New product</h1>
    <form action="{{route('products.store')}}" method="post" class="card p-3">
        @csrf
        <!-- campo title -->
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Insert Title" aria-describedby="titleHelpId">
          <small id="titleHelpId" class="text-muted">Add the product title here</small>
        </div>
        <!-- campo image -->
        <div class="mb-3">
          <label for="src" class="form-label">Product Image</label>
          <input type="text" name="src" id="src" class="form-control" placeholder="Insert Image" aria-describedby="titleHelpId">
          <small id="titleHelpId" class="text-muted">Add the product image here</small>
        </div>
        <!-- campo description -->
        <div class="mb-3">
          <label for="descritpion" class="form-label">Description</label>
          <textarea class="form-control" name="descritpion" id="descritpion" rows="4"></textarea>
        </div>
        <!-- campo type -->
        <div class="mb-3">
          <label for="type" class="form-label">Product Type</label>
          <input type="text" name="type" id="type" class="form-control" placeholder="Insert type procut" aria-describedby="typeHelpId">
          <small id="typeHelpId" class="text-muted">Add the product type here</small>
        </div>
        <!-- campo title -->
        <div class="mb-3">
          <label for="cooking_time" class="form-label">Product cooking time</label>
          <input type="text" name="cooking_time" id="cooking_time" class="form-control" placeholder="Insert cooking type" aria-describedby="cookingTimeHelpId">
          <small id="cookingTimeHelpId" class="text-muted">Add product ooking time here</small>
        </div>
        <!-- campo title -->
        <div class="mb-3">
          <label for="weight" class="form-label">Product Weight </label>
          <input type="text" name="weight" id="weight" class="form-control" placeholder="Insert Image" aria-describedby="weightHelpId">
          <small id="weightHelpId" class="text-muted">Add the product type here</small>
        </div>
        <!-- button invio -->
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection