@extends('layout')
@section('content')
    <div class="container mt-5">
        <h1>{{ $post->title }}</h1>
        <table class="table table table-striped">
            <tbody>
                <tr>
                    <th>Subtitle</th>
                    <td>{{$post->subtitle}}</td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{$post->author}}</td>
                </tr>
                <tr>
                    <th>Publication_date</th>
                    <td>{{$post->publication_date}}</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{{$post->content}}</td>
                </tr>
            </tbody>
        </table>
        <h2 class="mt-5">Other Info</h2>
        <ul>
            <li><b>Status: </b>{{ $post->postInfo->post_status }}</li>
            <li><b>Comment Status: </b>{{ $post->postInfo->comment_status }}</li>
            <li><b>Other: </b>{{ $post->postInfo->content }}</li>
        </ul>
        <a class="btn btn-primary" href="{{ route('posts.index') }}">Home</a>
    </div>
    
@endsection