@extends('layout.layout')
@section('utama')
<main>
    <div class="container">
        <h4 style="text-align: center; margin-top:9%">Detail Donasi</h4>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div id="slider" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#slider" data-bs-slide-to="1"></li>
                            <li data-bs-target="#slider" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://imgix.kitabisa.com/7a0870c7-ac2b-4ac9-8b53-e46816b0b36a.jpg?auto=format&ch=Width,DPR,Save-Data,Viewport-Width" class="d-block w-100" alt="Campaign Image">
                            </div>
                            <div class="carousel-item">
                                <img src="https://imgix.kitabisa.com/7a0870c7-ac2b-4ac9-8b53-e46816b0b36a.jpg?auto=format&ch=Width,DPR,Save-Data,Viewport-Width" class="d-block w-100" alt="Campaign Image">
                            </div>
                            <div class="carousel-item">
                                <img src="https://imgix.kitabisa.com/7a0870c7-ac2b-4ac9-8b53-e46816b0b36a.jpg?auto=format&ch=Width,DPR,Save-Data,Viewport-Width" class="d-block w-100" alt="Campaign Image">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slider" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slider" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" style="margin-top: 2%;">Kirim Doa</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 2%;">Kirim</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <h1 class="mt-4">{{$donasiDetail->judul_campaign}}</h1>
                        <p>{{$donasiDetail->deskripsi_campaign}}</p>
                        <div class="row">
                            <div class="col-sm-4">
                                Rp122.292.050
                            </div>
                            <div class="col-sm-4">
                                Terkumpul dari target donasi {{ $donasiDetail->targetdonasi_campaign }}
                            </div>
                        </div>
                        <div class="row" style="margin-top: 2%;">
                            <div class="col-sm-4">
                                <div>
                                    <a href="#" class="btn btn-primary" style="width: 180px; height: 50px;">laporan keuangan</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <a href="{{url('showpengalangdana')}}" class="btn btn-primary" style="width: 180px; height: 50px;">tentang yayasan</a>
                                </div>
                            </div>
                        </div>
                        <P style="margin-top: 2%;">4 hari lagi</P>
                        <div class="progress" style="margin-top: 2%;">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="container" style="margin-top: 2%;">
                        <div class="row border-top">
                            <div class="col-sm border">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="col-sm">
                                        99999
                                    </div>
                                </div>
                                <div> jumlah donasi</div>
                            </div>
                            <div class="col-sm border">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="col-sm">
                                        2
                                    </div>
                                </div>
                                <div>kabar terbaru</div>
                            </div>
                            <div class="col-sm border">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fas fa-money-bill"></i>
                                    </div>
                                    <div class="col-sm">
                                        2
                                    </div>
                                </div>
                                <div>pencairan dana</div>
                            </div>
                        </div>
                        {{ $donasiDetail->id }}
                        <a href="{{ route('senddonasi', ['id' => $donasiDetail->id]) }}" class="btn btn-primary mt-3" style="margin-top: 2%;">Masukkan Donasi Anda</a>
                    </div>
                </div>
            </div>
            <div class="row mt-8" style="margin-top: 2%;">
                <div class="col-md-6">
                    <h2>Doa</h2>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">"Semoga Alula segera sembuh dan mendapatkan kesembuhan yang
                                sempurna."</p>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">"Semoga Alula diberikan kekuatan dan ketabahan dalam menghadapi
                                proses penyembuhan."</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>History Donasi</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="fw-bold">John Doe</span> donated $100
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Jane Smith</span> donated $50
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Michael Johnson</span> donated $200
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection

<!-- "id" => 7
    "id_user" => 2308000002
    "id_kategoricampaign" => 7
    "judul_campaign" => "Judul Campaign 7"
    "lokasi_campaign" => "Lokasi Campaign 7"
    "tujuan_campaign" => "Tujuan Campaign 7"
    "targetdonasi_campaign" => 17000
    "rinciandana_campaign" => "Rincian Dana Campaign 7"
    "deskripsi_campaign" => "Deskripsi Campaign 7"
    "foto_campaign" => "nama-file-gambar-7.jpg"
    "tanggal_mulai" => "2023-08-10"
    "tanggal_akhir" => "2023-08-24"
    "praturan_campaign" => "Praturan Campaign 7"
    "is_active" => 1
    "created_at" => "2023-08-17 10:14:37"
    "updated_at" => "2023-08-17 10:14:37" -->