@extends('layout.layout')
@section('content')
<main>
    <!-- <div class="container" style="margin-top: 2%;">
        <img src="./images/bannerregister.png" class="d-block w-100" alt="Sunset Over the City" style="width: 400 px; height:400px" />
    </div> -->
    @if(session('error'))
    <div class="alert alert-danger mt-3" style="background-color: red;">
        {{ session('error') }}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <div>
                        <h2>{{ $dataRegister['judul_kategoribeasiswa']}}</h2>
                    </div>
                </div>
                <div>
                    <div>
                        <h1>Syarat Pendaftaran</h1>
                    </div>
                    <div>
                        <ul>
                            <p>{!! nl2br(e($dataRegister['syarat_beasiswa'])) !!}</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <h1 style="text-align: center;">Register Beasiswa</h1>
                </div>
                <div>
                    <form method="POST" action="{{ route('store_beasiswa') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" value="{{$userId}}" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" name="id_peserta">
                            <input type="hidden" value="{{$dataRegister['id']}}" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" name="id_kategoribeasiswa">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputNama" class="form-label">Nama Depan</label>
                                <input type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" name="nama_depan">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputNama" class="form-label">Nama Belakang</label>
                                <input type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" name="nama_belakang">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputNama" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputemail" aria-describedby="namaHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputNama" class="form-label">Nomor Hp/ Whatsapps</label>
                            <input type="number" class="form-control" id="exampleInputnomorhp" aria-describedby="namaHelp" name="nomor_hp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputNama" class="form-label" style="margin-top: 2%;">Alamat</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputNama" class="form-label">Kelurahan</label>
                                    <input type="text" class="form-control" id="exampleInputkelurahan" aria-describedby="namaHelp" name="kelurahan">
                                </div>
                                <div class="col-md-4">
                                    <label for="text" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="exampleInputkecamatan" aria-describedby="namaHelp" name="kecamatan">
                                </div>
                                <div class="col-md-4">
                                    <label for="text" class="form-label">Kabupaten</label>
                                    <input type="text" class="form-control" id="exampleInputkabupaten" aria-describedby="namaHelp" name="kabupaten">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 2%;">
                                <div class="col-md-6">
                                    <label for="exampleInputNama" class="form-label">RT</label>
                                    <input type="number" class="form-control" id="exampleInputRT" aria-describedby="namaHelp" name="RT">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputNama" class="form-label">RW</label>
                                    <input type="number" class="form-control" id="exampleInputRW" aria-describedby="namaHelp" name="RW">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 2%;">
                                <label for="exampleInputprovinsi" class="form-label">Provinsi</label>
                                <select class="form-select" id="id_provinsi" name="provinsi">
                                    @foreach ($provinces as $provinsi)
                                    @if (old('provinsi') == $provinsi['name'])
                                    <option class="option" value="{{ $provinsi['name']}}" selected>
                                        {{ $provinsi['name'] }}
                                    </option>
                                    @else
                                    <option class="option" value="{{ $provinsi['name'] }}">{{ $provinsi['name'] }}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 2%;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">Nomor NIM/NISN</label>
                                    <input type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" name="nomor_identitas">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">Rata Rata nilai rapor/IPK</label>
                                    <input type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" name="ratarata_nilai">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 2%;">
                            <label for="exampleInputSmester" class="form-label">Semester Sekarang</label>
                            <input type="number" class="form-control" id="semester" name="semester" placeholder="example 6">
                        </div>
                        <div class="mb-3" style="margin-top: 2%;">
                            <label for="exampleInputPassword1" class="form-label">Kartu siswa/Mahasiswa *jpg/png/jpeg max 5mb</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01" name="kartu_identitas" class="form-control @error('kartu_identitas') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 2%;">
                            <label for="exampleInputPassword1" class="form-label">Kartu Keluarga *jpg/png/jpeg max 5mb </label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01" name="kartu_keluarga" class="form-control @error('kartu_keluarga') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 2%;">
                            <label for="exampleInputPassword1" class="form-label">KTP siswa/mahasiswa *jpg/png/jpeg max 5mb</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01" name="ktp_peserta" class="form-control @error('ktp_peserta') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 2%;">
                            <label for="exampleInputPassword1" class="form-label">KTP perwakilan orang tua *jpg/png/jpeg max 5mb</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01" name="ktp_orangtuapeserta" class="form-control @error('ktp_orangtuapeserta') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 2%;">
                            <label for="exampleInputPassword1" class="form-label">Foto Formal *jpg/png/jpeg max 5mb</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01" name="foto_peserta" class="form-control @error('foto_peserta') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 2%;">
                            <label for="exampleInputPassword1" class="form-label">Sertifikat *optional pdf/max:5mb</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01" name="sertifikat_peserta" class="form-control @error('sertifikat_peserta') is-invalid @enderror">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 5%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@stop