@extends('layout.layout')

@section('content')
<div class="container" style="margin-bottom: 10%;">
    <h1>Progress Galang Dana</h1>
    <div class="row">
        @foreach ($pendaftarans as $pendaftaran)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/'.$pendaftaran->foto_campaign) }}" alt="Campaign Image" style="width: 100%; height: 200px"/>
                <div class="card-body">
                    <h5 class="card-title">Judul: {{ $pendaftaran->kategorigalangdana->jenis_kategori }}</h5>
                    <p class="card-text">{{ $pendaftaran->judul_campaign }}</p>
                    @if ($pendaftaran->is_active == 1)
                    <span class="badge badge-success" style="background-color: green;">Disetujui</span>
                    @elseif ($pendaftaran->is_active == 2)
                    <span class="badge badge-danger" style="background-color: red;">Ditolak</span>
                    @else
                    <span class="badge badge-warning" style="background-color: blue;">Sedang Diproses</span>
                    @endif
                    <a href="#detailModal{{ $pendaftaran->id }}" class="btn btn-sm btn-info" data-toggle="modal">Detail</a>

                    <!-- Modal for Detail Campaign -->
                    <div class="modal fade" id="detailModal{{ $pendaftaran->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="detailModalLabel{{ $pendaftaran->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailModalLabel{{ $pendaftaran->id }}">Detail Campaign</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Put your campaign detail information here -->
                                    <p>Judul: {{ $pendaftaran->judul_campaign }}</p>
                                    <p>Lokasi: {{ $pendaftaran->lokasi_campaign }}</p>
                                    <p>Tujuan: {{ $pendaftaran->tujuan_campaign }}</p>
                                    <p>Target Donasi: {{ $pendaftaran->targetdonasi_campaign }}</p>
                                    <p>Rincian Dana: {{ $pendaftaran->rinciandana_campaign }}</p>
                                    <p>Deskripsi: {{ $pendaftaran->deskripsi_campaign }}</p>
                                    <p>Praturan: {{ $pendaftaran->praturan_campaign }}</p>
                                    <p>Tanggal Mulai: {{ $pendaftaran->tanggal_mulai }}</p>
                                    <p>Tanggal Akhir: {{ $pendaftaran->tanggal_akhir }}</p>
                                    <p>Pendapatan: {{ $pendaftaran->pendapatan_campaign }}</p>
                                    <p>Total Pencairan: {{ $pendaftaran->pencairan }}</p>
                                    <a href="#requestPencairanModal{{ $pendaftaran->id }}" class="btn btn-sm btn-primary" data-toggle="modal">Request Pencairan Dana</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal for Request Pencairan Dana -->
<div class="modal fade" id="requestPencairanModal{{ $pendaftaran->id }}" tabindex="-1" role="dialog" aria-labelledby="requestPencairanModalLabel{{ $pendaftaran->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="requestPencairanModalLabel{{ $pendaftaran->id }}">Request Pencairan Dana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Untuk melakukan request pencairan dana, silakan hubungi admin yayasan melalui:</p>
                <p>Email: admin@example.com</p>
                <p>Telepon: +123456789</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

        <!-- Modal for Pencairan Dana -->
        <div class="modal fade" id="requestpencairandana{{ $pendaftaran->id }}" tabindex="-1" role="dialog"
            aria-labelledby="requestpencairandanaLabel{{ $pendaftaran->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="requestpencairandanaLabel{{ $pendaftaran->id }}">Proses Pencairan Dana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Put your pencairan dana content here -->
                        <p>Request pencairan dana bisa hubungi admin yayasan</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@stop
