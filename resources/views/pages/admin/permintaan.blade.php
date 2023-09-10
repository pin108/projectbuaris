@extends('adminlayout.mother')

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
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

<!-- Tombol Tambah Galang Dana -->
<div class="text-right mb-3">
    <a href="#tambahGalangDanaModal" class="btn btn-primary" data-toggle="modal">Tambah Galang Dana</a>
</div>

<!-- Tabel yang sudah ada di dalam template -->
<div class="table-responsive">
    <table class="table table-bordered" id="campaignTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Campaign</th>
                <th>Pendapatan Rupiah</th>
                <th>Foto Campaign</th>
                <th>Is Active</th>
                <th>Tanggal Mulai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data1 as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul_campaign }}</td>
                    <td>{{$item->pendapatan_campaign}}</td>
                    <td>
                        <img src="{{ asset('storage/'. $item->foto_campaign) }}" alt="Campaign Image" style="width: 40px; height: 40px">
                    </td>
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
                    <td>{{ $item->tanggal_mulai }}</td>
                    <td>
                        <form action="{{ route('galangdana.cekberkas') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type='hidden' name='id' value='{{ $item->id }}'>
                            <button class="badge bg-primary border-0" onclick="return confirm('unduh data?')">cek berkas</button>
                        </form>
                        <a href="#detailModal{{ $item->id }}" class="btn btn-sm btn-info"
                            data-toggle="modal">Detail</a>
                        <a href="#updatepermintaan{{ $item->id }}" class="btn btn-sm btn-info"
                            data-toggle="modal">Update Permintaan</a>
                        <a href="#editModal{{ $item->id }}" class="btn btn-sm btn-warning"
                            data-toggle="modal">Edit</a>
                        <a href="#deleteModal{{ $item->id }}" class="btn btn-sm btn-danger"
                            data-toggle="modal">Hapus</a>
                    </td>
                </tr>
                <!-- Modal for Detail Campaign -->
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
                                <p>Judul: {{ $item->judul_campaign }}</p>
                                <p>Lokasi: {{ $item->lokasi_campaign }}</p>
                                <p>Tujuan: {{ $item->tujuan_campaign }}</p>
                                <p>Target Donasi: {{ $item->targetdonasi_campaign }}</p>
                                <p>Rincian Dana: {{ $item->rinciandana_campaign }}</p>
                                <p>Deskripsi: {{ $item->deskripsi_campaign }}</p>
                                <p>Praturan: {{ $item->praturan_campaign }}</p>
                                <p>Tanggal Mulai: {{ $item->tanggal_mulai }}</p>
                               
                                <p>Tanggal Akhir: {{ $item->tanggal_akhir }}</p>
                                <p>Pendapatan: {{ $item->pendapatan_campaign }}</p>

                                <p>Is Active: {{ $is_active_text }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Update Campaign Status -->
                <div class="modal fade" id="updatepermintaan{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="updatepermintaan{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updatepermintaan{{ $item->id }}">Update Status
                                    Permintaan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Put your campaign update status form here -->
                                <form action="{{ route('updatestatus', $item->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="is_active">Status</label>
                                        <select class="form-control" id="is_active" name="is_active">
                                            <option value="1">Telah Disetujui</option>
                                            <option value="2">Tidak Disetujui</option>
                                            <option value="0">Lagi Direview</option>
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

                <!-- Modal for Edit Campaign -->
                <!-- Modal for Edit Campaign -->
                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="editModal{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModal{{ $item->id }}">Edit Campaign</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Form for editing Campaign data -->
                                <form action="{{ route('admin.update', $item->id) }}" method="POST">
                                    @csrf
                                    {{-- @method('PUT') --}}
                                    <div class="form-group">
                                        <label for="judul_campaign">Judul Campaign</label>
                                        <input type="text" class="form-control" id="judul_campaign" name="judul_campaign" value="{{ $item->judul_campaign }}" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="id_kategoricampaign">Kategori Campaign</label>
                                        <select class="form-control" id="id_kategoricampaign" name="id_kategoricampaign" required>
                                            <option value="" disabled selected>Select Category</option>
                                            <!-- Loop through your categories data -->
                                            @foreach ($data2 as $jenis_kategori)
                                                <option value="{{ $jenis_kategori->id }}" {{ $jenis_kategori->id === $item->id_kategoricampaign ? 'selected' : '' }}>
                                                    {{ $jenis_kategori->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="lokasi_campaign">Lokasi Campaign</label>
                                        <input type="text" class="form-control" id="lokasi_campaign" name="lokasi_campaign" value="{{ $item->lokasi_campaign }}" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="tujuan_campaign">Tujuan Campaign</label>
                                        <input type="text" class="form-control" id="tujuan_campaign" name="tujuan_campaign" value="{{ $item->tujuan_campaign }}" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="targetdonasi_campaign">Target Donasi Campaign</label>
                                        <input type="number" class="form-control" id="targetdonasi_campaign" name="targetdonasi_campaign" value="{{ $item->targetdonasi_campaign }}" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="rinciandana_campaign">Rincian Dana Campaign</label>
                                        <input type="text" class="form-control" id="rinciandana_campaign" name="rinciandana_campaign" value="{{ $item->rinciandana_campaign }}" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="deskripsi_campaign">Deskripsi Campaign</label>
                                        <textarea class="form-control" id="deskripsi_campaign" name="deskripsi_campaign" required>{{ $item->deskripsi_campaign }}</textarea>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="tanggal_mulai">Tanggal Mulai</label>
                                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $item->tanggal_mulai }}" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="tanggal_akhir">Tanggal Akhir</label>
                                        <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" value="{{ $item->tanggal_akhir }}" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="praturan_campaign">Praturan Campaign</label>
                                        <textarea class="form-control" id="praturan_campaign" name="praturan_campaign" required>{{ $item->praturan_campaign }}</textarea>
                                    </div>
                            
                                    <!-- Add other input fields for editing -->
                            
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Delete Campaign -->
                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="deleteModal{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModal{{ $item->id }}">Hapus Campaign</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Put your delete confirmation message here -->
                                <p>Apakah Anda yakin ingin menghapus campaign ini?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route('admin.destroy', $item->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="tambahGalangDanaModal" tabindex="-1" role="dialog"
    aria-labelledby="tambahGalangDanaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahGalangDanaModalLabel">Tambah Galang Dana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk menambahkan data Galang Dana -->
                <form action="{{ url('/adminis/permintaan/tambah') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Tambahkan input fields sesuai dengan tabel yang telah Anda buat -->
                    <div class="form-group">
                        <label for="judul_campaign">Judul Campaign</label>
                        <input type="text" class="form-control" id="judul_campaign" name="judul_campaign"
                            required>
                    </div>

                    {{-- @foreach ($data1 as $items) --}}

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">pilih kategori galang dana</label>
                        <select class="form-select" id="id_kategoricampaign" name="id_kategoricampaign">
                            @foreach ($data2 as $jenis_kategori)
                                @if (old('id_kategoricampaign') == $jenis_kategori->nama_kategori)
                                    <option class="option" value="{{ $jenis_kategori->id }}" selected>
                                        {{ $jenis_kategori->nama_kategori }}
                                    </option>
                                @else
                                    <option class="option" value="{{ $jenis_kategori->id }}">
                                        {{ $jenis_kategori->nama_kategori }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
                    <div class="form-group">
                        <label for="foto_campaign">Foto Campaign</label>
                        <input type="file" class="form-control" id="foto_campaign" name="foto_campaign"
                            accept="image/*" required>
                    </div>

                    <div class="form-group">
                        <label for="lokasi_campaign">Lokasi Campaign</label>
                        <input type="text" class="form-control" id="lokasi_campaign" name="lokasi_campaign"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="tujuan_campaign">Tujuan Campaign</label>
                        <input type="text" class="form-control" id="tujuan_campaign" name="tujuan_campaign"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="targetdonasi_campaign">Target Donasi Campaign</label>
                        <input type="number" class="form-control" id="targetdonasi_campaign"
                            name="targetdonasi_campaign" required>
                    </div>
                    <div class="form-group">
                        <label for="rinciandana_campaign">Rincian Dana Campaign</label>
                        <input type="text" class="form-control" id="rinciandana_campaign"
                            name="rinciandana_campaign" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_campaign">Deskripsi Campaign</label>
                        <textarea class="form-control" id="deskripsi_campaign" name="deskripsi_campaign" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" required>
                    </div>
                    <div class="form-group">
                        <label for="praturan_campaign">Praturan Campaign</label>
                        <textarea class="form-control" id="praturan_campaign" name="praturan_campaign" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Galang Dana</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Function to display the Update Permintaan modal
    function showUpdatePermintaanModal() {
        $('#updatepermintaan').modal('show');
    }

    // Function to display the Edit Campaign modal
    function showEditModal() {
        $('#editModal').modal('show');
    }

    // Function to display the Delete Campaign modal
    function showDeleteModal() {
        $('#deleteModal').modal('show');
    }

    // Attach event handlers to the links
    $(document).ready(function() {
        // Click event for the "Update Permintaan" link
        $('a.btn-info[href="#updatepermintaan"]').click(function(event) {
            event.preventDefault();
            showUpdatePermintaanModal();
        });

        // Click event for the "Edit" link
        $('a.btn-warning[href="#editModal"]').click(function(event) {
            event.preventDefault();
            showEditModal();
        });

        // Click event for the "Hapus" link
        $('a.btn-danger[href="#deleteModal"]').click(function(event) {
            event.preventDefault();
            showDeleteModal();
        });
    });
</script>
@endsection
