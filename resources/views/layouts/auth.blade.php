<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    
<div class="content">
    <h1>
        <img src="{{ asset('images/logo.jpg') }}">
    </h1>
    <div class="tinggi-25"></div>
    <div class="wrap">
        @yield('content')
    </div>
</div>

</body>
</html>