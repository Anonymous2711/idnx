<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDN Express</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fa/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
@include('./partials/Header')

<div class="bg-tab rata-tengah">
    <div class="slides">
        <h2 class="mt-5">Kirim ke Luar Negeri dengan Harga Terjangkau</h2>
        <div class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore illum corrupti voluptatum, illo quam provident est error officiis enim! Error odio ipsa, natus accusantium exercitationem deleniti debitis quibusdam praesentium doloribus?</div>
        <br />
        <!-- <button class="primary">Action Button</button>
        <button class="primary">Secondary Button</button> -->
    </div>
</div>

<div class="tab-container rata-tengah">
    <div class="bayangan-5 bg-putih rata-kiri bagi lebar-60 rounded smallPadding">
        <div class="button-area rata-tengah">
            <div class="bagi bagi-2 button pointer active" onclick="toggleTab(this)" tab-type="Resi">
                CEK RESI
                <hr size="3px" width="15%" color="#ff0066" />
            </div>
            <div class="bagi bagi-2 button pointer" onclick="toggleTab(this)" tab-type="Ongkir">
                SIMULASI HARGA
                <hr size="3px" width="15%" color="#ddd" />
            </div>
        </div>
        <div class="wrap">
            <div class="tab-content" id="formResi">
                <form action="#">
                    <div class="mt-2">Lacak nomor resi :</div>
                    <input type="text" class="box" name="resi" id="noResi" />
                    <button class="pink mt-3 lebar-100 rounded-circle">Cek Resi</button>
                </form>
            </div>
            <div class="tab-content d-none mb-4" id="formOngkir">
                <form action="#">
                    <div class="mt-2">Negara Tujuan :</div>
                    <select name="country" class="box">
                        <option value="INDONESIA">INDONESIA</option>
                        <option value="MALAYSIA">MALAYSIA</option>
                        <option value="SINGAPORE">SINGAPORE</option>
                        <option value="AUSTRALIA">AUSTRALIA</option>
                    </select>

                    <div class="mt-2">Jenis Paket :</div>
                    <select name="type" class="box">
                        <option>JENIS A</option>
                        <option>JENIS B</option>
                        <option>JENIS C</option>
                    </select>

                    <div class="mt-2">Berat :</div>
                    <input type="text" class="box" name="weight">

                    <div class="mt-2">Dimensi :</div>
                    <div class="bagi bagi-3">
                        <div class="mt-2 teks-transparan">Panjang <span class="teks-kecil">(cm)</span> :</div>
                        <input type="number" class="box" name="panjang">
                    </div>
                    <div class="bagi bagi-3">
                        <div class="mt-2 teks-transparan">Lebar <span class="teks-kecil">(cm)</span> :</div>
                        <input type="number" class="box" name="lebar">
                    </div>
                    <div class="bagi bagi-3">
                        <div class="mt-2 teks-transparan">Tinggi <span class="teks-kecil">(cm)</span> :</div>
                        <input type="number" class="box" name="tinggi">
                    </div>

                    <button class="lebar-100 mt-3 pink rounded-circle">HITUNG HARGA</button>
                </form>
            </div>
        </div>
    </div>
    <br />
    <div class="mt-5 mb-5">
        asd
    </div>
    
    @include('./partials/Footer')
</div>

<div class="contact-widget corner-top-left corner-top-right">
    <div class="header bg-hijau pointer" onclick="toggleContactWidget(this)">
        Butuh Bantuan?
    </div>
    <div class="content smallPadding d-none">
        <div class="wrap super">
            <div class="mb-2">Hi, silahkan klik CS kami di bawah, kami siap membantu Anda segera</div>
            <a href="#" target="_blank">
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
            <a href="#" target="_blank">
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
            <a href="#" target="_blank">
                <div class="bagi bagi-3 item">
                    <i class="fas fa-phone-alt"></i>
                </div>
            </a>
            <a href="#" target="_blank">
                <div class="bagi bagi-3 item">
                    <i class="fas fa-map-marker"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<script src="js/base.js"></script>
<script>
    const toggleTab = btn => {
        let type = btn.getAttribute('tab-type');
        let borderBottom = btn.childNodes[1];
        selectAll(".tab-content").forEach(tab => tab.classList.add('d-none'));
        selectAll(".tab-container .button-area .button").forEach(button => button.classList.remove('active'));
        selectAll(".tab-container .button-area .button hr").forEach(hr => hr.setAttribute('color', '#ddd'));
        
        select(`#form${type}`).classList.remove('d-none');
        btn.classList.add('active');
        borderBottom.setAttribute('color', '#ff0066');
    }

    const toggleContactWidget = btn => {
        let widgetContent = btn.parentNode.childNodes[3];
        widgetContent.classList.toggle('d-none');
    }

    const toggleHeaderMenu = () => {
        select("header .mobile-menu").classList.toggle('active');
    }

    let baseUrl = {
        origin: "https://apim.solog.id:8080/idnx/routestart/",
        destination: "",
        tracking: "https://apim.solog.id:8080/idnx/resi"
    };

    select("#formResi").onsubmit = function (e) {
        let button = select("#formResi button");
        button.innerHTML = "<i class='fas fa-spinner'></i> loading...";
        let idResi = select("#noResi").value;
        console.log(`mengecek resi : ${idResi}`);
        let url = baseUrl.tracking;
        let action = `${url}/${idResi}`;
        fetch(action, {
            mode: 'no-cors'
        })
        .then(res => res.text())
        .then(res => {
            button.innerHTML = "Cek Resi";
            console.log(res);
        });
        return false;
        e.preventDefault();
    }

    const getOrigin = () => {
        let getting = post("api.php", {
            endpoint: "https://apim.solog.id:8080/idnx/routestart/"
        })
        .then(res => {
            console.log(res);
        })
    }
    getOrigin();
</script>

</body>
</html>