@extends('layout.layout')

@section('utama')
<main class="main position-relative">
    <div class="container-xxl">
        <h1 class="mt-4">Yayasan Penggalang Dana</h1>

        <div class="row">
            <div class="col-md-6">
                <img src="path/to/logo.jpg" alt="Logo Yayasan" class="img-fluid">
            </div>
            
            <div class="col-md-6">
                <h2>Tentang Yayasan</h2>
                <p>Yayasan Penggalang Dana adalah sebuah lembaga nirlaba yang bergerak dalam menggalang dana untuk membantu mereka yang membutuhkan. Yayasan ini telah berdiri sejak tahun XXXX dan telah berhasil mengumpulkan dana yang digunakan untuk berbagai kegiatan sosial.</p>
                <p>Yayasan Penggalang Dana memiliki komitmen untuk memberikan bantuan kepada mereka yang kurang mampu, termasuk dalam bidang pendidikan, kesehatan, dan pemberdayaan masyarakat. Kami percaya bahwa setiap sumbangan, sekecil apapun, dapat membuat perbedaan yang besar dalam kehidupan orang-orang yang membutuhkan.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Foto Kegiatan</h2>
                <div class="row">
                    <div class="col-md-6">
                        <img src="path/to/photo1.jpg" alt="Foto Kegiatan 1" class="img-fluid mb-3">
                    </div>
                    <div class="col-md-6">
                        <img src="path/to/photo2.jpg" alt="Foto Kegiatan 2" class="img-fluid mb-3">
                    </div>
                    <div class="col-md-6">
                        <img src="path/to/photo3.jpg" alt="Foto Kegiatan 3" class="img-fluid mb-3">
                    </div>
                    <div class="col-md-6">
                        <img src="path/to/photo4.jpg" alt="Foto Kegiatan 4" class="img-fluid mb-3">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h2>Kepercayaan Penggalang Dana</h2>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Proin ut nibh vel ante semper molestie.</li>
                    <li>Fusce non leo quis arcu tincidunt eleifend.</li>
                    <li>Etiam vel nulla efficitur, fermentum enim et, vestibulum justo.</li>
                    <li>Sed tempus felis eu mi pulvinar, ac interdum dui mollis.</li>
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Komentar Pelanggan</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">"Yayasan Penggalang Dana sangat membantu saya dalam menghadapi situasi sulit. Terima kasih atas bantuannya!"</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">"Saya sangat menghargai upaya Yayasan Penggalang Dana dalam memberikan akses pendidikan kepada anak-anak yang kurang mampu. Mereka benar-benar membuat perbedaan!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
