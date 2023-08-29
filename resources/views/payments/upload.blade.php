<div class="container">
    <h2>Unggah Bukti Transaksi</h2>
    <form action="{{ route('payments.updateBuktiTransaksi', $payment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="buktitransaksi">Unggah Bukti Transaksi:</label>
            <input type="file" name="buktitransaksi" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-primary">Unggah</button>
    </form>
</div>