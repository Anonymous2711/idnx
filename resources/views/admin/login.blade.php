@extends('layouts.auth')

@section('title', "Login Admin")

@section('content')
<form action="#" method="POST">
    {{ csrf_field() }}
    <div class="mt-2">Email :</div>
    <input type="email" class="box" name="email" required>
    <div class="mt-2">Password :</div>
    <input type="password" class="box" name="password" required>

    <button class="lebar-100 mt-3 primer">Login</button>
</form>
@endsection