@extends('layout.layout')

@section('utama')
<main class="main position-relative">
    <div class="container-xxl">
        <h1 class="mt-4">Admin Monitoring Yayasan</h1>

        <div class="row">
            <div class="col-md-12">
                <h2>Data Yayasan</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Yayasan</th>
                            <th scope="col">Jumlah Donasi Terkumpul</th>
                            <th scope="col">Jumlah Pengguna yang Berdonasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Yayasan A</td>
                            <td>$10,000</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Yayasan B</td>
                            <td>$15,000</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Yayasan C</td>
                            <td>$5,000</td>
                            <td>50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
