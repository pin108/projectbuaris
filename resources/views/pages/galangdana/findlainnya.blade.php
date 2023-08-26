@extends('layout.layout')
@section('content')
<div class="container">
    <h1 style="text-align: center; margin-top:3%">cari Galang Dana</h1>
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
                                            <a href="{{route('carigalangdana-karyakreatif')}}" class="btn btn-primary">Cari</a>
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
                                            <a href="{{route('carigalangdana-kegiatansosial')}}" class="btn btn-primary">Cari</a>
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
                                            <a href="{{route('carigalangdana-difabel')}}" class="btn btn-primary">Cari</a>
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
                                            <a href="{{route('carigalangdana-pantiasuhan')}}" class="btn btn-primary">Cari</a>
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
                                            <a href="{{route('carigalangdana-rumahibadah')}}" class="btn btn-primary">Cari</a>
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
                                            <a href="{{route('carigalangdana-orangsakit')}}" class="btn btn-primary">Cari</a>
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
                                            <a href="{{route('carigalangdana-bencanaalam')}}" class="btn btn-primary">Cari</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                    </li> <!-- End -->
                </ul> <!-- End -->
            </div>
        </div>
    </div>
</div>
</div>
@stop