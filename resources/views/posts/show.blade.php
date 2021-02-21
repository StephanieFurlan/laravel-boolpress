@extends('layout')
<nav class="navbar navbar-dark fixed-top bg-dark navbar-expand-lg">
    <a class="navbar-brand" href="{{ route('posts.index') }}">POSTS</a>
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('posts.index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
    </ul>
</nav>
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h1 style="font-size: 80px" class="mb-2">{{ $post->title }}</h1>
            <h3 style="color:gray">
                <i>{{ $post->subtitle }}</i>
            </h3>
            <img class="mb-5" src="{{$post->img_path}}" alt="">
        </div>

        <p>{{ $post->content}}</p>
        <h2 class="mt-5">Other Info</h2>
        <ul class="list-group">
            <li class="list-group-item"><b>Status: </b>{{ $post->postInfo->post_status }}</li>
            <li class="list-group-item"><b>Comment Status: </b>{{ $post->postInfo->comment_status }}</li>
            <li class="list-group-item"><b>Other: </b>{{ $post->postInfo->content }}</li>
        </ul>
        <h2 class="mt-5">Comments</h2>
        <div class="list-group">
            @foreach ($post->comments as $comment)
            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$comment->author}}</h5>
                    <small>{{$comment->comment_date}}</small>
                  </div>
                  <p class="mb-1">{{$comment->content}}</small>
            </div>
            @endforeach
          </div>
    </div>
    
@endsection