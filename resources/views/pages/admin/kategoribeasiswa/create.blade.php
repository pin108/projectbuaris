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
   <main>
    <form action="{{ route('kategoribeasiswas.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
          <label for="jenis_kategoribeasiswa" class="form-label">Jenis Kategori Beasiswa</label>
          <input type="text" class="form-control" name="jenis_kategoribeasiswa" id="jenis_kategoribeasiswa">
      </div>
      <div class="mb-3">
          <label for="judul_kategoribeasiswa" class="form-label">Judul Kategori Beasiswa</label>
          <input type="text" class="form-control" name="judul_kategoribeasiswa" id="judul_kategoribeasiswa">
      </div>
      <div class="mb-3">
          <label for="banner_beasiswa" class="form-label">Gambar Banner *JPG/2MB</label>
          <input type="file" class="form-control" name="banner_beasiswa" id="banner_beasiswa">
      </div>
      <div class="mb-3">
          <label for="deskripsi_beasiswa" class="form-label">Deskripsi Beasiswa</label>
          <input type="text" class="form-control" name="deskripsi_beasiswa" id="deskripsi_beasiswa">
      </div>
      <div class="mb-3">
          <label for="syarat_beasiswa" class="form-label">Syarat Beasiswa *gunakan tanda koma persyarat</label>
          <textarea class="form-control" name="syarat_beasiswa" id="syarat_beasiswa" rows="4"></textarea>
      </div>
      <div class="mb-3">
          <label for="tanggal_pendaftaranawal" class="form-label">Tanggal Pendaftaran</label>
          <input type="date" class="form-control" name="tanggal_pendaftaranawal" id="tanggal_pendaftaranawal">
      </div>
      <div class="mb-3">
          <label for="tanggal_pendaftaranakhir" class="form-label">Batas Pendaftaran</label>
          <input type="date" class="form-control" name="tanggal_pendaftaranakhir" id="tanggal_pendaftaranakhir">
      </div>
      <div class="mb-3">
          <label for="tanggal_wawancara" class="form-label">Tanggal Wawancara</label>
          <input type="date" class="form-control" name="tanggal_wawancara" id="tanggal_wawancara">
      </div>
      <div class="mb-3">
          <label for="tanggal_pengumuman" class="form-label">Tanggal Pengumuman</label>
          <input type="date" class="form-control" name="tanggal_pengumuman" id="tanggal_pengumuman">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>  
   </main>
@endsection
