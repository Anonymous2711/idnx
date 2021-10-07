<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    
<div class="content">
    <div class="wrap super">
        <div class="rata-tengah">
            <img src="{{ asset('images/icon.png') }}" class="logo">
        </div>
        <form action="#" class="mt-4" id="stepOne">
            <div class="mt-2">No. Ponsel :</div>
            <input type="text" class="box" name="phone" id="phone" required>

            <button class="lebar-100 mt-2 hijau">Login</button>
        </form>

        <form action="#" class="mt-4 d-none" id="stepTwo"></form>
    </div>
</div>

<script src="{{ asset('js/base.js') }}"></script>
<script>
    select("form#stepOne").onsubmit = function (e) {
        let phone = select("#stepOne #phone").value;
        let req = post("{{ route('api.user.login') }}", {
            phone: phone
        })
        .then(res => {
            console.log(res);
        })
        e.preventDefault();
    }
</script>

</body>
</html>