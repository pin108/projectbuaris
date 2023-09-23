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
                    <th>Id galang dana</th>
                    <th>Id user</th>
                    <th>Nama penggalang dana</th>
                    <th>Judul galang dana</th>
                    <th>Total galang dana</th>
                    <th>Tanggal pencairan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->id_galangdana }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->nama_penggalangdana }}</td>
                        <td>{{ $item->judul_galangdana}}</td>
                        <td>{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                        <td>{{ $item->created_at}}</td>
                        <td>
                            <form action="{{ route('rekapgalangdana.generatepdf') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type='hidden' name='id' value='{{ $item->id }}'>
                                <button class="badge bg-primary border-0" onclick="return confirm('unduh data?')">Unduh</button>
                            </form>
                            <form action="{{ route('destroypencairan.destroy', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <input type='hidden' name='id' value='{{ $item->id }}'>
                                <button class="badge bg-danger border-0" onclick="return confirm('Hapus data?')">Hapus</button>
                            </form>
                        </td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
