@extends('layout.layout')
@section('content')
<div class="container" style="margin-bottom: 10%;">
    <h1>Lamaran Beasiswa</h1>
    <div class="row">
        @foreach ($pendaftarans as $pendaftaran)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div>
                            <p class="card-text">Jenis: {{ $pendaftaran->kategoribeasiswa->jenis_kategoribeasiswa }}</p>
                        </div>
                        <div>
                            <p class="card-text">{{ $pendaftaran->kategoribeasiswa->judul_kategoribeasiswa }}</p>
                        </div>
                    </div>
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