@extends('layout.layout')
@section('content')
<div class="container">
    <h1 style="text-align: center; margin-top:3%">galang dana lainnya</h1>
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
                            <img src="./images/program kami.jpeg" alt="Modal Image">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/program kami.jpeg" alt="Modal Image" style="margin-left: 15%;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;">galang dana</button>
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
                    <p>Bantu dukung karya kreatif kami dengan berdonasi! Setiap sumbanganmu memberi energi baru untuk menciptakan lebih banyak karya inspiratif.</p>
                    <p><b>Berikut merupakan contoh penggalangan karya kreatif</b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./images/program kami.jpeg" alt="Modal Image">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/program kami.jpeg" alt="Modal Image" style="margin-left: 15%;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;">galang dana</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="modal fade" id="pantiasuhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="./images/program kami.jpeg" alt="Modal Image">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/program kami.jpeg" alt="Modal Image" style="margin-left: 15%;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;">galang dana</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="modal fade" id="rumahibadah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="./images/program kami.jpeg" alt="Modal Image">
                        </div>
                        <div class="col-md-6">
                            <img src=" ./images/program kami.jpeg" alt="Modal Image" style="margin-left: 15%;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: blue; color:white;">galang dana</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop