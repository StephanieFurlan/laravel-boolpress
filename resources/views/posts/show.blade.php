@extends('layout')
@section('content')
    <div class="container">
        <ul>
            <li>Author: {{$post->author}}</li>
            <li>Content: {{$post->content}}</li>
        </ul>
    </div>
@endsection