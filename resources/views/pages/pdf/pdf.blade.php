<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Peserta Lolos Beasiswa</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda */
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        /* Tambahkan gaya CSS lainnya di sini */
        .container {
            margin: 20px;
        }
        .header {
            text-align: center;
        }
        .photo {
            text-align: left;
            margin-top: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Surat Keterangan Lolos Beasiswa</h1>
        <h1>{{ $result->kategoribeasiswa->judul_kategoribeasiswa }}</h1>
        <div class="photo">
            <img src="{{ public_path('storage/' . $result->foto_peserta) }}" alt="Foto Peserta" style="width: 100px; height: 100px">
        </div>
        <div>
            <div class="header" style="text-align: left">
                <h2>Data Peserta:</h2>
            </div>
            <ul>
                <li><strong>Nama Peserta:</strong> {{ $result->nama_depan }} {{ $result->nama_belakang }}</li>
                <li><strong>Email:</strong> {{ $result->email }}</li>
                <li><strong>Nomor HP:</strong> {{ $result->nomor_hp }}</li>
                <li><strong>Alamat:</strong></li>
                <ul>
                    <li>Kelurahan: {{ $result->kelurahan }}</li>
                    <li>Kecamatan: {{ $result->kecamatan }}</li>
                    <li>Kabupaten: {{ $result->kabupaten }}</li>
                    <li>RT/RW: {{ $result->RT }}/{{ $result->RW }}</li>
                    <li>Provinsi: {{ $result->provinsi }}</li>
                </ul>
                <li><strong>Nomor Identitas:</strong> {{ $result->nomor_identitas }}</li>
                <li><strong>Rata-rata Nilai:</strong> {{ $result->ratarata_nilai }}</li>
                <li><strong>Semester:</strong> {{ $result->semester }}</li>
            </ul>
            <!-- Tambahkan data lain yang Anda inginkan -->
        </div>
    </div>
</body>
</html>
