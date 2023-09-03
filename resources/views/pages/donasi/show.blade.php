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
                        <a href="{{ route('senddonasi', ['id' => $donasiDetail->id]) }}" class="btn btn-primary mt-3" style="margin-top: 2%;">Masukkan Donasi Anda</a>
                    </div>
                </div>
            </div>
            <div class="row mt-8" style="margin-top: 2%;">
                <div class="col-md-6">
                    <p>DO'A</p>
                    <div class="card">
                        <div class="card-body">
                            @foreach($result as $item)
                                <h5 class="card-title">{{ $item->nama }}</h5>
                                <p class="card-text">{{ $item->deskripsi_doa }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>History Donasi</h2>
                        <div class="card-body">
                            @foreach($resulthistori as $stori)
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="fw-bold">{{ $stori->created_at }}</span> donated {{ $stori->total }}
                                </li>
                            </ul>
                            @endforeach
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
