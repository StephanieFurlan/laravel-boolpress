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
                        <td><a class="btn btn-danger" href="">Delete</a></td>
                        
                    </tr>
                    @endforeach
              </tbody>

        </table>

    </div>
    
@endsection