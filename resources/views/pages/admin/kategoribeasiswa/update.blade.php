@extends('adminlayout.mother')
@section('container')
    @if (session('success'))
        <div class="alert alert-success" style="background-color: green">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
   <main>
    <form action="{{ route('kategoribeasiswas.put', $result->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3">
          <label for="jenis_kategoribeasiswa" class="form-label">Jenis Kategori Beasiswa</label>
          <input type="text" value="{{ $result->jenis_kategoribeasiswa }}" class="form-control" name="jenis_kategoribeasiswa" id="jenis_kategoribeasiswa">
      </div>
      <div class="mb-3">
          <label for="judul_kategoribeasiswa" class="form-label">Judul Kategori Beasiswa</label>
          <input type="text" value="{{ $result->judul_kategoribeasiswa }}" class="form-control" name="judul_kategoribeasiswa" id="judul_kategoribeasiswa">
      </div>
      <div class="mb-3">
          <label for="banner_beasiswa" class="form-label">Gambar Banner *JPG/2MB</label>
          <input type="file" class="form-control" name="banner_beasiswa" id="banner_beasiswa">
      </div>
      <div class="mb-3">
          <label for="deskripsi_beasiswa" class="form-label">Deskripsi Beasiswa</label>
          <input type="text" value="{{ $result->deskripsi_beasiswa }}"  class="form-control" name="deskripsi_beasiswa" id="deskripsi_beasiswa">
      </div>
      <div class="mb-3">
          <label for="syarat_beasiswa" class="form-label">Syarat Beasiswa *gunakan tanda koma persyarat</label>
          <textarea class="form-control"  value="{{ $result->syarat_beasiswa }}" name="syarat_beasiswa" id="syarat_beasiswa" rows="4"></textarea>
      </div>
      <div class="mb-3">
          <label for="tanggal_pendaftaranawal" class="form-label">Tanggal Pendaftaran</label>
          <input type="date" class="form-control" value="{{ $result->tanggal_pendaftaranawal }}" name="tanggal_pendaftaranawal" id="tanggal_pendaftaranawal">
      </div>
      <div class="mb-3">
          <label for="tanggal_pendaftaranakhir" class="form-label">Batas Pendaftaran</label>
          <input type="date" class="form-control" value="{{ $result->tanggal_pendaftaranakhir }}" name="tanggal_pendaftaranakhir" id="tanggal_pendaftaranakhir">
      </div>
      <div class="mb-3">
          <label for="tanggal_wawancara" class="form-label">Tanggal Wawancara</label>
          <input type="date" class="form-control" value="{{ $result->tanggal_wawancara }}" name="tanggal_wawancara" id="tanggal_wawancara">
      </div>
      <div class="mb-3">
          <label for="tanggal_pengumuman" class="form-label">Tanggal Pengumuman</label>
          <input type="date" class="form-control" value="{{ $result->tanggal_pengumuman }}" name="tanggal_pengumuman" id="tanggal_pengumuman">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>  
   </main>
@endsection
