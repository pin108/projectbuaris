<!DOCTYPE html>
<html>
<head>
    <title>Yayasan Alfo Indonesia</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>

    @if ($details['status'] === 1)
        <p>Selamat, {{ $details['nama'] }}!</p>
        <p>Anda telah diterima sebagai penerima beasiswa.</p>
    @elseif ($details['status'] === 0)
        <p>Halo, {{ $details['nama'] }}!</p>
        <p>Status pendaftaran Anda sedang dalam proses review.</p>
    @elseif ($details['status'] === 2)
        <p>Mohon maaf, {{ $details['nama'] }}.</p>
        <p>Status pendaftaran Anda tidak diterima sebagai penerima beasiswa.</p>
    @else
        <p>Halo, {{ $details['nama'] }}!</p>
        <p>Status pendaftaran Anda belum dikonfirmasi.</p>
    @endif
</body>
</html>
