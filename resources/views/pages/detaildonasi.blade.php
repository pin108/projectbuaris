@extends('layout.layout')

@section('utama')
<main class="main position-relative">
    <div class="container-xxl">
        <h1 class="mt-4">Yayasan Penggalang Dana</h1>

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
                <form action="/submit-doa" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="prayer" class="form-label">Doa</label>
                        <textarea class="form-control" id="prayer" name="prayer" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Doa</button>
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
                    <input type="text" class="form-control" id="bank_account" name="bank_account" value="132123123" readonly>
                </div>
                <div class="mt-3">
                    <label for="bank_account_name" class="form-label">Nama Pemilik Rekening:</label>
                    <input type="text" class="form-control" id="bank_account_name" name="bank_account_name" value="Alvin Steven" readonly>
                </div>

                <div class="mt-4">
                    <h2>Kirim Donasi</h2>
                    <form action="/submit-donation" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="amount" class="form-label">Jumlah Donasi</label>
                            <input type="number" class="form-control" id="amount" name="amount" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Donasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
