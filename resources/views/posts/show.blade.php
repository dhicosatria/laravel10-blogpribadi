<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLog | Judul : {{ $post[1] }}</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet"  crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $post[1] }}</h2>
            <p class="blog-post-meta">{{ date("d M Y H:i",strtotime($post[3]))   }} by <a href="#">Mark</a></p>
    
            <p>{{ $post[2] }}</p>
            <p
        </article>
        <a href="{{ url("posts") }}">back</a>
    </div>
</body>
</html>