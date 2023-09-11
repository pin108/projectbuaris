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
                                <img src="{{ asset('storage/'. $donasiDetail->foto_campaign) }}" alt="Campaign Image"  style="width: 100%; height:400px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <h1 class="mt-4">{{$donasiDetail->judul_campaign}}</h1>
                        <p>{{$donasiDetail->deskripsi_campaign}}</p>
                        <div class="row">
                            <div class="col-sm-4">
                              Terkumpul Sekarang ini Rp. {{$totaldonasi}}
                            </div>
                            <div class="col-sm-4">
                                Target Donassi Rp. {{ $donasiDetail->targetdonasi_campaign }}
                            </div>
                        </div>
                        <div class="row" style="margin-top: 2%;">
                            <div class="col-sm-4">
                                <div>
                                    <a href="{{url('showpengalangdana')}}" class="btn btn-primary" style="width: 180px; height: 50px;">tentang yayasan</a>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar" style="margin-top:2% ">
                            <div class="progress-bar">
                                <div class="progress-description">
                                    <?php
                                    $tanggalMulai = strtotime($donasiDetail['tanggal_mulai']); // Tanggal mulai dalam timestamp
                                    $tanggalAkhir = strtotime($donasiDetail['tanggal_akhir']); // Tanggal akhir dalam timestamp
                                    $tanggalSekarang = strtotime(date('Y-m-d')); // Tanggal saat ini dalam timestamp
                                
                                    if ($tanggalSekarang < $tanggalMulai) {
                                        echo "Donasi akan dimulai pada tanggal " . date('Y-m-d', $tanggalMulai);
                                    } elseif ($tanggalSekarang >= $tanggalAkhir) {
                                        echo "Donasi telah berakhir pada tanggal " . date('Y-m-d', $tanggalAkhir);
                                    } else {
                                        $totalHari = $tanggalAkhir - $tanggalMulai; // Total hari antara tanggal mulai dan tanggal akhir
                                        $hariSudahBerlalu = $tanggalSekarang - $tanggalMulai; // Hari yang sudah berlalu
                                
                                        $persentaseKemajuan = ($hariSudahBerlalu / $totalHari) * 100;
                                        echo "Donasi berlangsung, selesai pada tanggal " . date('Y-m-d', $tanggalAkhir) . ". Kemajuan: " . round($persentaseKemajuan, 2) . "%";
                                    }
                                    ?>
                                    
                                </div>
                            </div>
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
                                        Jumlah Donasi
                                    </div>
                                </div>
                                <div>{{ $jumlahDonasi }}</div>
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
                            @foreach($historidonasi as $stori)
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
