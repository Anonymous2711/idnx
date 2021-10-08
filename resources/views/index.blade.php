<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDN Express</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fa/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        #ongkirResult { margin-top: 25px; }
        #ongkirResult .item {
            box-shadow: 1px 1px 5px 1px #ddd;
            border-radius: 6px;
            padding: 1px;
        }
        #ongkirResult .item h3 {
            font-size: 25px;
            font-family: RobotoBold;
        }
    </style>
</head>
<body>
    
@include('./partials/Header')

<div class="bg-tab rata-tengah">
    <div class="slides">
        <h2 class="mt-5">Kirim ke Luar Negeri dengan Harga Terjangkau</h2>
        <div class="mt-2">IDN Express adalah sebuah perusahaan yang bergerak di bidang jasa pengiriman paket dan dokumen secara door to door, ke seluruh dunia sejak tahun 2019.</div>
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
                    <div class="mt-2">Asal :</div>
                    <select name="origin" id="origin" class="box" onchange="chooseOrigin(this.value)" required>
                        <option value="">-- PILIH ASAL PENGIRIMAN ---</option>
                    </select>
                    <div class="mt-2">Tujuan :</div>
                    <select name="destination" id="destination" class="box" required>
                        <option value="">-- PILIH TUJUAN --</option>
                    </select>

                    <div class="mt-2">Jenis Paket :</div>
                    <select name="commodity" class="box" id="commodity" required>
                        <option value="">-- PILIH ---</option>
                    </select>

                    <div class="mt-2">Berat :</div>
                    <input type="text" class="box" name="weight" id="weight">

                    {{-- 
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
                     --}}

                    <button class="lebar-100 mt-3 pink rounded-circle">HITUNG HARGA</button>
                </form>

                <div id="ongkirResult"></div>
            </div>
        </div>
    </div>
    <br />
    <div class="mt-5 mb-5">
        &nbsp;
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
        let getting = get("{{ route('api.routestart') }}")
        .then(res => {
            res = JSON.parse(res);
            let datas = res.data;
            console.log(datas);
            datas.forEach(data => {
                createElement({
                    el: 'option',
                    attributes: [
                        ['value', data.id]
                    ],
                    html: data.name,
                    createTo: '#origin'
                });
            });
        });
    }

    getOrigin();

    const chooseOrigin = originID => {
        console.log('getting destination...');
        let req = post("{{ route('api.routeEnd') }}", {
            originID: originID
        })
        .then(res => {
            res = JSON.parse(res);
            let datas = res.data;
            select("#destination").innerHTML = "";
            datas.forEach(data => {
                createElement({
                    el: 'option',
                    attributes: [
                        ['value', data.id]
                    ],
                    html: data.name,
                    createTo: '#destination'
                });
            })
        })
    }

    const getCommodity = () => {
        let req = get("{{ route('api.commodity') }}")
        .then(res => {
            res = JSON.parse(res);
            let datas = res.data;
            console.log(datas);
            datas.forEach(data => {
                createElement({
                    el: 'option',
                    attributes: [
                        ['value', data.name]
                    ],
                    html: data.name,
                    createTo: '#commodity'
                });
            });
        });
    }

    getCommodity();

    select("#formOngkir form").onsubmit = function (e) {
        console.log('getting ongkir...');
        let req = post("{{ route('api.calculate') }}", {
            originID: select("#origin").value,
            destinationID: select("#destination").value,
        })
        .then(res => {
            res = JSON.parse(res);
            let commodity = select("#commodity").value;
            let weight = select("#weight").value;
            let datas = res.data;
            select("#ongkirResult").innerHTML = "";
            datas.forEach(data => {
                if (data.comodity == commodity && data.qty_tonase == weight) {
                    console.log(data);
                    createElement({
                        el: 'div',
                        attributes: [['class', 'bagi bagi-2']],
                        html: `<div class="wrap">
    <div class="item">
        <div class="wrap super">
            <h3>${data.name} - ${data.qty_tonase} kg</h3>
            <div class="mt-1">${toIdr(data.price_tonase)}</div>
            <div class="mt-2">${data.route}</div>
        </div>
    </div>
</div>`,
                        createTo: "#ongkirResult"
                    });
                } else {
                    console.log(data);
                }
            })
        })
        e.preventDefault();
    }
</script>

</body>
</html>