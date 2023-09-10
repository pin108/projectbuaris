@extends('layout.layout')
@section('content')
<div class="container">
    <h1 style="text-align: center; margin-top:3%">Jenis Galang Dana</h1>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                    <!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Karya kreatif & modal usaha</h5>
                                <div class="d-flex align-items-center justify-content-between mt-1"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="./images/idea.png" width="50">
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- <a href="#" class="btn btn-primary" >Buat galang dana</a> -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalkaryakreatif">
                                                Buat galang dana
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                    </li> <!-- End -->
                    <!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Kegiatan Sosial</h5>
                                <div class="d-flex align-items-center justify-content-between mt-1"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="./images/love.png" width="50">
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kegiatansosial">Buat galang dana</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                    </li> <!-- End -->
                    <!-- list group item -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Difabel</h5>
                                <div class="d-flex align-items-center justify-content-between mt-1"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="./images/care.png" width="50">
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#difabel">Buat galang dana</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                    </li> <!-- End -->
                    <!-- list group item -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Panti Asuhan</h5>
                                <div class="d-flex align-items-center justify-content-between mt-1"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="./images/maternity.png" width="50">
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pantiasuhan">Buat galang dana</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                    </li> <!-- End -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Rumah Ibadah</h5>
                                <div class="d-flex align-items-center justify-content-between mt-1"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="./images/religious.png" width="50">
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rumahibadah">Buat galang dana</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                    </li> <!-- End -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Bantuan Orang Sakit</h5>
                                <div class="d-flex align-items-center justify-content-between mt-1"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="./images/orangsakit.png" width="50">
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orangsakit">Buat galang dana</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                    </li> <!-- End -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Bencana Alam</h5>
                                <div class="d-flex align-items-center justify-content-between mt-1"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="./images/bencana.png" width="50">
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bencanaalam">Buat galang dana</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                    </li> <!-- End -->
                </ul> <!-- End -->
            </div>
        </div>
    </div>

    <!-- modal -->
    <!-- 1 -->
    <div class="modal fade" id="modalkaryakreatif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Bantu dukung karya kreatif kami dengan berdonasi! Setiap sumbanganmu memberi energi baru untuk menciptakan lebih banyak karya inspiratif.</p>
                    <p><b>Berikut merupakan contoh penggalangan karya kreatif</b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./images/program kami.jpeg" alt="Modal Image" style="width: 300px; height:200px;">
                            <p style="font-size: 10px;">Bantuan karya kreatif desa kulonprogo</p>
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/program kami.jpeg" alt="Modal Image" style="margin-left: 30%; width: 300px; height:200px;">
                            <p style="margin-left: 15%;font-size:10px;">Bantuan karya kreatif desa ngampel</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('index-registerkaryakreatif') }}`;">galang dana kategori ini</button>
                    <button type="button" class="btn btn-secondary" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('galangdanalainnya') }}`;">kategori lain</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="modal fade" id="kegiatansosial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><b>Kegiatan Sosial</b></p>
                    <p>Galang dana bantuan kegiatan sosial kepada orang yang membutuhkan (cth. bantuan sosial untuk lansia, kegiatan sosial komunitas).</p>
                    <p><b>Contoh penggalangan kegiatan sosial</b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./images/program kami.jpeg" alt="Modal Image" style="width: 300px; height:200px;">
                            <p style="font-size: 10px;">Bantuan kegiatan sosial desa kulonprogo</p>
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/program kami.jpeg" alt="Modal Image" style="margin-left: 30%; width: 300px; height:200px;">
                            <p style="margin-left: 15%;font-size:10px;">Bantuan kegiatan sosial desa ngampel</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('index-registerkegiatansosial') }}`;">galang dana kategori ini</button>
                    <button type="button" class="btn btn-secondary" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('galangdanalainnya') }}`;">kategori lain</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="modal fade" id="difabel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><b>Difabel</b></p>
                    <P>Galang dana untuk penyediaan alat bantu bagi difabel (cth. penyediaan kursi roda, sepatu terapi, dan alat bantu dengar).</P>
                    <p><b>Contoh penggalangan difabel</b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./images/DIFABEL.jpg" alt="Modal Image" style="width: 300px; height:200px;">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/DIFABEL.jpg" alt="Modal Image" style="margin-left: 30%; width: 300px; height:200px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('index-registerdifabel') }}`;">galang dana kategori ini</button>
                    <button type="button" class="btn btn-secondary" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('galangdanalainnya') }}`;">kategori lain</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="modal fade" id="pantiasuhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><b>Panti asuhan</b></p>
                    <p>Galang dana bantuan untuk lembaga panti asuhan, seperti pengadaan logistik dan pembangunan rumah panti asuhan.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./images/pantiasuhan.jpg" alt="Modal Image" style="width: 300px; height:200px;">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/pantiasuhan.jpg" alt="Modal Image" style="margin-left: 30%; width: 300px; height:200px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('index-registerkegiatanpantiasuhan') }}`;">galang dana kategori ini</button>
                    <button type="button" class="btn btn-secondary" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('galangdanalainnya') }}`;">kategori lain</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="modal fade" id="rumahibadah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><b>Rumah ibadah</b></p>
                    <p>Galang dana yang berkaitan dengan pembangunan area publik untuk aktivitas keagamaan atau tempat ibadah.</p>
                    <p><b>Contoh penggalangan rumah ibadah</b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./images/rumahibadah.jpg" alt="Modal Image" style="width: 300px; height:200px;">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/rumahibadah.jpg" alt="Modal Image" style="margin-left: 30%; width: 300px; height:200px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('index-registerkegiatanrumahibadah') }}`;">galang dana kategori ini</button>
                    <button type="button" class="btn btn-secondary" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('galangdanalainnya') }}`;">kategori lain</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 6 -->
    <div class="modal fade" id="orangsakit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><b>bantuan orang sakit</b></p>
                    <p>Setiap sumbangan kecil pun memiliki kekuatan besar ketika digabungkan. Jadilah bagian dari upaya kita untuk mendukung dengan menyumbangkan dana untuk pengobatan dan perawatan mereka</p>
                    <p><b>Contoh penggalangan dana orang sakit</b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./images/orangsakitgalangdana.jpg" alt="Modal Image" style="width: 300px; height:200px;">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/orangsakitgalangdana.jpg" alt="Modal Image" style="margin-left: 30%; width: 300px; height:200px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('index-registerbantuanorangsakit') }}`;">galang dana kategori ini</button>
                    <button type="button" class="btn btn-secondary" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('galangdanalainnya') }}`;">kategori lain</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 7 -->
    <div class="modal fade" id="bencanaalam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><b>Bencana alam</b></p>
                    <p>Galang dana untuk penanganan bencana alam di Indonesia.</p>
                    <p><b>Contoh penggalangan bencana alam</b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./images/bencanaalamgalangdana.jpg" alt="Modal Image" style="width: 300px; height:200px;">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/bencanaalamgalangdana.jpg" alt="Modal Image" style="margin-left: 30%; width: 300px; height:200px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('index-registerbantuanbencanaalam') }}`;">galang dana kategori ini</button>
                    <button type="button" class="btn btn-secondary" style="background-color: blue; color:white;" onclick="window.location.href=`{{ route('galangdanalainnya') }}`;">kategori lain</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop