@extends('layout.layout')
@section('utama')
<main>
    <div class="container">
        <img src="./images/bannerregister.png" class="d-block w-100" alt="Sunset Over the City" style="width: 400 px; height:600px" />
    </div>
</main>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div>
                <h1>Syarat Pendaftaran</h1>
            </div>
            <div>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, aliquam officiis molestiae vitae aut corrupti eligendi velit aliquid hic inventore explicabo ipsam impedit id cumque ut atque voluptatum molestias labore.</li>
                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur similique, corporis assumenda optio, repellat doloribus nam, expedita ullam veritatis officia nesciunt enim quasi vel rem. Sunt cum nostrum culpa est!</li>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui tempore quod culpa voluptas consequatur cupiditate! Nulla natus ea sed reprehenderit, sunt facere ad impedit earum suscipit, similique minima repellat illum.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div>
                <h1 style="text-align: center;">Register</h1>
            </div>
            <div>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputNama" class="form-label">Nama Depan</label>
                            <input type="email" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputNama" class="form-label">Nama Belakang</label>
                            <input type="email" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNama" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNama" class="form-label" style="margin-top: 2%;">Alamat</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputNama" class="form-label">Kelurahan</label>
                                <input type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="text" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputNama" class="form-label">RT</label>
                                <input type="number" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputNama" class="form-label">RW</label>
                                <input type="number" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 2%;">
                            <div>
                                <label for="country">Provinsi</label>
                                <select id="Semarang" name="Semarang">
                                    <option value="usa">Semarang</option>
                                    <option value="canada">Canada</option>
                                    <option value="uk">UK</option>
                                    <option value="australia">Australia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: 2%;">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1" class="form-label">Nomor NISN</label>
                                <input type="number" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1" class="form-label">Rata Rata nilai rapor</label>
                                <input type="number" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: 2%;">
                        <label for="exampleInputPassword1" class="form-label">Rapor semester terakhir</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: 2%;">
                        <label for="exampleInputPassword1" class="form-label">Kartu Keluarga</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: 2%;">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: 2%;">
                        <label for="exampleInputPassword1" class="form-label">Sertifikat *optional</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop