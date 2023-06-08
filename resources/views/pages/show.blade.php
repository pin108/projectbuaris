@extends('layout.layout')

@section('utama')

<main class="main position-relative">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <div id="slider" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#slider" data-bs-slide-to="1"></li>
                        <li data-bs-target="#slider" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://imgix.kitabisa.com/7a0870c7-ac2b-4ac9-8b53-e46816b0b36a.jpg?auto=format&ch=Width,DPR,Save-Data,Viewport-Width"
                                class="d-block w-100" alt="Campaign Image">
                        </div>
                        <div class="carousel-item">
                            <img src="https://example.com/slide2.jpg" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://example.com/slide3.jpg" class="d-block w-100" alt="Slide 3">
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
                <h1 class="mt-4">Komplikasi 3 Penyakit Renggut Masa Kecil Alula</h1>
                <p>Mari bantu pasien di RSHS Bandung berobat sampai sembuh!</p>
                <a href="#" class="btn btn-primary mt-3">Masukkan Donasi Anda</a>
            </div>
        </div>

        <div class="row mt-5">
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
    </div>
</div>

</main>
@endsection
