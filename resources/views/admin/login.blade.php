@extends('layouts.auth')

@section('title', "Login Admin")

@section('content')
@if ($errors->count() != 0)
    @foreach ($errors->all() as $err)
        <div class="bg-merah-transparan rounded p-2 mb-3">
            {{ $err }}
        </div>
    @endforeach
@endif
<form action="#" method="POST">
    {{ csrf_field() }}
    <div class="mt-2">Email :</div>
    <input type="email" class="box" name="email" required>
    <div class="mt-2">Password :</div>
    <input type="password" class="box" name="password" required>

    <button class="lebar-100 mt-3 primer">Login</button>
</form>
@endsection