<header class="bg-putih border-bottom">
    <div id="mobileMenuBtn" onclick="toggleHeaderMenu()">
        <i class="fas fa-bars"></i>
    </div>
    <h1 class="logo">
        <a href="{{ route('user.index') }}">
            <img src="{{ asset('images/logo.jpg') }}" >
        </a>
    </h1>
    <nav class="mobile-menu">
        <nav class="menu">
            @foreach ($pages as $page)
                <a href="{{ route('user.page', $page->id) }}">
                    <li>{{ $page->title }}</li>
                </a>
            @endforeach
        </nav>
        <div class="action">
            <a href="{{ route('user.index') }}">
                <button class="pink rounded-circle tinggi-45 p-4 pt-0 pb-0">Cek Resi</button>
            </a>
        </div>
    </nav>
</header>