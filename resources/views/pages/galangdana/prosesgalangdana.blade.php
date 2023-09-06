@extends('layout.layout')
@section('content')
<div class="container" style="margin-bottom: 10%;">
    <h1>Progress Galang Dana</h1>
    <div class="row">
        @foreach ($pendaftarans as $pendaftaran)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{  asset('storage/'.$pendaftaran->foto_campaign) }}" alt="Campaign Image" style="width: 100%; height:200px"/>
                <div class="card-body">
                    <h5 class="card-title">Judul: {{ $pendaftaran->kategorigalangdana->jenis_kategori }}</h5>
                    <p class="card-text">{{ $pendaftaran->judul_campaign}}</p>
                    @if ($pendaftaran->is_active == 1)
                    <span class="badge badge-success" style="background-color: green;">Disetujui</span>
                    @elseif ($pendaftaran->is_active == 2)
                    <span class="badge badge-danger" style="background-color: red;">Ditolak</span>
                    @else
                    <span class="badge badge-warning" style="background-color: blue;">Sedang Diproses</span>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop