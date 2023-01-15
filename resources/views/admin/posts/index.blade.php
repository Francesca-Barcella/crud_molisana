@extends('layouts.app')

@section('content')

<div class="container">
    <div class="heading d-flex justify-content-between">
        <h2>Posts</h2>
        <div>
            <a href="{{route('posts.create')}}" class="btn btn-primary">Add New Post</a>
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
                @forelse ($posts as $post)
                <tr class="table-primary">
                    <td scope="row">{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td><img src="{{$post->cover}}" alt="{{$post->title}}" width="80"></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye  fa-sm fa-fw"></i>
                        </a>
                        <a class="btn btn-secondary btn-sm" href="#">
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