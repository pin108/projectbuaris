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

<!-- Tabel yang sudah ada di dalam template -->
<div class="table-responsive">
    <table class="table table-bordered" id="campaignTable">
        <thead>
            <tr>
            <th>Foto Peserta</th>
            <th>Nama peserta</th>
            <th>Nama beasiswa</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result as $items)
            <tr>
                <td>
                    <img src="{{ asset('storage/' . $items->foto_peserta) }}" alt="Foto Peserta" style="width: 80px; height: 80px; text-alignment:center">
                </td>
                <td>{{ $items->nama_depan }} {{ $items->nama_belakang }}</td>
                <td>{{ $items->kategoribeasiswa->judul_kategoribeasiswa}}</td>
                <td>
                    <form action="{{ route('lulusbeasiswa.generatepdf') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type='hidden' name='id' value='{{ $items->id }}'>
                        <button class="badge bg-primary border-0" onclick="return confirm('unduh data?')">Unduh</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection