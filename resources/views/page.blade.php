<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title }} - {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

@include('./partials/Header')

<div class="title-section">
    <h2>{{ $page->title }}</h2>
</div>

<div class="content-section">
    <div class="wrap">
        <pre>{{ $page->body }}</pre>
    </div>

    @include('./partials/Footer')
</div>
    
</body>
</html>