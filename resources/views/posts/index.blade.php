<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgray
        }
        small{
            color: greey
        }
    </style>
</head>
<body>
    <div class="container">

    <h1>Blog Pribadi</h1>

    {{-- @php($number = 1) --}}
    
    @foreach ($posts as $post)
        {{-- @php(dd($post)) --}}
        @php($post = explode(",", $post))
        
        <div class="card mb-3">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
            <h5 class="card-title">{{ $post[0] }}</h5>
            <p class="card-text">{{ $post[1] }}</p>
            <p class="card-text">{{ $post[2] }}</p>
            <p class="card-text"><small class="text-body-secondary">Last updated at {{ date("d M Y H:i", strtotime($post[3])) }}</small></p>
            <a href="{{ url("posts/$post[0]") }}" class="btn btn-primary">selengkapnya</a>
            </div>
        </div>
    {{-- <div class="blog">
        <h3>{{ $post[0] }} <small>#{{ $number }}</small></h3>
        <p>{{ $post[1] }}</p>
    </div> --}}
    {{-- @php($number++) --}}
    @endforeach
    </div>

</body>
</html>