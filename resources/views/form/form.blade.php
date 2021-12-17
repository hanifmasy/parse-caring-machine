@extends('layout.app')
@section('styles')
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<style media="screen">
.msform_satu {
  display: block;
}
.msform_dua {
  display: none;
}

  * {
margin: 0;
padding: 0
}

html {
height: 100%
}

/* p {
color: grey
} */

#heading {
text-transform: uppercase;
color: #673AB7;
font-weight: normal
}

#msform {
text-align: center;
position: relative;
margin-top: 20px
}

#msform fieldset {
background: white;
border: 0 none;
border-radius: 0.5rem;
box-sizing: border-box;
width: 100%;
margin: 0;
padding-bottom: 20px;
position: relative
}

.form-card {
text-align: left
}

#msform fieldset:not(:first-of-type) {
display: none
}

#msform #inputIsian,
#msform textarea {
padding: 8px 15px 8px 15px;
border: 1px solid #ccc;
border-radius: 0px;
margin-bottom: 25px;
margin-top: 2px;
width: 100%;
box-sizing: border-box;
font-family: montserrat;
color: #2C3E50;
background-color: #ECEFF1;
font-size: 16px;
letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
box-shadow: none !important;
border: 1px solid #2986cc;
outline-width: 0
}

#msform .action-button {
width: 100px;
background: #2986cc;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 0px;
cursor: pointer;
padding: 10px 5px;
margin: 10px 0px 10px 5px;
float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
background-color: #3d85c6
}

#msform .action-button-previous {
width: 100px;
background: #999999;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 0px;
cursor: pointer;
padding: 10px 5px;
margin: 10px 5px 10px 0px;
float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
background-color: #000000
}

.card {
z-index: 0;
border: none;
position: relative
}

.fs-title {
font-size: 20px;
color: #000000;
margin-bottom: 15px;
font-weight: normal;
text-align: left
}

.steps {
font-size: 22px;
color: gray;
margin-bottom: 10px;
font-weight: normal;
text-align: left
}

.fieldlabels {
color: gray;
text-align: left
}

#progressbar {
margin-right: 1%;
margin-left: 1%;
overflow: hidden;
color: lightgrey
}

#progressbar .active {
color: #2986cc
}

#progressbar li {
list-style-type: none;
font-size: 10px;
width: auto;
height: 5%;
float: left;
position: relative;
font-weight: 400
}

#progressbar #nomor_1:before {
font-family: FontAwesome;
content: "1"
}

#progressbar #nomor_2:before {
font-family: FontAwesome;
content: "2"
}

#progressbar #nomor_3:before {
font-family: FontAwesome;
content: "3"
}

#progressbar #nomor_4:before {
font-family: FontAwesome;
content: "4"
}

#progressbar #nomor_5:before {
font-family: FontAwesome;
content: "5"
}

#progressbar #nomor_6:before {
font-family: FontAwesome;
content: "6"
}

#progressbar #nomor_7:before {
font-family: FontAwesome;
content: "7"
}

#progressbar #nomor_8:before {
font-family: FontAwesome;
content: "8"
}

#progressbar li:before {
width: 50px;
height: 50px;
line-height: 45px;
display: block;
font-size: 20px;
color: #ffffff;
background: lightgray;
border-radius: 50%;
margin: 0 auto 10px auto;
padding: 2px
}

#progressbar li:after {
content: '';
width: 100%;
height: 2px;
background: lightgray;
position: absolute;
left: 0;
top: 25px;
z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
background: #2986cc
}

.progress {
height: 20px
}

.progress-bar {
background-color: #2986cc
}

.fit-image {
width: 100%;
object-fit: cover
}
</style>
@endsection
@section('content')
<div class="row sm-12 mx-auto">
  <div class="col-sm-5 mx-auto">
    <div class="card">
      <div class="card-header">
        <div class="row sm">
          <div class="col-3">
            <h5><small class="text-muted">Plasa : </small>
          </div>
          <div class="col-9">
            <!-- PLASA TELKOM -->
            @isset($result)
                <p class="bg-danger text-white">{{ $result->nama_plasa ?? '' }} </p>
            @endisset
          </h5>
          </div>
        </div>
        <div class="row sm">
          <div class="col-3">
            <h5><small class="text-muted">Antrian : </small>
          </div>
          <div class="col-9">
            <!-- NOMOR ANTRIAN -->
            </h5>
          </div>
        </div>
      </div>
      <h6 class="card-subtitle mb-2 text-muted text-center align-items-center" style="margin:5%">Isilah Form Di Bawah Ini.</h6>
      <div class="card-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                          <form id="msform" class="msform-satu">
                              <!-- progressbar -->
                              <div class="row sm-12 mx-auto">
                                <div class="col-sm-12 mx-auto align-items-center">
                                  <ul id="progressbar" class="text-center align-items-center">
                                      <li class="active" id="nomor_1"><strong></strong></li>
                                      <li id="nomor_2"><strong></strong></li>
                                      <li id="nomor_3"><strong></strong></li>
                                      <li id="nomor_4"><strong></strong></li>
                                      <li id="nomor_5"><strong></strong></li>
                                      <li id="nomor_6"><strong></strong></li>
                                      <li id="nomor_7"><strong></strong></li>
                                      <li id="nomor_8"><strong></strong></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                              </div> <br>
                              <!-- fieldsets -->
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h5 class="fs-title">Data Pemohon</h5>
                                          </div>
                                          <div class="col-sm-3">
                                              <h5 class="steps"></h5>
                                          </div>
                                      </div>
                                      <!-- INPUT NOMOR 1 -->
                                      <input id="inputIsian" name="nama_plggn" required type="text" class="form-control inputNamaPelanggan" placeholder="Nama Anda (sesuai KTP)" aria-label="nama_plggn">
                                  </div> <input type="button" name="next" class="next action-button" value="Lanjut" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title">Data Pemohon</h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                      </div>
                                      <!-- INPUT NOMOR 2 -->
                                      <input id="inputIsian" name="no_ktp" required type="text" class="form-control inputNoKTP" placeholder="Nomor KTP Anda" aria-label="no_ktp">
                                  </div> <input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title">Data Pemohon</h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                        </div>
                                      <!-- INPUT NOMOR 3 -->
                                      <input id="inputIsian" name="alamat" required type="text" class="form-control inputAlamat" placeholder="Alamat Anda" aria-label="alamat">
                                  </div> <input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title">Data Pemohon</h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                      </div>
                                      <!-- INPUT NOMOR 4 -->
                                      <input id="inputIsian" name="no_indihome" required type="text" class="form-control inputNoIndiHome" placeholder="Nomor IndiHome" aria-label="no_indihome">
                                  </div> <input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title">Data Pemohon</h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                      </div>
                                    <!-- INPUT NOMOR 5 -->
                                    <input id="inputIsian" name="tagihan_indihome" required type="text" class="form-control inputTagihan" placeholder="Tagihan IndiHome" aria-label="tagihan_indihome">
                                  </div> <input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title">Data Pemohon</h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                      </div>
                                    <!-- INPUT NOMOR 6 -->
                                    <p class="lead">Paket Speed IndiHome:</p>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="10M" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        10M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="20M" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        20M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="30M" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        30M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="40M" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        40M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="50M" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        50M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="100M" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        100M
                                      </label>
                                    </div>
                                  </div> <input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title">Data Pemohon</h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                      </div>
                                      <!-- INPUT NOMOR 7 -->
                                      <p class="lead">Hubungan pemohon dengan nomor IndiHome:</p>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Pemilik" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Pemilik
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Suami/Istri" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Suami/Istri
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Keluarga" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Keluarga
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Karyawan" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Karyawan
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Pengontrak" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Pengontrak
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Lainnya" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Lainnya
                                        </label>
                                        <input id="inputIsian" name="pemohon_lainnya_no7" required type="text" class="form-control" placeholder="Tuliskan alasannya" aria-label="pemohon_lainnya_no7">
                                      </div>
                                  </div> <input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title">Data Pemohon</h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                      </div>
                                      <!-- INPUT NOMOR 8 -->
                                      <p class="lead">Alasan mengajukan berhenti berlangganan :</p>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Efisiensi Harga Mahal" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Efisiensi Harga Mahal
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Efisiensi Tutup Usaha" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Efisiensi Tutup Usaha
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Layanan Sering Gangguan" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Layanan Sering Gangguan
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Perbaikan Gangguan Lama" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Perbaikan Gangguan Lama
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Pindah Provider Lain" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Pindah Provider Lain
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Sudah Punya IndiHome Baru" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Sudah Punya IndiHome Baru
                                        </label>
                                      </div>
                                  </div> <input id="inputIsianDataPemohon" type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title"></h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                      </div>
                                      <!-- INPUT NOMOR 8 -->
                                      <p class="lead">Isian Data Pemohon :</p>
                                      <div id="isianDataPemohon">

                                      </div>
                                  </div> <input id="btnLanjutProfile" style="width:60%" type="button" name="next" class="next action-button" value="Lanjut ke Data Profile" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                          </form>
                          <form id="msform" class="msform-dua" action="index.html" method="post">
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-10">
                                            <p class="fs-title">Data Profile</p>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps"></h2>
                                        </div>
                                    </div>
                                    <!-- INPUT PERTANYAAN DATA PROFILE A s.d. G -->
                                    <p class="lead">Penyebab Anda berhenti berlangganan:</p>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabA" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        A. Sering Gangguan
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabB" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        B. Terlalu Mahal
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabC" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        C. Pindah Alamat
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabD" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        D. Ganti Operator
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabE" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        E. Musibah
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabF" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        F. Tidak ada yang menggunakan
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabG" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        G. Alasan lain
                                      </label>
                                      <input id="inputIsian" name="profile_lainnya" required type="text" class="form-control" placeholder="Tuliskan alasannya" aria-label="profile_lainnya">
                                    </div>

                                </div> <input id="btnLanjutProfileTanya" style="width:60%" type="button" name="next" class="next action-button" value="Lanjut ke Pertanyaan" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                            </fieldset>
                            <!-- <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Nomor 5 - 5</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->
                          </form>
                          <form class="msform_2A" action="index.html" method="post">
                            <!-- A -->
                          </form>
                          <form class="msform_2B" action="index.html" method="post">
                            <!-- B -->
                          </form>
                          <form class="msform_2C" action="index.html" method="post">
                            <!-- C -->
                          </form>
                          <form class="msform_2D" action="index.html" method="post">
                            <!-- D -->
                          </form>
                          <form class="msform_2E" action="index.html" method="post">
                            <!-- E -->
                          </form>
                          <form class="msform_2F" action="index.html" method="post">
                            <!-- F -->
                          </form>
                          <form class="msform_2G" action="index.html" method="post">
                            <!-- G -->
                          </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
<script type="text/javascript">
$('.msform-satu').show();
$('.msform-dua').hide();
$('.msform_2A').hide();
$('.msform_2B').hide();
$('.msform_2C').hide();
$('.msform_2D').hide();
$('.msform_2E').hide();
$('.msform_2F').hide();
$('.msform_2G').hide();
$('.inputNamaPelanggan').val('');
$('.inputNoKTP').val('');
$('.inputAlamat').val('');
$('.inputNoIndiHome').val('');
$('.inputTagihan').val('');
$('#radio_satu_no6').prop("checked",false);
$('#radio_satu_no7').prop("checked",false);
$('#radio_satu_no8').prop("checked",false);

  $(document).ready(function(){

    $('#inputIsianDataPemohon').click(function(){
        var nama_plggn = $('.inputNamaPelanggan').val();
        var no_ktp = $('.inputNoKTP').val();
        var alamat = $('.inputAlamat').val();
        var no_indihome = $('.inputNoIndiHome').val();
        var tagihan = $('.inputTagihan').val();
        var radio_satu_no6 = $('#radio_satu_no6').val();
        var radio_satu_no7 = $('#radio_satu_no7').val();
        var radio_satu_no8 = $('#radio_satu_no8').val();

        $('#isianDataPemohon').empty();
        $('#isianDataPemohon').append(`
            <div class="row sm-12">
              <div class="col-sm-5 text-muted">
                Nama Pelanggan :
              </div>
              <div class="col-sm-7">
              `+nama_plggn+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-5 text-muted">
                No. KTP :
              </div>
              <div class="col-sm-7">
              `+no_ktp+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-5 text-muted">
                Alamat :
              </div>
              <div class="col-sm-7">
              `+alamat+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-5 text-muted">
                Nomor IndiHome :
              </div>
              <div class="col-sm-7">
              `+no_indihome+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-5 text-muted">
                Tagihan Indihome :
              </div>
              <div class="col-sm-7">
              `+tagihan+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-5 text-muted">
                Paket Speed IndiHome :
              </div>
              <div class="col-sm-7">
              `+radio_satu_no6+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-5 text-muted">
                Hubungan pemohon dengan nomor IndiHome :
              </div>
              <div class="col-sm-7">
              `+radio_satu_no7+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-5 text-muted">
                Alasan berhenti berlangganan :
              </div>
              <div class="col-sm-7">
              `+radio_satu_no8+`
              </div>
            </div>
            <br>
          `);
    });

    $('#btnLanjutProfile').click(function(){
      $('.msform-satu').hide();
      $('.msform-dua').show();
      $('.msform_2A').hide();
      $('.msform_2B').hide();
      $('.msform_2C').hide();
      $('.msform_2D').hide();
      $('.msform_2E').hide();
      $('.msform_2F').hide();
      $('.msform_2G').hide();
    });

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>
@endsection
