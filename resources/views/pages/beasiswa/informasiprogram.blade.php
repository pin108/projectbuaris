@extends('layout.layout')
@section('utama')
<main>
    <div class="container">
        <img src="./images/bannerregister.png" class="d-block w-100" alt="Sunset Over the City" style="width: 400 px; height:600px" />
    </div>
</main>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <p><b>Batas Pendaftaran</b></p>
                </div>
                <div class="col-md-6">
                    <p>01 Juli - 31 Agustus 2023</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><b>Wawancara</b></p>
                </div>
                <div class="col-md-8">
                    <p>12 September - 25 September 2023</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><b>Pengumuman hasil seleksi</b></p>
                </div>
                <div class="col-md-6">
                    <p>2 Oktober 2023</p>
                </div>
            </div>
            <div>
                <a class="btn btn-danger" style="width: 100%; background-color:red; color:white" href="{{url('registerbeasiswa')}}">Daftar</a>
            </div>
        </div>
        <div class="col-md-8">
            <div>
                <h1>Program Beasiswa Djarum</h1>
            </div>
            <div>
                <img src="./images/bannerregister.png" class="d-block w-100" alt="Sunset Over the City" style="width: 400 px; height:400px" />
            </div>
            <div>
                <p style="text-align: justify;">Sejak 1984, Djarum Foundation terus konsisten dalam memberikan kontribusi terhadap dunia pendidikan di Indonesia. Langkah ini diawali kesadaran bahwa pendidikan merupakan salah satu upaya untuk meningkatkan kesejahteraan masyarakat dan bangsa dalam mewujudkan masa depan yang lebih baik.Djarum Foundation turut berperan aktif dalam memajukan pendidikan di Indonesia melalui program beasiswa prestasi (merit based scholarship) yang dikenal sebagai Djarum Beasiswa Plus bagi mahasiswa berprestasi tinggi di Indonesia.Yang membedakan Djarum Beasiswa Plus dengan program beasiswa lain adalah, selain mendapatkan dana beasiswa selama satu tahun, Beswan Djarum (sebutan bagi penerima program Djarum Beasiswa Plus) juga mendapatkan berbagai macam pelatihan ketrampilan lunak atau soft skills guna mempersiapkan mereka menjadi calon pemimpin masa depan bangsa. Pelatihan ini meliputi Nation Building, Character Building, Leadership Development, Competition Challenges, serta International Exposure. Tidak hanya berhenti sampai di sini, melalui program Community Empowerment, Beswan Djarum juga diberikan kesempatan untuk menerapkan berbagai ketrampilan lunak yang telah diperoleh dengan melibatkan diri secara langsung dalam memberikan jalan keluar pada suatu permasalahan sosial di lingkungan tempat mereka berada.Melalui pembudayaan dan pemberdayaan para penerima program Djarum Beasiswa Plus ini, rangkaian pelatihan tersebut dimaksudkan guna menyerasikan antara pencapaian akademik (hard skills) yang diperoleh di perguruan tinggi dengan berbagai ketrampilan lunak (soft skills) yang diperoleh dari program ini. Tujuannya agar Beswan Djarum di kemudian hari menjadi pemimpin masa depan bangsa yang cakap secara intelegensia maupun emosional.Lebih dari 12.880 mahasiswa berprestasi telah menjadi penerima program. Mereka berasal dari berbagai macam latar belakang pendidikan di lebih dari 123 perguruan tinggi unggulan di seluruh 34 provinsi di Indonesia. Sebuah bukti keseriusan Djarum Foundation dalam komitmennya membangun bangsa melalui pendidikan.</p>
            </div>
        </div>
    </div>
</div>
@stop