@extends('main')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="my-3">Il mio blog</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-4 d-flex align-content-stretch">
                    <div class="card my-3">
                        <img class="card-img-top" src="{{ $post->img_path }}" alt="{{ $post->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text my-3">
                                @foreach ($post->tags as $tag)
                                    <span class="badge badge-info">{{ $tag->name }}</span>
                                @endforeach
                            </p>
                            <a href="{{ route('post', $post->slug) }}" class="btn btn-primary">Leggi Post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection