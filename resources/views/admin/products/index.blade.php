@extends('layouts.app')

@section('content')

<div class="container">
    <div class="heading d-flex justify-content-between">
        <h2>Pasta</h2>
        <div>
            <a href="{{route('products.create')}}" class="btn btn-primary">Add New Pasta</a>
        </div>
    </div>

    <!-- messaggio avvennuta modifica -->
    @if(session('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>{{session('message')}}</strong>
    </div>
    @endif

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
                    <td><img src="{{$product->src}}" alt="{{$product->title}}" width="80"></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{route('guest.products.show', $product->id)}}">
                            <i class="fas fa-eye  fa-sm fa-fw"></i>
                        </a>
                        <a class="btn btn-secondary btn-sm" href="{{route('products.edit', $product->id)}}">
                            <i class="fas fa-pencil  fa-sm fa-fw"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash  fa-sm fa-fw"></i>
                        </a>

                    </td>
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