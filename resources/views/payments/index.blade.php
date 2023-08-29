@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="container">
    <h2>Riwayat Pembayaran</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Invoice</th>
                <th>Jumlah Pembayaran</th>
                <th>Tanggal Pembayaran</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
            <thead>
                <tr>
                    <th>Kode Invoice</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->invoice_code }}</td>
                    <td>{{ 'Rp ' . number_format($payment->total, 2, ',', '.') }}</td>
                    <td>{{ $payment->created_at }}</td>
                    <td>
                        @if ($payment->status == 0)
                            Belum Dikirim
                        @else
                            Sudah Dikirim
                        @endif
                    </td>
                    <td>
                        @if ($payment->status == 0)
                            <a href="{{ route('payments.upload', $payment->id) }}" class="btn btn-primary">Unggah Bukti</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>