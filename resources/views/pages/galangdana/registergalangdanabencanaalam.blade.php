@extends('layout.layout')
@section('content')
@if (session('success'))
<div class="alert alert-success" style="background-color: green;">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger" style="background-color: red;">
    {{ session('error') }}
</div>
@endif
<div class="container" style="margin-top: 5%; margin-bottom:5%">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <form id="regForm" method="post" action="{{ route('process-form-registerbantuanbencanaalam') }}" enctype="multipart/form-data">
                @csrf
                <h1 id="register">Persyaratan Galang Dana</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                <div class="tab">
                    <input type="hidden" name="id_user" value="{{ $userId }}">
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <label class="container">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form6Example6">pilih kategori galang dana</label>
                                    <select class="form-select" id="id_kategoricampaign" name="id_kategoricampaign">
                                        @foreach ($kategoriRecords as $jenis_kategori)
                                        @if (old('id_kategoricampaign') == $jenis_kategori->nama_kategori)
                                        <option class="option" value="{{ $jenis_kategori->id }}" selected>
                                            {{ $jenis_kategori->nama_kategori }}
                                        </option>
                                        @else
                                        <option class="option" value="{{ $jenis_kategori->id }}">{{ $jenis_kategori->nama_kategori }}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Pemilik rekening bertanggung jawab atas penggunaan dana yang diterima dari galang dana ini dan Kamu sebagai penggalang dana bertanggung jawab atas permintaan pencairan dan pelaporan penggunaan dana." name="praturan_campaign" required />
                                <label class="form-check-label" for="flexCheckDefault">Pemilik rekening bertanggung jawab atas penggunaan dana yang diterima dari galang dana ini.</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="emilik rekening bertanggung jawab atas penggunaan dana yang diterima dari galang dana ini dan Kamu sebagai penggalang dana bertanggung jawab atas permintaan pencairan dan pelaporan penggunaan dana." name="praturan_campaign" required />
                                <label class="form-check-label" for="flexCheckChecked">Kamu sebagai penggalang dana bertanggung jawab atas permintaan pencairan dan pelaporan penggunaan dana.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <p style="text-align: center;"> Penerima </p>
                    <div>judul donasi
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="text" id="judul_campaign" name="judul_campaign" oninput="this.className = ''">
                        </div>
                    </div>
                    <div>Lokasi
                    </div>
                    <div>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" placeholder="Contoh: Kelurahan pulo gadung, kecamatan pulo gadung, kota jakarta timur" style="width: 100%;" oninput="this.className = ''" name="lokasi_campaign"></textarea>
                        </div>
                    </div>
                    <div>Tujuan Galangdana
                    </div>
                    <div>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" placeholder="Membiayai kegiatan 30 ibu pkk" style="width: 100%;" oninput="this.className = ''" name="tujuan_campaign"></textarea>
                        </div>
                    </div>
                    <div>target donasi
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="text" placeholder="20000000" name="targetdonasi_campaign" class="form-control" oninput="formatNumber(this)">
                        </div>
                    </div>
                    <div>rincian galang dana
                    </div>
                    <div>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" placeholder="Contoh Biaya bahan bangunan Rp 20000000, biaya tukang Rp 10000000" style="width: 100%;" oninput="this.className = ''" name="rinciandana_campaign"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <p style="text-align: center;">Deskripsi</p>
                    <div>Deskripsi galangdana
                    </div>
                    <div class="form-floating">
                        <textarea name="deskripsi_campaign" id="deskripsi" placeholder="Perkenalkan, nama saya Rahmat Putra Ginting, founder organisasi Aku Bisa. Organisasi ini berfokus pada pemberdayaan masyarakat di berbagai bidang." oninput="this.className = ''" style="width: 100%;" name="deskripsi_campaign"></textarea>
                    </div>
                    <div>masukkan gambar target donasi
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="file" id="foto_campaign" name="foto_campaign" oninput="this.className = ''">
                        </div>
                    </div>
                    <div>Tanggal Mulai Donasi
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="date" id="tanggal_mulai" class="form-control" name="tanggal_mulai" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div>
                    </div>
                    <div>Tanggal Akhir Donasi
                    </div>
                    <div>
                        <div class="form-floating">
                            <input type="date" class="form-control" name="tanggal_akhir" value="<?php
                                                                                                $Date1 = date('Y-m-d');
                                                                                                echo date('Y-m-d', strtotime($Date1 . ' + 10 day')); ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="thanks-message text-center" id="text-message"> <img src="https://png.pngtree.com/element_our/md/20180515/md_5afb099d307d3.jpg" width="100" class="mb-4">
                    <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you shortly!</span>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right; margin-top:5%"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/registergalangdanakaryakreatif.js') }}"></script>
<script>
    function formatNumber(input) {
        // Get the current input value
        let value = input.value;

        // Remove all non-numeric characters
        value = value.replace(/\D/g, '');

        // Format the number with a period as the thousands separator
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Update the input value with the formatted number
        input.value = value;
    }
</script>
@stop