@extends('layouts.app')

@section('content')

<div class="container p-5 bg-light bg-opacity-75">
    <h1>Create New Post</h1>
    <form action="{{route('posts.store')}}" method="post" class="card p-3">
        @csrf
        <!-- campo title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Insert Title" aria-describedby="titleHelpId">
            <small id="titleHelpId" class="text-muted">Add the post title here</small>
        </div>
        <!-- campo image -->
        <div class="mb-3">
            <label for="cover" class="form-label">posts Image</label>
            <input type="text" name="cover" id="cover" class="form-control" placeholder="Insert Image" aria-describedby="coverHelpId">
            <small id="coverHelpId" class="text-muted">Add the post image here</small>
        </div>
        <!-- campo description -->
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="content" id="content" rows="4"></textarea>
        </div>

        <!-- button invio -->
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


@endsection