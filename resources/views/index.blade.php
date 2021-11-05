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
        #resiResult {
            margin-top: 35px;
            text-align: center;
        }
        #resiResult .item {
            display: inline-block;
            text-align: left;
            width: 60%;
            border-left: 8px solid #ddd;
            padding: 10px 35px;
            box-sizing: border-box;
        }
        #resiResult .item.active {
            border-left: 8px solid #eb597b;
        }
    </style>
</head>
<body>
    
@include('./partials/Header')

<div class="bg-tab rata-tengah" id="bg-tab">
    <div class="slides">
        <h2 class="mt-5">Kirim ke Luar Negeri dengan Harga Terjangkau</h2>
        <div class="mt-2">IDN Express adalah sebuah perusahaan yang bergerak di bidang jasa pengiriman paket dan dokumen secara door to door, ke seluruh dunia sejak tahun 2019.</div>
        <br />
        <!-- <button class="primary">Action Button</button>
        <button class="primary">Secondary Button</button> -->
    </div>
    <!-- <div class="slides" bg-img='https://thumbs.dreamstime.com/z/electricity-isometric-colored-d-composition-electricity-isometric-colored-d-composition-electric-appliances-online-headline-d-114145588.jpg'>
        <br />
    </div>
    <div class="slides" bg-img='https://thumbs.dreamstime.com/z/isometric-warehouse-logistics-concept-logistic-workers-packed-goods-forklift-containers-vector-illustration-61971814.jpg'>
        <br />
    </div> -->
</div>

<div class="tab-container rata-tengah">
    <div class="bayangan-5 bg-putih rata-kiri bagi lebar-60 rounded smallPadding">
        <div class="button-area rata-tengah">
            <div class="bagi bagi-2 button pointer active" onclick="toggleTab(this)" tab-type="Resi">
                CEK RESI
                <hr size="3px" width="15%" color="#ff0066" />
            </div>
            <div class="bagi bagi-2 button pointer" onclick="toggleTab(this)" tab-type="Ongkir">
                CEK HARGA
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

                <div id="resiResult">
                    {{-- <div class="item">
                        <h4>Picked up</h4>
                        <div class="teks-kecil">04.23</div>
                    </div>
                    <div class="item">
                        <h4>In Transit</h4>
                        <div class="teks-kecil">04.23</div>
                    </div> --}}
                </div>
            </div>
            <div class="tab-content d-none mb-4 rata-tengah" id="formOngkir" style="padding-left: 50px; padding-right: 50px;">
                <div class="mt-2">Hubungi customer service IDN Express untuk mengetahui rate pengiriman dan promo menarik dari IDN Express.</div>
                <div class="item">
                    <div class="wrap">
                        <a href="https://wa.me/6282232202020" target="_blank" style="color: #ffff;">
                            <button type="button" class="pink rounded-circle">
                                <i class="fab fa-whatsapp"></i> Kontak Admin 1
                            </button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="wrap">
                        <a href="https://wa.me/6282236002460" target="_blank" style="color: #ffff;">    
                            <button type="button" class="pink rounded-circle">   
                                <i class="fab fa-whatsapp"></i> Kontak Admin 2
                            </button>
                        </a>
                    </div>
                </div>
                <!-- <form action="#">
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
                </form> -->

                <!-- <div id="ongkirResult"></div> -->
            </div>
        </div>
    </div>
    <br />
    <div class="mt-5 mb-5">
        &nbsp;
    </div>
    
    @include('./partials/Footer')
</div>

@include('./partials/Contact')

<script src="{{ asset('js/base.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/moment-with-locales.min.js') }}"></script>
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
        let req = post("{{ route('api.resi') }}", {
            resi: idResi
        })
        .then(res => {
            button.innerHTML = "Cek Resi";
            res = JSON.parse(res);
            let datas = res.data;
            select("#resiResult").innerHTML = "";
            datas.forEach(data => {
                console.log(data);
                if(data.is_check){
                    let classes = "item";
                    let createdAt = "";
                    if (data.created_at != null) {
                        classes += " active";
                        createdAt = moment(data.created_at).format('LT')
                    }
                    createElement({
                        el: 'div',
                        attributes: [['class', classes]],
                        html: `<h4>${data.name}</h4>
    <div class="teks-kecil">${createdAt}</div>`,
                        createTo: '#resiResult'
                    })
                }
            })
        })
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

    // getOrigin();

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

    // getCommodity();

    // select("#formOngkir form").onsubmit = function (e) {
    //     console.log('getting ongkir...');
    //     let req = post("{{ route('api.calculate') }}", {
    //         originID: select("#origin").value,
    //         destinationID: select("#destination").value,
    //     })
    //     .then(res => {
    //         res = JSON.parse(res);
    //         let commodity = select("#commodity").value;
    //         let weight = select("#weight").value;
    //         let datas = res.data;
    //         select("#ongkirResult").innerHTML = "";
    //         datas.forEach(data => {
    //             if (data.comodity == commodity && data.qty_tonase == weight) {
    //                 console.log(data);
    //                 createElement({
    //                     el: 'div',
    //                     attributes: [['class', 'bagi bagi-2']],
    //                     html:   `<div class="wrap">
    //                                 <div class="item">
    //                                     <div class="wrap super">
    //                                         <h3>${data.name} - ${data.qty_tonase} kg</h3>
    //                                         <div class="mt-1">${toIdr(data.price_tonase)}</div>
    //                                         <div class="mt-2">${data.route}</div>
    //                                     </div>
    //                                 </div>
    //                             </div>`,
    //                     createTo: "#ongkirResult"
    //                 });
    //             } else {
    //                 console.log(data);
    //             }
    //         })
    //     })
    //     e.preventDefault();
    // }

    var indexValue = 0;
    const slideShow = () => {
        setTimeout(slideShow, 5000);
        var x;
        const slide = document.querySelectorAll(".slides");
        for(x = 0; x < slide.length; x++){
            slide[x].style.display = "none";
        }
        indexValue++;
        if(indexValue > slide.length){indexValue = 1}
        slide[indexValue -1].style.display = "inline-block";
        const bgColor = slide[indexValue -1].getAttribute('bg-img')
        if(bgColor){
            document.getElementById("bg-tab").style.backgroundColor = 'none'
            document.getElementById("bg-tab").style.backgroundImage = "url("+bgColor+")"
        }else{
            document.getElementById("bg-tab").style.backgroundImage = "none"
            document.getElementById("bg-tab").style.backgroundColor = '#ff0066'
        }
    }
    slideShow();
</script>

</body>
</html>