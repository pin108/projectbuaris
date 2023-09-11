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
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Nama Galang Dana</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payment as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->user->email }}</td>
                        <td>
                            @if ($item->status === 0)
                                <span class="text-danger">User Belum Mengirim Bukti Pembayaran</span>
                            @elseif ($item->status === 1)
                                <span class="text-warning">Bukti Telah Dikirim dan Perlu Direview</span>
                            @elseif ($item->status === 2)
                                <span class="text-success">Pembayaran Disetujui</span>
                            @elseif ($item->status === 3)
                                <span class="text-danger">Pembayaran Ditolak</span>
                            @else
                                <span>Status Tidak Dikenali</span>
                            @endif
                        </td>                        
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->galangdana->judul_campaign}}</td>
                        <td>
                            <a href="#updatestatus{{ $item->id }}" class="btn btn-sm btn-info"
                                data-toggle="modal">Update Status</a>   
                                <a href="#detailModal{{ $item->id }}" class="btn btn-sm btn-info"
                                    data-toggle="modal">Lihat Bukti Pembayaran</a>   
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @foreach ($payment as $item)

    <div class="modal fade" id="updatestatus{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="updatestatus{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updatestatus{{ $item->id }}">Update Status Pendaftaran Beasiswa
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.payment.updatestatus', $item->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="0" {{ $item->status === 0 ? 'selected' : '' }}>User Belum Mengirimkan Bukti
                                </option>
                                <option value="1" {{ $item->status === 1 ? 'selected' : '' }}>Bukti Telah Dikirim
                                </option>
                                <option value="2" {{ $item->status === 2 ? 'selected' : '' }}>Pembayaran Telah Disetujui
                                </option>
                                <option value="3" {{ $item->status === 3 ? 'selected' : '' }}>Pembayaran Ditolak
                                </option>
                            </select>
                        </div>
                        
                        @if ($item->status === 2)
                            <div class="alert alert-warning">
                                Anda tidak dapat mengupdate status karena pembayaran telah disetujui.
                            </div>
                            <button type="submit" class="btn btn-primary" disabled>Submit</button>
                        @else
                            <button type="submit" class="btn btn-primary">Submit</button>
                        @endif
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    

    <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog"
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
    </div>
@endforeach
@endsection
