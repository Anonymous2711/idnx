<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

@include('./partials/Header')

<div class="title-section">
    <h2>Frequently Asked Question</h2>
</div>

<div class="content-section">
    <div class="wrap">
        @foreach ($faqs as $faq)
            <div class="bagi bagi-2">
                <div class="wrap">
                    <div class="bg-putih rounded bayangan-5 smallPadding">
                        <div class="wrap">
                            <h3>{{ $faq->question }}</h3>
                            <hr size='1' color="#ddd" />
                            <div class="mt-3">{{ $faq->answer }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('./partials/Footer')
</div>
    
</body>
</html>