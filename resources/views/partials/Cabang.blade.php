
<div class="wrap super">
    <div>
        <input type="text" class="box" name="search" id="search" placeholder="Search Cabang" style="width: 60%; margin-left: 70px;" />
        <button type="button" class="pink mt-3 lebar-20 rounded-circle" style="height: 50px; margin-left: 50px;" onclick="getCompany()">Search</button>
    </div>
    <div id="content-view">

    </div>
</div>
<style>
    #content-view { margin-top: 25px; }
    #content-view .item {
        box-shadow: 1px 1px 5px 1px #ddd;
        border-radius: 6px;
        padding: 1px;
    }
    #content-view .item h3 {
        font-size: 25px;
        font-family: RobotoBold;
    }
    .content-section{
        top: 140px;
    }
</style>
<script src="{{ asset('js/base.js') }}"></script>
<script>
    const getCompany = () => {
        let url = "{{ route('api.company') }}"+"?search="+document.getElementById('search').value
        let req = get(url)
        .then(res => {
            res = JSON.parse(res);
            let datas = res.data;
            document.getElementById('content-view').innerHTML = ""
            datas.forEach(data => {
                if(!data.is_center){
                    createElement({
                        el: 'div',
                        attributes: [['class', 'bagi bagi-2']],
                        html:   `<div class="wrap">
                                    <div class="item">
                                        <div class="wrap super">
                                            <h3>${data.name}</h3>
                                            <div class="mt-1">${data.address}</div>
                                            <div class="mt-2">Phone : ${data.phone?data.phone:'-'}</div>
                                            <div class="mt-2">Email : ${data.email?data.email:'-'}</div>
                                        </div>
                                    </div>
                                </div>`,
                        // html: "<h3>"+data.name+"</h3>"
                        //     +  "<ul>"
                        //     +     "<li>"+data.address+"</li>"
                        //     +     "<li>Phone : "+(data.phone?data.phone:'-')+"</li>"
                        //     +     "<li>Email : "+(data.email?data.email:'-')+"</li>"
                        //     +  "</ul>",
                        createTo: '#content-view'
                    });
                }
            })
        });
    }
    getCompany()
</script>