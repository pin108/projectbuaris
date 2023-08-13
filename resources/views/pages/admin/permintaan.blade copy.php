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
                <th>Foto Campaign</th>
                <th>Is Active</th>
                <th>Tanggal Mulai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->judul_campaign }}</td>
                <td>
                    <img src="{{ asset($item->foto_campaign) }}" alt="Campaign Image" width="100">
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
                    <a href="#detailModal{{ $item->id }}" class="btn btn-sm btn-info" data-toggle="modal">Detail</a>
                    <a href="#updatepermintaan{{ $item->id }}" class="btn btn-sm btn-info" data-toggle="modal">Update Permintaan</a>
                    <a href="#editModal{{ $item->id }}" class="btn btn-sm btn-warning" data-toggle="modal">Edit</a>
                    <a href="#deleteModal{{ $item->id }}" class="btn btn-sm btn-danger" data-toggle="modal">Hapus</a>
                </td>
            </tr>
            <!-- Modal for Detail Campaign -->
            <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{ $item->id }}" aria-hidden="true">
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
                            <p>Is Active: {{ $is_active_text }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Update Campaign Status -->
            <div class="modal fade" id="updatepermintaan{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="updatepermintaan{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updatepermintaan{{ $item->id }}">Update Status Permintaan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Put your campaign update status form here -->
                            <form action="{{ url('/adminis/permintaan/update', $item->id) }}" method="POST">
                                @csrf
                                <select name="is_active" id="is_active">
                                    <option value="1">Disetujui</option>
                                    <option value="2">Tidak Disetujui</option>
                                    <option value="0">Direview</option>
                                </select>
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
            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModal{{ $item->id }}">Edit Campaign</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Put your campaign edit form here -->
                            <form action="{{ url('/adminis/permintaan/edit', $item->id) }}" method="POST">
                                @csrf
                                <!-- Add form fields for editing campaign details -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Delete Campaign -->
            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal{{ $item->id }}" aria-hidden="true">
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
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="tambahGalangDanaModal" tabindex="-1" role="dialog" aria-labelledby="tambahGalangDanaModalLabel" aria-hidden="true">
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
                      <input type="text" class="form-control" id="judul_campaign" name="judul_campaign" required>
                  </div>
                  <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
                  <div class="form-group">
                      <label for="foto_campaign">Foto Campaign</label>
                      <input type="file" class="form-control" id="foto_campaign" name="foto_campaign" accept="image/*" required>
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
