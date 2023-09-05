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
    <form action="{{ route('kategorigalangdana.update', $result->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="jenis_kategori"class="form-label">Jenis Kategori Galang Dana</label>
        <input type="text"  class="form-control" value="{{ $result->jenis_kategori }}" name="jenis_kategori" id="jenis_kategori" disabled>
      </div>
      <div class="mb-3">
          <label for="judul_kategoribeasiswa" class="form-label">Nama Kategori</label>
          <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="{{ $result->nama_kategori }}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>  
   </main>
@endsection
