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
    <a href="{{ route('kategoribeasiswa.create') }}" class="btn btn-primary" >tambah data</a>
</div>
<!-- Tabel yang sudah ada di dalam template -->
<div class="table-responsive">
    <table class="table table-bordered" id="campaignTable">
        <thead>
            <tr>
            <th>Jenis Kategori Beasiswa</th>
            <th>Judul Kategori Beasiswa</th>
            <th>Tanggal Pendaftaran</th>
            <th>Batas Pendaftaran</th>
            <th>Tanggal Wawancara</th>
            <th>Tanggal Pengumuman</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modelskategoribeasiswas as $items)
            <tr>
                <td>{{ $items->jenis_kategoribeasiswa }}</td>
                <td>{{ $items->judul_kategoribeasiswa}}</td>
                <td>{{ $items->tanggal_pendaftaranawal}}</td>
                <td>{{ $items->tanggal_pendaftaranakhir }}</td>
                <td>{{ $items->tanggal_wawancara}}</td>
                <td>{{ $items->tanggal_pengumuman}}</td>
                <td>
                    <a href="/adminis/edit/datakategori/{{ $items->id }}" class="badge bg-warning border-0">Edit</a>
                    <form action="{{ route('kategoribeasiswa.destroy', $items->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Anda Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
