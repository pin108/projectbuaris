
    <main>
        <div class="container">
            <h2>Membuat Pembayaran untuk Galang Dana</h2>
            <form action="{{ route('payments.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
        
                <input type="hidden" name="id_galangdana" value="{{ $galangDana->id }}">
                
                <div class="form-group">
                    <label for="total">Jumlah Pembayaran (Rp):</label>
                    <input type="text" name="total" class="form-control" required pattern="^\d+(\.\d{1,2})?$">
                    <small class="form-text text-muted">Contoh: 10000 atau 10000.50</small>
                </div>
        
                {{-- <div class="form-group">
                    <label for="buktitransaksi">Bukti Transaksi:</label>
                    <input type="file" name="buktitransaksi" class="form-control-file" required>
                </div> --}}
        
                <button type="submit" class="btn btn-primary">Simpan Pembayaran</button>
            </form>
        </div>
    </main>
