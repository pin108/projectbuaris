@extends('layout.layout')
@section('content')
<div class="row">
    @foreach ($searchGalangDana as $galangDana)
    <div class="col-md-6">
        <div>
            <div class="card-beasiswa">
                <div class="image">
                    {{-- <img src="http://loremflickr.com/320/150?random=4" /> --}}
                    <img src="{{ asset('storage/'. $galangDana->foto_campaign) }}" alt="Campaign Image" class="card-img-top custom-img">
                </div>
                <div class="card-inner">
                    <div class="header">
                        <h2>{{ $galangDana->judul_campaign }}</h2>
                        <p>{{ $galangDana->lokasi_campaign }}</p>
                        </p>
                    </div>
                    <div class="content">
                        <p>{{ $galangDana->tujuan_campaign }}</p>
                        <a href="{{ route('detail', ['id' => $galangDana->id]) }}" class="btn btn-primary">Donasi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop