<footer class="rata-kiri smallPadding">
    <div class="wrap">
        <div class="bagi lebar-50 about">
            <div class="logo">
                <img src="{{ asset('./images/logo.png') }}">
            </div>
            <div class="mt-4 teks-tebal">Rungkut Menanggal 14</div>
            <div class="mt-1 teks-transparan teks-kecil">Gunung Anyar, Surabaya</div>
        </div>
        <div class="bagi lebar-25">
            <h3>Laman</h3>
            <hr size="4" color="#fff" width="10%" align="left" class="mb-2" />
            @foreach ($pages as $page)
                <a href="{{ route('user.page', $page->id) }}">
                    <li>{{ $page->title }}</li>
                </a>
            @endforeach
        </div>
        <div class="bagi lebar-25">
            <h3>Temukan Kami</h3>
            <hr size="4" color="#fff" width="10%" align="left" class="mb-2" />
            <a href="#">
                <li>
                    <div class="icon"><i class="fab fa-facebook-square"></i></div>
                    Facebook
                </li>
            </a>
            <a href="#">
                <li>
                    <div class="icon"><i class="fab fa-instagram"></i></div>
                    Instagram
                </li>
            </a>
            <a href="#">
                <li>
                    <div class="icon"><i class="fab fa-twitter"></i></div>
                    Twitter
                </li>
            </a>
        </div>
    </div>
</footer>