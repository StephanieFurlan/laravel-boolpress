@extends('layout')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between align-items-end">
            <h1 class="mt-2">Available Posts</h1>
            <a class="btn btn-success" href="{{ route('posts.create')}}">Create New Post</a>
        </div>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
                
        <table class="table table-dark table-striped mt-2">
            <thead>
                <tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Publication_date</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->publication_date }}</td>
                        <td><a class="btn btn-primary" href="{{ route('posts.show', $post->id)}}">Info</a></td>
                        <td><a class="btn btn-success" href="{{ route('posts.edit', $post->id)}}">Update</a></td>
                        <td>
                            <form style="display:inline-block" action="{{ route('posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
              </tbody>
        </table>
        
    </div>
    
@endsection