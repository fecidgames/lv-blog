@extends('layouts.app')
@section('title', 'Blog')
@section('content')

<div class=container>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col">
            <h1>Posts</h1>
        </div>
        <div class="col d-flex justify-content-end" style="align-items: center;">
            <a href="/posts/create" class="btn btn-success">New Post</a>
        </div>
    </div>
    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text">{{$post->body}}</p>
            </div>
        </div>
    @endforeach
</div>

@endsection