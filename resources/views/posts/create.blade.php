@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Nuovo Post</h1>
    <form action="{{ route('posts.store')}}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Titolo..." name="title">
        </div>
        <div class="form-group">
            <label for="subtitle">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" placeholder="Sottotitolo..." name="sottotitolo">
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control" id="author" placeholder="Autore..." name="author">
        </div>
        <div class="form-group">
            <label for="content">Example textarea</label>
            <textarea class="form-control" id="content" rows="8" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="img_path">Immagine</label>
            <input type="text" class="form-control" id="img_path" placeholder="Url Immagine..." name="img_path">
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
        <div class="d-flex justify-content-between">
            <a type="submit" class="btn btn-success">Salva</a>
            <a href="{{ route('posts.index' )}}" class="btn btn-primary">Elenco post</a>
        </div>
    </form>
</div>
@endsection