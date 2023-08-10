@extends('layout.layout')
@section('content')
<div class="container rounded bg-white mt-5 mb-5" style="margin-top: 30%;">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-4 border-right" style="padding-left: 10%;">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"> <img class="rounded-circle mt-5" width="120px" height="100px" src="{{ asset('storage/' . $data->fotodiri) }}"><span class="font-weight-bold">{{ $data->name }}</span><span class="text-black-50">{{ $data->email }}</span><span> </span></div>
        </div>
        <div class="col-md-8 border-right">
            <form action="{{ route('items.update',  $data->id) }}" method="POST" enctype="multipart/form-data">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Lengkapi data</h4>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="row mt-2">
                        <input type="hidden" class="form-control" placeholder="id_user" value="" name>
                        <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" value="{{$data->name}}" name="name"> </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Alamat Email</label><input type="email" class="form-control" name="email" value="{{$data->email}}"></div>
                        <div class="col-md-12"><label class="labels">NIK</label><input type="number" class="form-control" name="NIK" placeholder="masukkan NIK" value="{{$data->NIK}}"></div>
                        <div class="col-md-12"><label class="labels">Nomor HP</label><input type="number" class="form-control" placeholder="masukkan nomor hp/wa" name="nomor_hp" value="{{$data->nomor_hp}}"></div>
                        <div class="col-md-12"><label class="labels">Alamat Rumah Domisili <br></label><input type="text" placeholder="masukkan alamat rumah lengkap" name="alamat_rumah" class="form-control" value="{{$data->alamat_rumah}}"></input></div>
                        <div class="col-md-12"><label class="labels">Pekerja/pelajar</label><input type="text" class="form-control" placeholder="pelajar/mahasiswa/pekerja" name="jenis_pekerjaan" value="{{$data->jenis_pekerjaan}}"></div>
                        <div class="col-md-12"><label class="labels">Tempat bekerja/tempat sekolah</label><input type="text" class="form-control" placeholder="contoh:universitas dian nuswantoro/ PT maju bersama" name="tempat_bekerja" value="{{$data->tempat_bekerja}}"></div>
                        <div class="col-md-12"><label class="labels">Masukkan Foto Anda *jpg/png max 5mb</label><input type="file" class="form-control" name="fotodiri"></div>
                        <div class="col-md-12"><label class="labels">Masukkan KTP *pdf max 5mb</label><input type="file" class="form-control" name="ktp"></div>
                        <input type="hidden" name="roles" value="">
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Password baru *optional</label><input type="password" class="form-control" placeholder="password" name="password"></div>
                    </div>
                    <div class="mt-5 text-center"> <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 100%;">save</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@stop