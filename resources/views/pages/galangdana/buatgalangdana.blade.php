@extends('layout.layout')
@section('content')
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <form id="regForm">
                <h1 id="register">Persyaratan Galang Dana</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                <div class="tab">
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <label class="container">
                                <div class="row">
                                    <div class="col">
                                        <label class="container">
                                            <p><b>Acara/gerakan/kegiatan/program</b></p>
                                            <p style="font-size: 16px;">contoh Kegiatan pemberdayaan masyarakat, acara pementasan budaya, dsb.</p>
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="collapse" id="syarat1">
                                            <p>Tujuan galang dana sudah benar?</p>
                                            <p>Galang dana acara/gerakan/kegiatan/program memerlukan informasi berikut:</p>
                                            <p><b>Profil penyelenggara</b></p>
                                            <p><b>Nama acara/gerakan/kegiatan/program</b></p>
                                            <p><b>Latar belakang</b></p>
                                            <p><b>Teknis penyelenggaraan</b></p>
                                        </div>
                                        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#syarat1" aria-expanded="false" aria-controls="collapseExample">
                                            <p style="color: blue;">Baca Syarat</p>
                                        </button>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3" style="margin-top: 3%;">
                        <div class="p-2 bd-highlight">
                            <label class="container">
                                <div class="row">
                                    <div class="col">
                                        <label class="container"><b>Acara/gerakan/kegiatan/program</b>
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="collapse" id="syarat2">
                                            Tujuan galang dana sudah benar?
                                            Galang dana acara/gerakan/kegiatan/program memerlukan informasi berikut:
                                            Profil penyelenggara
                                            Nama acara/gerakan/kegiatan/program
                                            Latar belakang
                                            Teknis penyelenggaraan
                                        </p>
                                        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#syarat2" aria-expanded="false" aria-controls="collapseExample">
                                            <p style="color: blue;">Baca Syarat</p>
                                        </button>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <p><input placeholder="First Name" oninput="this.className = ''" name="first"></p>
                    <p><input placeholder="Last Name" oninput="this.className = ''" name="last"></p>
                    <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
                    <p><input placeholder="Phone" oninput="this.className = ''" name="phone"></p>
                    <p><input placeholder="Street Address" oninput="this.className = ''" name="address"></p>
                    <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
                    <p><input placeholder="State" oninput="this.className = ''" name="state"></p>
                    <p><input placeholder="Country" oninput="this.className = ''" name="country"></p>

                </div>
                <div class="tab">
                    <p><input placeholder="Credit Card #" oninput="this.className = ''" name="email"></p>
                    <p>Exp Month
                        <select id="month">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </p>
                    <p>Exp Year
                        <select id="year">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </p>

                    <p><input placeholder="CVV" oninput="this.className = ''" name="phone"></p>
                </div>

                <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                    <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you shortly!</span>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right; margin-top:5%"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/formgalangdana.js"></script>
@stop