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

    <!-- Tombol Tambah Pendaftaran Beasiswa -->
    <div class="text-right mb-3">
        <a href="#tambahPendaftaranBeasiswaModal" class="btn btn-primary" data-toggle="modal">Tambah Pendaftaran Beasiswa</a>
    </div>

    <!-- Tabel Pendaftaran Beasiswa -->
    <div class="table-responsive">
        <table class="table table-bordered" id="pendaftaranBeasiswaTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Email</th>
                    <th>Is Active</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftaranBeasiswa as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_depan }}</td>
                        <td>{{ $item->nama_belakang }}</td>
                        <td>{{ $item->email }}</td>
                        @php
                            $is_active_text = '';
                            $is_active_color = '';
                            if ($item->is_active === 1) {
                                $is_active_text = 'Telah Disetujui';
                                $is_active_color = 'text-success'; // Green color for 'Telah Disetujui'
                            } elseif ($item->is_active === 2) {
                                $is_active_text = 'Tidak Disetujui';
                                $is_active_color = 'text-danger'; // Red color for 'Tidak Disetujui'
                            } elseif ($item->is_active === 0) {
                                $is_active_text = 'Lagi Direview';
                                $is_active_color = 'text-warning'; // Orange color for 'Lagi Direview'
                            } else {
                                $is_active_text = 'Belum Dikonfirmasi';
                                $is_active_color = 'text-secondary'; // Grey color for 'Belum Dikonfirmasi'
                            }
                        @endphp
                        <td class="{{ $is_active_color }}">{{ $is_active_text }}</td>
                        <td>{{ $item->semester }}</td>
                        <td>
                            <a href="#detailPendaftaranBeasiswaModal{{ $item->id }}" class="btn btn-sm btn-info"
                                data-toggle="modal">Detail</a>
                            <a href="#editPendaftaranBeasiswaModal{{ $item->id }}" class="btn btn-sm btn-warning"
                                data-toggle="modal">Edit</a>
                            <a href="#hapusPendaftaranBeasiswaModal{{ $item->id }}" class="btn btn-sm btn-danger"
                                data-toggle="modal">Hapus</a>

                            <a href="#updatestatus{{ $item->id }}" class="btn btn-sm btn-info"
                                data-toggle="modal">Update Status</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @foreach ($pendaftaranBeasiswa as $item)
        <!-- Modal for Update Status Pendaftaran Beasiswa -->
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
                        <form action="{{ route('admin.beasiswa.updatestatus', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="is_active">Status</label>
                                <select class="form-control" id="is_active" name="is_active" required>
                                    <option value="1" {{ $item->is_active === 1 ? 'selected' : '' }}>Telah Disetujui
                                    </option>
                                    <option value="2" {{ $item->is_active === 2 ? 'selected' : '' }}>Tidak Disetujui
                                    </option>
                                    <option value="0" {{ $item->is_active === 0 ? 'selected' : '' }}>Lagi Direview
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Hapus Pendaftaran Beasiswa -->
        <div class="modal fade" id="hapusPendaftaranBeasiswaModal{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="hapusPendaftaranBeasiswaModal{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusPendaftaranBeasiswaModal{{ $item->id }}">Hapus Pendaftaran
                            Beasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus pendaftaran beasiswa ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <form action="{{ route('admin.beasiswa.hapus', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
