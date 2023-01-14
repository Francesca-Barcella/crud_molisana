@extends('layouts.app')

@section('content')

<div class="container">
    <div class="heading d-flex justify-content-between">
        <h2>Pasta</h2>
        <div>
            <a href="{{route('products.create')}}" class="btn btn-primary">Add New Pasta</a>
        </div>

    </div>

    <div class="table-responsive-md">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($products as $product)
                <tr class="table-primary">
                    <td scope="row">{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td><img src="{{$product->src}}" alt="{$product->title}}" width="80"></td>
                    <td>view - edit - cancel</td>
                </tr>
                @empty
                <tr class="table-primary">
                    <td scope="row">Sorry no records to show</td>
                </tr>
                @endforelse
            </tbody>

            <tfoot>

            </tfoot>
        </table>
    </div>
</div>

@endsection