@extends('layouts.app')
@section('title', 'Create new post')

@section('content')
<div class=container>
    <h1>Create a New Post</h1>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection