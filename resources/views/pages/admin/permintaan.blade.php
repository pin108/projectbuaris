@extends('adminlayout.mother')

@section('container')
<div class="table-responsive">
  <table class="table table-bordered" id="campaignTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul Campaign</th>
        {{-- <th>Lokasi Campaign</th>
        <th>Tujuan Campaign</th>
        <th>Target Donasi</th>
        <th>Rincian Dana Campaign</th> --}}
        {{-- <th>Deskripsi Campaign</th> --}}
        <th>Foto Campaign</th>
        {{-- <th>Praturan Campaign</th> --}}
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
        {{-- <td>{{ $item->lokasi_campaign }}</td>
        <td>{{ $item->tujuan_campaign }}</td>
        <td>{{ $item->targetdonasi_campaign }}</td>
        <td>{{ $item->rinciandana_campaign }}</td>
        <td>{{ $item->deskripsi_campaign }}</td> --}}
        <td>
            <img src="{{ asset($item->foto_campaign) }}" alt="Campaign Image" width="100">
          </td>        {{-- <td>{{ $item->praturan_campaign }}</td> --}}
        @php
          $is_active_color = '';
          if ($item->is_active === 1) {
              $is_active_color = 'is-active-1';
          } elseif ($item->is_active === 2) {
              $is_active_color = 'is-active-2';
          } elseif ($item->is_active === 3) {
              $is_active_color = 'is-active-3';
          } else {
              $is_active_color = 'is-active-null';
              $item->is_active = 'Belum Dikonfirmasi';
          }
        @endphp
        <td class="{{ $is_active_color }}">{{ $item->is_active }}</td>
        <td>{{ $item->tanggal_mulai }}</td>
        <td>
          <a href="#" class="btn btn-sm btn-info">Detail</a>
          <a href="#" class="btn btn-sm btn-warning">Edit</a>
          <a href="#" class="btn btn-sm btn-danger">Hapus</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<!-- Bootstrap Modal for Detail Campaign -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Campaign</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Put your campaign detail information here -->
        <p>Placeholder for campaign details...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Modal for Edit Campaign -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Campaign</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Put your campaign edit form here -->
        <p>Placeholder for campaign edit form...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Modal for Delete Campaign -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Hapus Campaign</h5>
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

<!-- Add DataTables script -->
<script>
  $(document).ready(function() {
    $('#campaignTable').DataTable();
  });
</script>

@endsection
