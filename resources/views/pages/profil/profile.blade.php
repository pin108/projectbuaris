@extends('layout.layout')
@section('content')
<div class="container rounded bg-white mt-5 mb-5" style="margin-top: 30%;">
    @if (session('success'))
    <div class="alert alert-success" style="background-color: green;  color:aliceblue">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger" style="background-color: red; color:aliceblue">
        {{ session('error') }}
    </div>
    @endif
    <div class="row" style="padding-left: 10%;">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="120px" height="100px" src="{{ asset('storage/' . $user->fotodiri) }}"><span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span>
            </div>
        </div>
        <div class="col-md-8 border-right">
            <form action="{{ route('items.update', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Data Diri</h4>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="row mt-2">
                        <input type="hidden" class="form-control" placeholder="id_user" value="" name>
                        <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name" readonly></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Alamat Email</label><input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email" readonly></div>
                        <div class="col-md-12"><label class="labels">NIK</label><input type="number" class="form-control" name="NIK" placeholder="masukkan NIK" value="{{ Auth::user()->NIK }}" readonly></div>
                        <div class="col-md-12"><label class="labels">Nomor HP</label><input type="number" class="form-control" placeholder="masukkan nomor hp/wa" name="nomor_hp" value="{{ Auth::user()->nomor_hp }}" readonly></div>
                        <div class="col-md-12"><label class="labels">Alamat Rumah Domisili <br></label><input type="text" placeholder="masukkan alamat rumah lengkap" name="alamat_rumah" class="form-control" value="{{ Auth::user()->alamat_rumah }}" readonly></input></div>
                        <div class="col-md-12"><label class="labels">Pekerja/pelajar</label><input type="text" class="form-control" placeholder="pelajar/mahasiswa/pekerja" name="jenis_pekerjaan" value="{{ Auth::user()->jenis_pekerjaan }}" readonly></div>
                        <div class="col-md-12"><label class="labels">Tempat bekerja/tempat sekolah</label><input type="text" class="form-control" placeholder="contoh:universitas dian nuswantoro/ PT maju bersama" name="tempat_bekerja" value="{{ Auth::user()->tempat_bekerja }}" readonly></div>
                    </div>
                    <div class="mt-5 text-center" style="background-color: blue; color:aliceblue">
                        <a href="/profile/{{ Auth::user()->id }}/edit" class="badge bg-warning border-0">Lengkapi data disini</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@stop