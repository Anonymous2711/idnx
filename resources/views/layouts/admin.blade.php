<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    @yield('head.dependencies')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    
@php
    $currentRoute = Route::current();
    $routeParameters = json_decode(json_encode($currentRoute->parameters), FALSE);
@endphp

<div class="main-navigation">
    <div class="header smallPadding rata-tengah">
        <div class="wrap super">
            <div class="icon mb-1">{{ $myData->initial }}</div>
            <h2>{{ $myData->name }}</h2>
        </div>
    </div>
    <ul>
        {{-- <a href="{{ route('admin.dashboard') }}">
            <li class="{{ $currentRoute->uri == 'admin/dashboard' ? 'active' : '' }}">
                <div class="icon"><i class="fas fa-home"></i></div>
                <div class="text">Dashboard</div>
            </li>
        </a> --}}
        <a href="#">
            <li class="{{ $currentRoute->getPrefix() == 'admin/page' ? 'active' : '' }}">
                <div class="icon"><i class="fas fa-file"></i></div>
                <div class="text">Halaman
                    <i class="fas fa-angle-down"></i>
                </div>
                <ul>
                    <a href="{{ route('admin.pages') }}">
                        <li class="{{ Route::currentRouteName() == 'admin.pages' ? 'active' : '' }}">
                            <div class="icon"><i class="fas fa-file"></i></div>
                            <div class="text">Semua Halaman</div>
                        </li>
                    </a>
                    <a href="{{ route('admin.pages.create') }}">
                        <li class="{{ Route::currentRouteName() == 'admin.pages.create' ? 'active' : '' }}">
                            <div class="icon"><i class="fas fa-plus"></i></div>
                            <div class="text">Tambah Baru</div>
                        </li>
                    </a>
                </ul>
            </li>
        </a>
        <a href="{{ route('admin.faq') }}">
            <li class="{{ $currentRoute->uri == 'admin/faq' ? 'active' : '' }}">
                <div class="icon"><i class="fas fa-question"></i></div>
                <div class="text">FAQ</div>
            </li>
        </a>
        <a href="{{ route('admin.admin') }}">
            <li class="{{ $currentRoute->uri == 'admin/admin' ? 'active' : '' }}">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="text">User Admin</div>
            </li>
        </a>
        <a href="{{ route('admin.logout') }}">
            <li class="{{ $currentRoute->uri == 'admin/logout' ? 'active' : '' }}">
                <div class="icon"><i class="fas fa-sign-out-alt"></i></div>
                <div class="text">Logout</div>
            </li>
        </a>
    </ul>
</div>

<header class="main">
    <h1>@yield('title')</h1>
    <div class="action">
        @yield('header.action')
    </div>
</header>

<div class="content">
    @yield('content')
    <div class="tinggi-70"></div>
</div>

<script src="{{ asset('js/base.js') }}"></script>
@yield('javascript')

</body>
</html>