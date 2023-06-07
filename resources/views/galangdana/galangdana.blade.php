@extends('layout.layout')
@section('content')
<div class="containergalangdana">
    <div class="container">
        <div>
            <h1 style="text-align: center; margin-bottom:5%; margin-top:5%">HALLO orang baik salurkan bantuan mu, kami akan membantu</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <img src="./images/health.png" class="" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Galang dana bantuan orang sakit</h5>
                    <p class="card-text">Khusus biaya pengobatan atau perawatan penyakit tertentu</p>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Buat galang dana orang sakit</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="./images/bencanaalam.png" class="d-block w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Galang dana bantuan bencana alam</h5>
                    <p class="card-text">Digunakan untuk menyalurkan bantuan sosial bencana alam</p>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Buat galang dana bencana alam</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="./images/donasi.jpg" class="d-block w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Galang dana bantuan lainnya</h5>
                    <p class="card-text">Untuk bantuan pendidikan, kemanusiaan, kegiatan sosial difabel, dsb.</p>
                    <a href="{{url('galangdanalainnya')}}" class="btn btn-primary" style="width: 100%;">Buat galang bantuan lainnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop