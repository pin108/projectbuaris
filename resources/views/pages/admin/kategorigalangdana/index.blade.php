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
    <a href="{{ route('kategorigalangdana.create') }}" class="btn btn-primary" >tambah data</a>
</div>
<!-- Tabel yang sudah ada di dalam template -->
<div class="table-responsive">
    <table class="table table-bordered" id="campaignTable">
        <thead>
            <tr>
            <th>Jenis Kategori Galangdana</th>
            <th>Nama Kategori Galangdana</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datagalangdana as $items)
            <tr>
                <td>{{ $items->jenis_kategori }}</td>
                <td>{{ $items->nama_kategori }}</td>
                <td>
                    <a href="{{ route('kategorigalangdana.edit',$items->id) }}" class="badge bg-warning border-0">Edit</a>
                    <form action="{{ route('kategorigalangdana.destroy',$items->id) }}" method="post" class="d-inline">
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
