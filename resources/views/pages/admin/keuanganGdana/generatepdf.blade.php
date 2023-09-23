<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pencairan Galang Dana</title>
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
        <h1>Surat Keterangan Pencairan Galang Dana</h1>
        <div>
            <div class="header" style="text-align: left">
                <h2>Data Penggalang:</h2>
            </div>
            <ul>
                <li><strong>ID Galang Dana:</strong> {{ $result->id_galangdana }}</li>
                <li><strong>ID Penggalang:</strong> {{ $result->user_id }}</li>
                <li><strong>Nama Penggalang dana:</strong> {{ $result->nama_penggalangdana }}</li>
                <li><strong>Judul Penggalang dana:</strong> {{ $result->judul_galangdana }}</li>
                <li><strong>Total Pencairan:</strong> {{ $result->jumlah}}</li>
                <li><strong>Tanggal Pencairan:</strong> {{ $result->created_at}}</li>
            </ul>
            <!-- Tambahkan data lain yang Anda inginkan -->
        </div>
    </div>
</body>
</html>
