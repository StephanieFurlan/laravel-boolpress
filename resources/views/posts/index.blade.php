@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mt-2">Available Posts</h1>
        <table class="table table-dark table-striped mt-2">
            <thead>
                <tr>
                  <th>Author</th>
                  <th>Content</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->content }}</td>
                        <td><a class="btn btn-primary" href="{{ route('posts.show', $post->id)}}">Info</a></td>
                        <td><a class="btn btn-success" href="">Update</a></td>
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
        <a class="btn btn-primary" href="{{ route('posts.create')}}">Create New Post</a>
    </div>
    
@endsection