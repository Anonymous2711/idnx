<div class="contact-widget corner-top-left corner-top-right">
    <div class="header bg-hijau pointer" onclick="toggleContactWidget(this)">
        Butuh Bantuan?
    </div>
    <div class="content smallPadding d-none">
        <div class="wrap super">
            <div class="mb-2">Hi, silahkan klik CS kami di bawah, kami siap membantu Anda segera</div>
            <a href="https://wa.me/6282232202020" target="_blank">
                <div class="item bayangan-5 rounded">
                    <div class="bagi lebar-10">
                        <div class="icon"><i class="fab fa-whatsapp"></i></div>
                    </div>
                    <div class="bagi lebar-90 pl-2">
                        Kontak Admin
                        <div class="teks-kecil teks-transparan keterangan">Cek Harga</div>
                    </div>
                </div>
            </a>
            <a href="https://wa.me/6282236002640" target="_blank">
                <div class="item bayangan-5 rounded">
                    <div class="bagi lebar-10">
                        <div class="icon"><i class="fab fa-whatsapp"></i></div>
                    </div>
                    <div class="bagi lebar-90 pl-2">
                        Kontak Admin
                        <div class="teks-kecil teks-transparan keterangan">Cek Harga</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="teks-kecil rata-tengah mb-2">atau</div>
        <div class="rata-tengah contact-list">
            <a href="#" target="_blank">
                <div class="bagi bagi-3 item">
                    <i class="fas fa-envelope"></i>
                </div>
            </a>
            <a href="tel:6282232202020">
                <div class="bagi bagi-3 item">
                    <i class="fas fa-phone-alt"></i>
                </div>
            </a>
            <a href="https://goo.gl/maps/Cocz1FrFs96NRroD7" target="_blank">
                <div class="bagi bagi-3 item">
                    <i class="fas fa-map-marker"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    const toggleContactWidget = btn => {
        let widgetContent = btn.parentNode.childNodes[3];
        widgetContent.classList.toggle('d-none');
    }
</script>