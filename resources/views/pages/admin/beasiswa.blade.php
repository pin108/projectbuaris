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

    {{-- <!-- Tombol Tambah Pendaftaran Beasiswa -->
    <div class="text-right mb-3">
        <a href="#tambahPendaftaranBeasiswaModal" class="btn btn-primary" data-toggle="modal">Tambah Pendaftaran Beasiswa</a>
    </div> --}}

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
    <!-- Modal for Detail Pendaftaran Beasiswa -->
    <div class="modal fade" id="detailPendaftaranBeasiswaModal{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="detailPendaftaranBeasiswaModal{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailPendaftaranBeasiswaModal{{ $item->id }}">Detail Pendaftaran Beasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Display detailed information here -->
                    <p>ID: {{ $item->id }}</p>
                    <p>Nama Depan: {{ $item->nama_depan }}</p>
                    <p>Nama Belakang: {{ $item->nama_belakang }}</p>
                    <p>Email: {{ $item->email }}</p>
                    <p>Nomor HP: {{ $item->nomor_hp }}</p>
                    <p>Kelurahan: {{ $item->kelurahan }}</p>
                    <p>Kecamatan: {{ $item->kecamatan }}</p>
                    <p>Kabupaten: {{ $item->kabupaten }}</p>
                    <p>RT: {{ $item->RT }}</p>
                    <p>RW: {{ $item->RW }}</p>
                    <p>Provinsi: {{ $item->provinsi }}</p>
                    <p>Nomor Identitas: {{ $item->nomor_identitas }}</p>
                    <p>Rata-rata Nilai: {{ $item->ratarata_nilai }}</p>
                    <p>Semester: {{ $item->semester }}</p>
                    <!-- Add more fields as needed -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Other modals for update status and delete remain unchanged -->
@endforeach

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
        @foreach ($pendaftaranBeasiswa as $item)
        <!-- Modal for Edit Pendaftaran Beasiswa -->
        <div class="modal fade" id="editPendaftaranBeasiswaModal{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editPendaftaranBeasiswaModal{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editPendaftaranBeasiswaModal{{ $item->id }}">Edit Pendaftaran Beasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Include your edit form here with appropriate fields -->
                        <form action="{{ route('admin.beasiswa.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Include your form fields here -->
                            <label for="nama_depan">Nama Depan</label>
                            <input type="text" name="nama_depan" value="{{ $item->nama_depan }}" required>
                          
                            <label for="nama_belakang">Nama Belakang</label>
                            <input type="text" name="nama_belakang" value="{{ $item->nama_belakang }}" required>
                          
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $item->email }}" required>
                          
                            <label for="nomor_hp">Nomor HP</label>
                            <input type="text" name="nomor_hp" value="{{ $item->nomor_hp }}" required>
                          
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" name="kelurahan" value="{{ $item->kelurahan }}" required>
                          
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" name="kecamatan" value="{{ $item->kecamatan }}" required>
                          
                            <label for="kabupaten">Kabupaten</label>
                            <input type="text" name="kabupaten" value="{{ $item->kabupaten }}" required>
                          
                            <label for="RT">RT</label>
                            <input type="text" name="RT" value="{{ $item->RT }}" required>
                          
                            <label for="RW">RW</label>
                            <input type="text" name="RW" value="{{ $item->RW }}" required>
                          
                            <label for="provinsi">Provinsi</label>
                            <input type="text" name="provinsi" value="{{ $item->provinsi }}" required>
                          
                            <label for="nomor_identitas">Nomor Identitas</label>
                            <input type="text" name="nomor_identitas" value="{{ $item->nomor_identitas }}" required>
                          
                            <label for="ratarata_nilai">Rata-rata Nilai</label>
                            <input type="text" name="ratarata_nilai" value="{{ $item->ratarata_nilai }}" required>
                          
                            <label for="semester">Semester</label>
                            <input type="text" name="semester" value="{{ $item->semester }}" required>
                          
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Other modals for detail, update status, and delete remain unchanged -->
    @endforeach
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
