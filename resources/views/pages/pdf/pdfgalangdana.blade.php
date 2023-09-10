<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pemohon Galang Dana</title>
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
        <h1>Surat Pemohon Galang Dana</h1>
        <div class="photo">
            <img src="{{ public_path('storage/' . $result->user->fotodiri) }}" alt="Foto Peserta" style="width: 100px; height: 100px">
        </div>
        <div>
            <div class="header" style="text-align: left">
                <h2>Data Peserta:</h2>
            </div>
            <ul>
                <li><strong>Nama Peserta:</strong> {{ $result->user->name }}</li>
                <li><strong>NIK:</strong> {{ $result->user->NIK }}</li>
                <li><strong>Email:</strong> {{ $result->user->email }}</li>
                <li><strong>Nomor HP:</strong> {{ $result->user->nomor_hp }}</li>
                <li><strong>Alamat:</strong> {{ $result->user->alamat_rumah }}</li>
                <li><strong>Data Galang Dana:</strong></li>
                <ul>
                    <li>Judul galang dana: {{ $result->judul_campaign }}</li>
                    <li>lokasi tujuan: {{ $result->lokasi_campaign }}</li>
                    <li>tujuan galang dana: {{ $result->tujuan_campaign }}</li>
                    <li>target galang dana: {{ $result->targetdonasi_campaign }}</li>
                    <li>rincian galang dana: {{ $result->rinciandana_campaign }}</li>
                    <li>deskripsi galang dana: {{ $result->deskripsi_campaign }}</li>
                    <li>syarat dan ketentuan galang dana: {{ $result->praturan_campaign }}</li>
                </ul>
                <li><strong>rencana tanggal mulai:</strong> {{ $result->tanggal_mulai }}</li>
                <li><strong>rencana tanggal akhir:</strong> {{ $result->tanggal_akhir }}</li>
            </ul>
            <!-- Tambahkan data lain yang Anda inginkan -->
        </div>
    </div>
</body>
</html>
