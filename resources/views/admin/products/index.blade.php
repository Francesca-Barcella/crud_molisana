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

                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProduct-{{$product->id}}">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="deleteProduct-{{$product->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{$product->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId-{{$product->id}}">Delete Product</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Stai per effettuare una modifica irreversibile, sei sicuro di volerlo fare?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('products.destroy', $product->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ">
                                                Confirm
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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