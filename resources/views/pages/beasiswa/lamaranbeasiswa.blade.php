@extends('layout.layout')
@section('content')
<div class="container" style="margin-bottom: 10%;">
    <h1>Lamaran Beasiswa</h1>
    <div class="row">
        @foreach ($pendaftarans as $pendaftaran)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://www.indonesiacollege.co.id/wp-content/uploads/2023/04/beasiswa.jpg" class="card-img-top" alt="Donation Image">
                <div class="card-body">
                    <h5 class="card-title">Jenis: {{ $pendaftaran->kategoribeasiswa->jenis_kategoribeasiswa }}</h5>
                    <p class="card-text">{{ $pendaftaran->kategoribeasiswa->judul_kategoribeasiswa }}</p>
                    @if ($pendaftaran->is_active == 1)
                    <span class="badge badge-success" style="background-color: green;">Lulus</span>
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