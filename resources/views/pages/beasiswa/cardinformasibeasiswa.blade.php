@extends('layout.layout')
@section('content')
<div class="row">
    @foreach($data as $item)
    <div class="col-md-6">
        <div>
            <div class="card-beasiswa">
                <div class="image">
                    <img src="http://loremflickr.com/320/150?random=4" />
                </div>
                <div class="card-inner">
                    <div class="header">
                        <h2>{{$item->judul_kategoribeasiswa}}</h2>
                        <p>pendaftaran: {{$item->tanggal_pendaftaranawal}} Sampai {{ $item->tanggal_pendaftaranakhir  }}
                        </p>
                    </div>
                    <div class="content">
                        <p>{{$item->deskripsi_beasiswa}}</p>
                        <a href="{{ route('pendaftaran-beasiswa', $item->id) }}" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop