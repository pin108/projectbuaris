@extends('layout.layout')

@section('utama')
<main>
    @if (session('success'))
    <div class="alert alert-success" style="background-color: green">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" style="background-color: red">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <h4 style="text-align: center; margin-top:9%">Donasi</h4>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Tempat Donasi</h2>
                    <p>Anda dapat melakukan donasi melalui:</p>
                    <ul>
                        <li>Transfer antar bank ke rekening BRI: 132123123 a/n Alvin Steven</li>
                        <li>QRIS (Quick Response Code Indonesia Standard)</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h2>Form Doa</h2>
                    <form action="{{ route('kirimdoa', ['id_galangdana' => $sendDonasi->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="id_galangdana" name="id_galangdana"  value="{{ $sendDonasi->id }}">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="prayer" class="form-label">Doa</label>
                            <textarea class="form-control" id="doa" name="doa"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 5%">Kirim Doa</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <h2>Pembayaran</h2>
                    <p>Silakan pilih metode pembayaran:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="transfer_bank" value="transfer_bank" checked>
                        <label class="form-check-label" for="transfer_bank">
                            Transfer Antar Bank (BRI)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="qris" value="qris">
                        <label class="form-check-label" for="qris">
                            QRIS (Quick Response Code Indonesia Standard)
                        </label>
                    </div>
                    <div class="mt-3">
                        <label for="bank_account" class="form-label">Nomor Rekening Bank BRI:</label>
                        <input type="text" class="form-control" id="bank_account" name="bank_account" value="BRI - 12321-2313-2313-23132" readonly>
                    </div>
                    <div class="mt-3">
                        <label for="bank_account_name" class="form-label">Nama Pemilik Rekening:</label>
                        <input type="text" class="form-control" id="bank_account_name" name="bank_account_name" value="Yayasan Alfo Indonesia" readonly>
                    </div>
                    <div class="mt-4">
                        <h2>Kirim Donasi</h2>
                        <form action="{{ route('payments') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="id_galangdana" value="{{ $sendDonasi->id }}">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Jumlah Donasi</label>
                                <input type="text" class="form-control" id="jumlah_donasi" name="jumlah_donasi" oninput="formatNumber(this)" required>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Bukti Transfer *JPG</label>
                                <input type="file" class="form-control" id="bukti_transaksi" name="bukti_transaksi" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 5%">Kirim Donasi</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function formatNumber(input) {
        // Get the current input value
        let value = input.value;

        // Remove all non-numeric characters
        value = value.replace(/\D/g, '');

        // Format the number with a period as the thousands separator
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Update the input value with the formatted number
        input.value = value;
    }
</script>
@endsection