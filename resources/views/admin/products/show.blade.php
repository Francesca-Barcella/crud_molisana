@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="d-flex gap-4">
        <div>
            <img src="{{$product->src}}" alt="{{$product->src}}">
        </div>
        <div class="bg-light bg-opacity-75 p-4">
            <h1>{{$product->title}}</h1>
            <p>{{$product->description}}</p>
            <div><strong>Tempo di Cottura:</strong> {{$product->cooking_time}}</div>
            <div><strong>Tempo di pasta:</strong>  {{$product->type}}</div>
            <div><strong>Peso:</strong>  {{$product->weight}}</div>
        </div>
    </div>
</div>

@endsection