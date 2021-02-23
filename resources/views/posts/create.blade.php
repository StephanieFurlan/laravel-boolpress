@extends('layout')

@section('content')
<div class="container mt-5 pt-5">
    <h1>Nuovo Post</h1>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Titolo..." name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="subtitle">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" placeholder="Sottotitolo..." name="subtitle" value="{{ old('subtitle') }}">
        </div>

        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control" id="author" placeholder="Autore..." name="author" value="{{ old('author') }}">
        </div>

        <div class="form-group">
            <label for="content">Testo</label>
            <textarea class="form-control" id="content" rows="8" name="content" >{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="publication_date">Title</label>
            <input type="date" class="form-control" id="publication_date" placeholder="Data di publicazione..." name="publication_date" value="{{ old('publication_date') }}">
        </div>

        <div class="form-group">
            <label for="img_path">Immagine</label>
            <input type="text" class="form-control" id="img_path" placeholder="Url Immagine..." name="img_path" value="{{ old('img_path') }}">
        </div>

        <div class="form-group">
            <label for="post_status">Stato del post</label>
            <select class="form-control" id="post_status" name="post_status">
                <option value="public">Public</option>
                <option value="private">Private</option>
                <option value="draft">Draft</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comment_status">Stato dei commenti</label>
            <select class="form-control" id="comment_status" name="comment_status">
                <option value="open">Open</option>
                <option value="private">Private</option>
                <option value="closed">Closed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="extra_content">Extra Info</label>
            <textarea class="form-control" id="content" rows="3" name="extra_content">{{ old('extra_content') }}</textarea>
        </div>
        <h1 class="mt-5">Tags</h1>
        @foreach ($tags as $tag)
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="tag-{{ $tag->id }}" value="{{ $tag->id }}" name="tags[]">
                    <label class="form-check-label" for="tag-{{ $tag->id }}">{{$tag->name}}</label>
                </div>
            </div>
        @endforeach
        
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Salva</button>
            <a href="{{ route('posts.index')}}" class="btn btn-primary">Elenco post</a>
        </div>
        
    </form>

</div>
@endsection