@extends('adminlayout.mother')
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

@section('container')
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

    <!-- Ubah nama tabel menjadi "paymentsTable" -->
    <div class="table-responsive">
        <table class="table table-bordered" id="campaignTable">
            <thead>
                <tr>
                    <th>Id galang dana</th>
                    <th>Nama galang dana</th>
                    <th>Hasil Keseluruhan galang dana</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($totals as $item)
                    <tr>
                        <td>{{ $item->id_galangdana }}</td>
                        <td>{{ $item->galangdana->judul_campaign }}</td>
                        <td>{{ $item->total }}</td>
                        <td>
                            <a href="#updatestatus{{ $item->id }}" class="btn btn-sm btn-info"
                                data-toggle="modal">verifikasi pencairan dana</a>   
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="updatestatus{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="updatestatus{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pencairan galang dana</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('dana.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
    
                        <div class="form-group">
                            <label for="id_galangdana">ID Galangdana</label>
                            <input type="text" class="form-control" id="id_galangdana" name="id_galangdana" value="{{ $item->id_galangdana }}" readonly>
                        </div>
    
                        <div class="form-group">
                            <label for="id_penggalang">ID Penggalang Dana</label>
                            <input type="text" class="form-control" id="id_penggalang" name="id_penggalang" value="{{ $item->galangdana->id_user }}" readonly>
                        </div>
    
                        <div class="form-group">
                            <label for="nama">Nama Penggalang Dana</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->galangdana->user->name }}" readonly>
                        </div>
    
                        <div class="form-group">
                            <label for="judul_galangdana">Judul Galang Dana</label>
                            <input type="text" class="form-control" id="judul_galangdana" name="judul_galangdana" value="{{ $item->galangdana->judul_campaign }}" readonly>
                        </div>
    
                        <div class="form-group">
                            <label for="jumlah">Total Galang Dana</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $item->total }}" readonly>
                        </div>
    
                        <div class="form-group">
                            <label for="pencairanDana">Foto Pencairan Dana (*.jpg)</label>
                            <input type="file" id="pencairanDana" name="pencairanDana">
                        </div>
    
                        <div class="form-group">
                            <label for="penyerahanDana">Foto Penyerahan Dana (*.jpg)</label>
                            <input type="file" id="penyerahanDana" name="penyerahanDana">
                        </div>
    
                        <button type="submit" class="btn btn-primary">Cairkan Dana</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="detailModalLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel{{ $item->id }}">Detail Campaign</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Put your campaign detail information here -->
                    <img src="{{ asset('storage/' . $item->buktitransaksi) }}" alt="buktibayar" width="200" height="200">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
{{-- @endforeach --}}
@endsection
