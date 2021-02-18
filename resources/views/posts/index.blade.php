@extends('layout')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
        {{ $post->author }}    
    @endforeach
    </div>
    
@endsection