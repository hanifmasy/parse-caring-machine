@extends('layout.app')
@section('content')
<div class="row sm-12 mx-auto">
  <div class="col-sm-5 mx-auto">
    <div class="card">
      <div class="card-header">
        <div class="row sm">
          <div class="col-3">
            <h5><small class="text-muted">Plasa : </small>
          </div>
          <div class="col-9" id="plasa_telkom">
            <!-- PLASA TELKOM -->
          </h5>
          </div>
        </div>
        <div class="row sm">
          <div class="col-3">
            <h5><small class="text-muted">Antrian : </small>
          </div>
          <div class="col-9" id="nomor_antrian">
            <!-- NOMOR ANTRIAN -->
            </h5>
          </div>
        </div>
      </div>
      <h6 class="card-subtitle mb-2 text-muted text-center align-items-center" style="margin:5%">Isilah Form Di Bawah Ini.</h6>
      <div class="card-body">
        <div class="container-fluid">
            <div class="row sm-12 justify-content-center">
                <div class="col-sm-12">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                          <form id="msform" action="{{ route('caring.form.two') }}" method="POST">
                            @csrf
                              <input style="display:none" readonly id="input_hid_antrianid" type="text" name="antrian_id">
                              <input style="display:none" readonly id="input_hid_plasaid" type="text" name="plasa_id">
                              <input style="display:none" readonly id="input_hid_namaplasa" type="text" name="nama_plasa">
                              <input style="display:none" readonly id="input_hid_noantrian" type="text" name="no_antrian">
                              <input style="display:none" readonly id="input_hid_tipeantrian" type="text" name="tipe_antrian">
                              <!-- progressbar -->
                              <div class="row sm-12 mx-auto">
                                <div class="col-sm-12 mx-auto">
                                  <ul id="progressbar" class="text-center align-items-center">
                                      <li class="active" id="nomor_1"><strong></strong></li>
                                      <li id="nomor_2"><strong></strong></li>
                                      <li id="nomor_3"><strong></strong></li>
                                      <li id="nomor_4"><strong></strong></li>
                                      <li id="nomor_5"><strong></strong></li>
                                      <li id="nomor_6"><strong></strong></li>
                                      <li id="nomor_7"><strong></strong></li>
                                      <li id="nomor_8"><strong></strong></li>
                                      <li style="display:none" id="nomor_9"><strong></strong></li>
                                      <li style="display:none" id="nomor_10"><strong></strong></li>
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
                                      <p class="text-muted">Nama (sesuai KTP):</p>
                                      <input id="inputIsian" name="nama_plggn"  type="text" class="form-control inputNamaPelanggan" placeholder="" aria-label="nama_plggn">
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
                                      <p class="text-muted">Nomor KTP:</p>
                                      <input id="inputIsian" name="no_ktp"  type="text" class="form-control inputNoKTP" placeholder="" aria-label="no_ktp">
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
                                      <p class="text-muted">Alamat:</p>
                                      <input id="inputIsian" name="alamat"  type="text" class="form-control inputAlamat" placeholder="" aria-label="alamat">
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
                                      <p class="text-muted">Nomor IndiHome:</p>
                                      <input id="inputIsian" name="no_indihome"  type="text" class="form-control inputNoIndiHome" placeholder="" aria-label="no_indihome">
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
                                    <p class="text-muted">Tagihan IndiHome:</p>
                                    <input id="inputIsian" name="tagihan_indihome"  type="text" class="form-control inputTagihan" placeholder="" aria-label="tagihan_indihome">
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
                                    <p class="text-muted">Paket Speed IndiHome:</p>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="10M">
                                      <label class="form-check-label" for="exampleRadios1">
                                        10M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="20M">
                                      <label class="form-check-label" for="exampleRadios1">
                                        20M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="30M">
                                      <label class="form-check-label" for="exampleRadios1">
                                        30M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="40M">
                                      <label class="form-check-label" for="exampleRadios1">
                                        40M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="50M">
                                      <label class="form-check-label" for="exampleRadios1">
                                        50M
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio_satu_no6" id="radio_satu_no6" value="100M">
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
                                      <p class="text-muted">Hubungan pemohon dengan nomor IndiHome:</p>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Pemilik">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Pemilik
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Suami/Istri">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Suami/Istri
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Keluarga">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Keluarga
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Karyawan">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Karyawan
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Pengontrak">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Pengontrak
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no7" id="radio_satu_no7" value="Lainnya">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Lainnya
                                        </label>
                                        <input id="inputIsian" name="pemohon_lainnya_no7" type="text" class="form-control pemohon_lainnya_no7" placeholder="Tuliskan alasannya" aria-label="pemohon_lainnya_no7">
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
                                      <p class="text-muted">Alasan mengajukan berhenti berlangganan :</p>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Efisiensi Harga Mahal">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Efisiensi Harga Mahal
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Efisiensi Tutup Usaha">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Efisiensi Tutup Usaha
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Layanan Sering Gangguan">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Layanan Sering Gangguan
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Perbaikan Gangguan Lama">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Perbaikan Gangguan Lama
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Pindah Provider Lain">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Pindah Provider Lain
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_satu_no8" id="radio_satu_no8" value="Sudah Punya IndiHome Baru">
                                        <label class="form-check-label" for="exampleRadios1">
                                          Sudah Punya IndiHome Baru
                                        </label>
                                      </div>
                                  </div> <input id="inputIsianDataPemohon" type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                              <fieldset class="fieldset_isianpemohon">
                                  <div class="form-card">
                                      <div class="row sm-12">
                                          <div class="col-sm-7">
                                              <h2 class="fs-title">Data Pemohon</h2>
                                          </div>
                                          <div class="col-sm-5">
                                              <h2 class="steps"></h2>
                                          </div>
                                      </div>
                                      <!-- ISIAN DATA PEMOHON -->
                                      <p class="text-muted">Isian Data Pemohon :</p>
                                      <div id="isianDataPemohon">

                                      </div>
                                  </div> <input id="btnLanjutProfile" style="width:60%" type="button" name="next" class="next action-button" value="Lanjut ke Data Profile" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                              </fieldset>
                            <fieldset class="fieldset_dataprofile">
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
                                    <p class="text-muted">Penyebab Anda berhenti berlangganan:</p>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabA">
                                      <label class="form-check-label" for="exampleRadios1">
                                        A. Sering Gangguan
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabB">
                                      <label class="form-check-label" for="exampleRadios1">
                                        B. Terlalu Mahal
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabC">
                                      <label class="form-check-label" for="exampleRadios1">
                                        C. Pindah Alamat
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabD">
                                      <label class="form-check-label" for="exampleRadios1">
                                        D. Ganti Operator
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabE">
                                      <label class="form-check-label" for="exampleRadios1">
                                        E. Musibah
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabF">
                                      <label class="form-check-label" for="exampleRadios1">
                                        F. Tidak ada yang menggunakan
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radioDataProfile" id="radioDataProfile" value="jawabG">
                                      <label class="form-check-label" for="exampleRadios1">
                                        G. Alasan lain
                                      </label>
                                      <input id="inputIsian" name="profile_lainnya" type="text" class="form-control" placeholder="Tuliskan alasannya" aria-label="profile_lainnya">
                                    </div>
                                </div> <input id="btnLanjutPertanyaan" style="width:60%;" type="submit" class="next action-button" value="Lanjut ke Pertanyaan" />
                            </fieldset>
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
<script type="text/javascript">

$('.inputNamaPelanggan').val('');
$('.inputNoKTP').val('');
$('.inputAlamat').val('');
$('.inputNoIndiHome').val('');
$('.inputTagihan').val('');
$('#radio_satu_no6').prop("checked",false);
$('#radio_satu_no7').prop("checked",false);
$('.pemohon_lainnya_no7').val('');
$('#radio_satu_no8').prop("checked",false);
$('#isianDataPemohon').empty();

$('#plasa_telkom').empty();
$('#nomor_antrian').empty();
$('#input_hid_plasaid').val('');
$('#input_hid_namaplasa').val('');
$('#input_hid_noantrian').val('');
$('#input_hid_tipeantrian').val('');
$('#input_hid_antrianid').val('');
var result = @json($result);
$('#plasa_telkom').append(result.nama_plasa);
$('#nomor_antrian').append(result.no_antrian);
$('#input_hid_plasaid').val(result.plasa_id);
$('#input_hid_namaplasa').val(result.nama_plasa);
$('#input_hid_noantrian').val(result.no_antrian);
$('#input_hid_tipeantrian').val(result.tipe_antrian);
$('#input_hid_antrianid').val(result.id);

var arrDataPemohon = [];
var nama_plggn = '';
var no_ktp = '';
var alamat = '';
var no_indihome = '';
var tagihan = '';
var radio_satu_no6 = '';
var radio_satu_no7 = '';
var pemohon_lainnya_no7 = '';
var radio_satu_no8 = '';
var jawabDataProfile = '';
var arrDataProfile = [];

$(document).ready(function(){

    $('#inputIsianDataPemohon').click(function(){
        $('#isianDataPemohon').empty();
        nama_plggn = $('.inputNamaPelanggan').val();
        no_ktp = $('.inputNoKTP').val();
        alamat = $('.inputAlamat').val();
        no_indihome = $('.inputNoIndiHome').val();
        tagihan = $('.inputTagihan').val();
        radio_satu_no6 = $('input[name="radio_satu_no6"]:checked').val();
        radio_satu_no7 = $('input[name="radio_satu_no7"]:checked').val();
        if(radio_satu_no7 === 'Lainnya'){ pemohon_lainnya_no7 = $('.pemohon_lainnya_no7').val(); }
        radio_satu_no8 = $('input[name="radio_satu_no8"]:checked').val();

        $('#isianDataPemohon').append(`
            <div class="row sm-12">
              <div class="col-sm-6 text-muted">
                Nama Pelanggan :
              </div>
              <div class="col-sm-6">
              `+nama_plggn+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-6 text-muted">
                No. KTP :
              </div>
              <div class="col-sm-6">
              `+no_ktp+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-6 text-muted">
                Alamat :
              </div>
              <div class="col-sm-6">
              `+alamat+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-6 text-muted">
                Nomor IndiHome :
              </div>
              <div class="col-sm-6">
              `+no_indihome+`
              </div>
            </div>
            <div class="row sm-12">
              <div class="col-sm-6 text-muted">
                Tagihan Indihome :
              </div>
              <div class="col-sm-6">
              `+tagihan+`
              </div>
            </div>`);


            if(radio_satu_no6 !== undefined){
              $('#isianDataPemohon').append(`
                    <div class="row sm-12">
                      <div class="col-sm-6 text-muted">
                        Paket Speed IndiHome :
                      </div>
                      <div class="col-sm-6">
                      `+radio_satu_no6+`
                      </div>
                    </div>`);
            }
            else {
              $('#isianDataPemohon').append(`
                    <div class="row sm-12">
                      <div class="col-sm-6 text-muted">
                        Paket Speed IndiHome :
                      </div>
                      <div class="col-sm-6">
                      </div>
                    </div>`);
            }


            if(radio_satu_no7 !== undefined){
              if(radio_satu_no7 !== 'Lainnya'){
                $('#isianDataPemohon').append(`
                  <div class="row sm-12">
                    <div class="col-sm-6 text-muted">
                      Hubungan pemohon dengan nomor IndiHome :
                    </div>
                    <div class="col-sm-6">
                    `+radio_satu_no7+`
                    </div>
                  </div>
                  `);
               }
               if(radio_satu_no7 === ''){
                 $('#isianDataPemohon').append(`
                   <div class="row sm-12">
                     <div class="col-sm-6 text-muted">
                       Hubungan pemohon dengan nomor IndiHome :
                     </div>
                     <div class="col-sm-6">
                     `+pemohon_lainnya_no7+`
                     </div>
                   </div>
                   `);
                 }
              }
              else {
                $('#isianDataPemohon').append(`
                  <div class="row sm-12">
                    <div class="col-sm-6 text-muted">
                      Hubungan pemohon dengan nomor IndiHome :
                    </div>
                    <div class="col-sm-6">
                    </div>
                  </div>
                  `);
                }

          if(radio_satu_no8 !== undefined){
            $('#isianDataPemohon').append(`
                  <div class="row sm-12">
                    <div class="col-sm-6 text-muted">
                      Alasan berhenti berlangganan :
                    </div>
                    <div class="col-sm-6">
                    `+radio_satu_no8+`
                    </div>
                  </div>
                  <br>
                `);
          }
          else {
            $('#isianDataPemohon').append(`
                  <div class="row sm-12">
                    <div class="col-sm-6 text-muted">
                      Alasan berhenti berlangganan :
                    </div>
                    <div class="col-sm-6">
                    </div>
                  </div>
                  <br>
                `);
          }
    });

    // $('#btnLanjutProfile').click(function(){
    //   arrDataPemohon.length = 0;
    //   arrDataPemohon.push(result.nama_plasa,result.no_antrian,nama_plggn,no_ktp,alamat,no_indihome,tagihan,radio_satu_no6,radio_satu_no7,pemohon_lainnya_no7,radio_satu_no8);
    //
    // });

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

});
</script>
@endsection
