@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Pasta</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @forelse ($products as $product)
        <div class="col">
            <a href="{{ route ('products.show', $product->id)}}">
                <div class="card">
                    <img src="{{ $product->src }}" alt="{{ $product->title }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="">{{ $product->title }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <div class="col-12">
            <p>Sorry no products in this store yet!</p>
        </div>
        @endforelse;
    </div>
</div>

@endsection