<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Posts</title>
</head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('blog') }}">POSTS</a>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('blog') }}">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
    @yield('content')
    
</body>
</html>