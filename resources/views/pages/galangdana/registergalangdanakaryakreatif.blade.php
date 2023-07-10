@extends('layout.layout')
@section('content')
<div class="container" style="margin-top: 5%;">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <form id="regForm">
                <h1 id="register">Persyaratan Galang Dana</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                <div class="tab">
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <label class="container">
                                <div class="row">
                                    <div class="col">
                                        <label class="container">
                                            <p><b>Acara/gerakan/kegiatan/program</b></p>
                                            <p style="font-size: 16px;">contoh Kegiatan pemberdayaan masyarakat, acara pementasan budaya, dsb.</p>
                                            <input type="radio" checked="checked" name="radiobtn" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="collapse" id="syarat1">
                                            <p>Tujuan galang dana sudah benar?</p>
                                            <p>Galang dana acara/gerakan/kegiatan/program memerlukan informasi berikut:</p>
                                            <p><b>Profil penyelenggara</b></p>
                                            <p><b>Nama acara/gerakan/kegiatan/program</b></p>
                                            <p><b>Latar belakang</b></p>
                                            <p><b>Teknis penyelenggaraan</b></p>
                                        </div>
                                        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#syarat1" aria-expanded="false" aria-controls="collapseExample">
                                            <p style="color: blue;">Baca Syarat</p>
                                        </button>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <label class="container">
                                <div class="row">
                                    <div class="col">
                                        <label class="container">
                                            <p><b>Karya, proyek, modal usaha</b></p>
                                            <p style="font-size: 16px;">Contoh: Patungan untuk proyek pesawat nasional, modal untuk kelompok usaha di desa, dsb.</p>
                                            <input type="radio" checked="checked" name="radiobtn" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="collapse" id="syarat2">
                                            <p>Tujuan galang dana sudah benar?</p>
                                            <p>Galang dana acara/gerakan/kegiatan/program memerlukan informasi berikut:</p>
                                            <p><b>Profil penyelenggara</b></p>
                                            <p><b>Nama acara/gerakan/kegiatan/program</b></p>
                                            <p><b>Latar belakang</b></p>
                                            <p><b>Teknis penyelenggaraan</b></p>
                                        </div>
                                        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#syarat2" aria-expanded="false" aria-controls="collapseExample">
                                            <p style="color: blue;">Baca Syarat</p>
                                        </button>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="last1" required />
                                <label class="form-check-label" for="flexCheckDefault">Pemilik rekening bertanggung jawab atas penggunaan dana yang diterima dari galang dana ini.</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" name="last2" required />
                                <label class="form-check-label" for="flexCheckChecked">Kamu sebagai penggalang dana bertanggung jawab atas permintaan pencairan dan pelaporan penggunaan dana.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <p style="text-align: center;"> Data Diri </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Masukkan Nama Sesuai KTP</div>
                            <div>
                                <input type="text" placeholder="Nama sesuai KTP" oninput="this.className = ''" name="nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>Masukkan Nomor Ponsel</div>
                            <input type="number" placeholder="Nomor Ponsel Aktif" oninput="this.className = ''" name="nomor_hp">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 2%;">
                        <div class="col-md-6">
                            <div>Pekerjaan Kamu</div>
                            <input type="text" placeholder="pekerjaan saat ini" oninput="this.className = ''" name="pekerjaan">
                        </div>
                        <div class="col-md-6">
                            <div>Tempat kerja/sekolah</div>
                            <input type="text" placeholder="tempat kerja/sekolah" oninput="this.className = ''" name="tempat">
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <p style="text-align: center;"> Penerima </p>
                    <div>Nama acara/gerakan/kegiatan/program
                    </div>
                    <div>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" placeholder="Kegiatan ibu pkk sehari hari" style="width: 100%;" oninput="this.className = ''"></textarea>
                        </div>
                    </div>
                    <div>Tujuan penyelenggaraan
                    </div>
                    <div>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" placeholder="Membiayai kegiatan 30 ibu pkk" style="width: 100%;" oninput="this.className = ''"></textarea>
                        </div>
                    </div>
                    <div>Lokasi
                    </div>
                    <div>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" placeholder="Contoh: Kelurahan pulo gadung, kecamatan pulo gadung, kota jakarta timur" style="width: 100%;" oninput="this.className = ''"></textarea>
                        </div>
                    </div>
                    <div>Gambar Kegiatan
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="file" name="fileUpload" id="fileUpload" oninput="this.className = ''">
                        </div>
                        <div class="form-floating">
                            <input type="file" name="fileUpload" id="fileUpload" oninput="this.className = ''">
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <p style="text-align: center;">Target Donasi</p>
                    <div>Tentukan perkiraan biaya yang dibutuhkan
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="number" placeholder="20000000" oninput="this.className = ''" name="biaya yang dibutuhkan"></input>
                        </div>
                    </div>
                    <div>Tentukan lama galang dana berlangsung
                    </div>
                    <div>
                        <div class="form-check">
                            <label class="container">
                                <p><b>30 hari</b></p>
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                <p><b>60 hari</b></p>
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                <p><b>120 hari</b></p>
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div>Pilih Tanggal Mulai
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="date" id="tanggalmulai" name="tanggalmulai" oninput="this.className = ''">
                        </div>
                    </div>
                    <div>Isi rincian penggunaan dana
                    </div>
                    <div>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" placeholder="Contoh Biaya bahan bangunan Rp 20000000, 
biaya tukang Rp 10000000" style="width: 100%;" oninput="this.className = ''"></textarea>
                        </div>
                    </div>
                    <div>Beri judul untuk galang dana ini
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="text" placeholder="judul" oninput="this.className = ''" name="judul_galang_dana">
                        </div>
                    </div>
                    <div>Buat Cerita Galang Dana
                    </div>
                    <div class="form-floating">
                        <textarea rows="4" cols="50" placeholder="Perkenalkan, nama saya Rahmat Putra Ginting, founder organisasi Aku Bisa. Organisasi ini berfokus pada pemberdayaan masyarakat di berbagai bidang." style="width: 100%;" oninput="this.className = ''" name="content" id="editor"></textarea>
                        <!-- <textarea name="content" id="editor" placeholder="Perkenalkan, nama saya Rahmat Putra Ginting, founder organisasi Aku Bisa. Organisasi ini berfokus pada pemberdayaan masyarakat di berbagai bidang." style="width: 100%;" oninput="this.className = ''"></textarea> -->
                        <!-- <textarea name="content" id="editor" placeholder="Perkenalkan, nama saya Rahmat Putra Ginting, founder organisasi Aku Bisa. Organisasi ini berfokus pada pemberdayaan masyarakat di berbagai bidang." oninput="this.className = ''"></textarea> -->
                    </div>
                </div>
                <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                    <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you shortly!</span>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right; margin-top:5%"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/registergalangdanakaryakreatif.js"></script>
@stop