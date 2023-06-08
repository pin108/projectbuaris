@extends('layout.layout')

@section('utama')
<main class="main position-relative">
    <div class="container-xxl">
        <h1 class="mt-4">Admin Donasi</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Jumlah Donasi</h2>
                <p>Jumlah donasi yang terkumpul saat ini: $100,000</p>
            </div>
            <div class="col-md-6">
                <h2>Nama Yayasan</h2>
                <p>Yayasan Penggalang Dana</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Daftar Donatur</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Donatur</th>
                            <th scope="col">Jumlah Donasi</th>
                            <th scope="col">Metode Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>John Doe</td>
                            <td>$500</td>
                            <td>Transfer Antar Bank (BRI)</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jane Smith</td>
                            <td>$200</td>
                            <td>QRIS</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Michael Johnson</td>
                            <td>$1000</td>
                            <td>Transfer Antar Bank (BRI)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
