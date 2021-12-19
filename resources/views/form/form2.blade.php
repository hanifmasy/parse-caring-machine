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
                          <form id="msform" action="{{ route('caring.form.submit') }}" method="POST">

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
$('.profile_a6_lainnya').val('');
$('#plasa_telkom').empty();
$('#nomor_antrian').empty();
$('#msform').empty();
$('#msform').append(`
  @csrf
  <input style="display:none" readonly id="input_hid_formid" type="text" name="form_id">
  <input style="display:none" readonly id="input_hid_plasaid" type="text" name="plasa_id">
  <input style="display:none" readonly id="input_hid_namaplasa" type="text" name="nama_plasa">
  <input style="display:none" readonly id="input_hid_antrianid" type="text" name="antrian_id">
  <input style="display:none" readonly id="input_hid_noantrian" type="text" name="no_antrian">
  <input style="display:none" readonly id="input_hid_tipeantrian" type="text" name="tipe_antrian">
  <input style="display:none" readonly id="input_hid_radiodataprofile" type="text" name="radiodataprofile">
`);
$('#input_hid_formid').val('');
$('#input_hid_plasaid').val('');
$('#input_hid_namaplasa').val('');
$('#input_hid_antrianid').val('');
$('#input_hid_noantrian').val('');
$('#input_hid_tipeantrian').val('');
$('#input_hid_radiodataprofile').val('');

var form = @json($result);
$('#plasa_telkom').append(form.nama_plasa);
$('#nomor_antrian').append(form.no_antrian);
$('#input_hid_formid').val(form.id);
$('#input_hid_plasaid').val(form.plasa_id);
$('#input_hid_namaplasa').val(form.nama_plasa);
$('#input_hid_antrianid').val(form.antrian_id);
$('#input_hid_noantrian').val(form.no_antrian);
$('#input_hid_tipeantrian').val(form.tipe_antrian);
$('#input_hid_radiodataprofile').val(form.radiodataprofile);

if(form.radiodataprofile === 'jawabA'){
  $('#msform').append(`
    <div class="row sm-12 mx-auto">
      <div class="col-sm-12 mx-auto">
        <ul id="progressbar" class="text-center align-items-center">
            <li class="active" id="nomor_1"><strong></strong></li>
            <li id="nomor_2"><strong></strong></li>
            <li id="nomor_3"><strong></strong></li>
            <li id="nomor_4"><strong></strong></li>
            <li id="nomor_5"><strong></strong></li>
            <li id="nomor_6"><strong></strong></li>
            <li style="display:none" id="nomor_7"><strong></strong></li>
            <li style="display:none" id="nomor_8"><strong></strong></li>
        </ul>
      </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div> <br><br>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>A. Sering Gangguan</p></h5><br><h6 class="text-muted">Penyebab Berhenti Berlangganan:</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR A1 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a1" id="radio_profile_a1" value="1-3 kali" checked>
              <label class="form-check-label" for="exampleRadios1">
                1-3 kali
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a1" id="radio_profile_a1" value="4-6 kali" checked>
              <label class="form-check-label" for="exampleRadios1">
                4-6 kali
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a1" id="radio_profile_a1" value="7-10 kali" checked>
              <label class="form-check-label" for="exampleRadios1">
                7-10 kali
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a1" id="radio_profile_a1" value="Lebih dari 10 kali" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lebih dari 10 kali
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>A. Sering Gangguan</p></h5><br><h6 class="text-muted">Waktu Gangguan Terakhir:</h6>
                </div>
                <div class="col-sm-1">
                    <h2 class="steps"></h2>
                </div>
            </div>
            <!-- INPUT NOMOR A2 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a2" id="radio_profile_a2" value="1-7 hari yang lalu" checked>
              <label class="form-check-label" for="exampleRadios1">
                1-7 hari yang lalu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a2" id="radio_profile_a2" value="8-15 hari yang lalu" checked>
              <label class="form-check-label" for="exampleRadios1">
                8-15 hari yang lalu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a2" id="radio_profile_a2" value="16-30 hari yang lalu" checked>
              <label class="form-check-label" for="exampleRadios1">
                16-30 hari yang lalu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a2" id="radio_profile_a2" value="Lebih dari sebulan yang lalu" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lebih dari sebulan yang lalu
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>A. Sering Gangguan</p></h5><br><h6 class="text-muted">Media Melaporkan Gangguan:</h6>
                </div>
                <div class="col-sm-1">
                    <h2 class="steps"></h2>
                </div>
            </div>
            <!-- INPUT NOMOR A3 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a3" id="radio_profile_a3" value="Aplikasi myIndiHome" checked>
              <label class="form-check-label" for="exampleRadios1">
                Aplikasi myIndiHome
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a3" id="radio_profile_a3" value="Call Center 147" checked>
              <label class="form-check-label" for="exampleRadios1">
                Call Center 147
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a3" id="radio_profile_a3" value="Plasa Telkom" checked>
              <label class="form-check-label" for="exampleRadios1">
                Plasa Telkom
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a3" id="radio_profile_a3" value="Sosial media @indihomecare" checked>
              <label class="form-check-label" for="exampleRadios1">
                Sosial media @indihomecare
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a3" id="radio_profile_a3" value="Teknisi" checked>
              <label class="form-check-label" for="exampleRadios1">
                Teknisi
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a3" id="radio_profile_a3" value="Sales" checked>
              <label class="form-check-label" for="exampleRadios1">
                Sales
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a3" id="radio_profile_a3" value="Teman" checked>
              <label class="form-check-label" for="exampleRadios1">
                Teman
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_a3" id="radio_profile_a3" value="WhatsApp" checked>
              <label class="form-check-label" for="exampleRadios1">
                WhatsApp
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
    <div class="form-card">
        <div class="row sm-12">
            <div class="col-sm-11">
                <h5 class="fs-title"><p>A. Sering Gangguan</p></h5><br><h6 class="text-muted">Jumlah orang yang biasa menggunakan IndiHome:</h6>
            </div>
            <div class="col-sm-1">
                <h2 class="steps"></h2>
            </div>
        </div>
        <!-- INPUT NOMOR A4 -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_a4" id="radio_profile_a4" value="1-3 orang" checked>
          <label class="form-check-label" for="exampleRadios1">
            1-3 orang
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_a4" id="radio_profile_a4" value="4-6 orang" checked>
          <label class="form-check-label" for="exampleRadios1">
            4-6 orang
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_a4" id="radio_profile_a4" value="7-10 orang" checked>
          <label class="form-check-label" for="exampleRadios1">
            7-10 orang
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_a4" id="radio_profile_a4" value="Lebih dari 10 orang" checked>
          <label class="form-check-label" for="exampleRadios1">
            Lebih dari 10 orang
          </label>
        </div>
    </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
    <div class="form-card">
        <div class="row sm-12">
            <div class="col-sm-11">
                <h5 class="fs-title"><p>A. Sering Gangguan</p></h5><br><h6 class="text-muted">Jumlah perangkat / gadget yang terhubung ke IndiHome:</h6>
            </div>
            <div class="col-sm-1">
                <h2 class="steps"></h2>
            </div>
        </div>
        <!-- INPUT NOMOR A5 -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_a5" id="radio_profile_a5" value="1-3 perangkat" checked>
          <label class="form-check-label" for="exampleRadios1">
            1-3 perangkat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_a5" id="radio_profile_a5" value="4-6 perangkat" checked>
          <label class="form-check-label" for="exampleRadios1">
            4-6 perangkat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_a5" id="radio_profile_a5" value="7-10 perangkat" checked>
          <label class="form-check-label" for="exampleRadios1">
            7-10 perangkat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_a5" id="radio_profile_a5" value="Lebih dari 10 perangkat" checked>
          <label class="form-check-label" for="exampleRadios1">
            Lebih dari 10 perangkat
          </label>
        </div>
    </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
    <div class="form-card">
    <div class="row sm-12">
        <div class="col-sm-11">
            <h5 class="fs-title"><p>A. Sering Gangguan</p></h5><br><h6 class="text-muted">Rencana penggunaan internet selanjutnya menggunakan:</h6>
        </div>
        <div class="col-sm-1">
            <h2 class="steps"></h2>
        </div>
        </div>
      <!-- INPUT NOMOR A6 -->
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_a6" id="radio_profile_a6" value="Paket Data HP">
        <label class="form-check-label" for="exampleRadios1">
          Paket Data HP
        </label>
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_a6" id="radio_profile_a6" value="Iconnet">
        <img src="{{ asset('public/img/iconnet_logo.jpeg') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_a6" id="radio_profile_a6" value="XL Home">
        <img src="{{ asset('public/img/xlhome_logo.png') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_a6" id="radio_profile_a6" value="Biznet">
        <img src="{{ asset('public/img/biznet_logo.png') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_a6" id="radio_profile_a6" value="MNCplay">
        <img src="{{ asset('public/img/mncplay_logo.png') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_a6" id="radio_profile_a6" value="myRepublic">
        <img src="{{ asset('public/img/myrepublic_logo.png') }}" alt="" width="120" height="40">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_a6" id="radio_profile_a6" value="First Media">
        <img src="{{ asset('public/img/firstmedia_logo.png') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_a6" id="radio_profile_a6" value="Lainnya">
        <label class="form-check-label" for="exampleRadios1">
          Lainnya
        </label>
        <input id="inputIsian" name="profile_a6_lainnya" type="text" class="form-control profile_a6_lainnya" placeholder="Tuliskan alasannya" aria-label="profile_a6_lainnya">
      </div>
    </div> <br><input id="cekIsianA" type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    `);
}
if(form.radiodataprofile === 'jawabB'){
  $('#msform').append(`
    <div class="row sm-12 mx-auto">
      <div class="col-sm-12 mx-auto">
        <ul id="progressbar" class="text-center align-items-center">
            <li class="active" id="nomor_1"><strong></strong></li>
            <li id="nomor_2"><strong></strong></li>
            <li id="nomor_3"><strong></strong></li>
            <li id="nomor_4"><strong></strong></li>
            <li id="nomor_5"><strong></strong></li>
            <li style="display:none" id="nomor_6"><strong></strong></li>
            <li style="display:none" id="nomor_7"><strong></strong></li>
        </ul>
      </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div> <br><br>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>B. Terlalu Mahal</p></h5><br><h6 class="text-muted">Berapa seharusnya tarif internet yang wajar?</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR B1 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_b1" id="radio_profile_b1" value="100-150 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                100-150 ribu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_b1" id="radio_profile_b1" value="150-250 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                150-250 ribu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_b1" id="radio_profile_b1" value="250-400 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                250-400 ribu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_b1" id="radio_profile_b1" value="400-700 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                400-700 ribu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_b1" id="radio_profile_b1" value="700-1.500 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                700-1.500 ribu
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" />
    </fieldset>
    <fieldset>
    <div class="form-card">
        <div class="row sm-12">
            <div class="col-sm-11">
                <h5 class="fs-title"><p>B. Terlalu Mahal</p></h5><br><h6 class="text-muted">Berapa kecepatan internet yang diperlukan?</h6>
            </div>
            <div class="col-sm-1">
                <h2 class="steps"></h2>
            </div>
        </div>
        <!-- INPUT NOMOR B2 -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b2" id="radio_profile_b2" value="10M" checked>
          <label class="form-check-label" for="exampleRadios1">
            10M
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b2" id="radio_profile_b2" value="20M" checked>
          <label class="form-check-label" for="exampleRadios1">
            20M
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b2" id="radio_profile_b2" value="30M" checked>
          <label class="form-check-label" for="exampleRadios1">
            30M
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b2" id="radio_profile_b2" value="40M" checked>
          <label class="form-check-label" for="exampleRadios1">
            40M
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b2" id="radio_profile_b2" value="50M" checked>
          <label class="form-check-label" for="exampleRadios1">
            50M
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b2" id="radio_profile_b2" value="100M" checked>
          <label class="form-check-label" for="exampleRadios1">
            100M
          </label>
        </div>
    </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
    <div class="form-card">
        <div class="row sm-12">
            <div class="col-sm-11">
                <h5 class="fs-title"><p>B. Terlalu Mahal</p></h5><br><h6 class="text-muted">Jumlah orang yang biasa menggunakan IndiHome:</h6>
            </div>
            <div class="col-sm-1">
                <h2 class="steps"></h2>
            </div>
        </div>
        <!-- INPUT NOMOR B3 -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b3" id="radio_profile_b3" value="1-3 orang" checked>
          <label class="form-check-label" for="exampleRadios1">
            1-3 orang
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b3" id="radio_profile_b3" value="4-6 orang" checked>
          <label class="form-check-label" for="exampleRadios1">
            4-6 orang
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b3" id="radio_profile_b3" value="7-10 orang" checked>
          <label class="form-check-label" for="exampleRadios1">
            7-10 orang
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b3" id="radio_profile_b3" value="Lebih dari 10 orang" checked>
          <label class="form-check-label" for="exampleRadios1">
            Lebih dari 10 orang
          </label>
        </div>
    </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
    <div class="form-card">
        <div class="row sm-12">
            <div class="col-sm-11">
                <h5 class="fs-title"><p>B. Terlalu Mahal</p></h5><br><h6 class="text-muted">Jumlah perangkat / gadget yang terhubung ke IndiHome:</h6>
            </div>
            <div class="col-sm-1">
                <h2 class="steps"></h2>
            </div>
        </div>
        <!-- INPUT NOMOR B4 -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b4" id="radio_profile_b4" value="1-3 perangkat" checked>
          <label class="form-check-label" for="exampleRadios1">
            1-3 perangkat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b4" id="radio_profile_b4" value="4-6 perangkat" checked>
          <label class="form-check-label" for="exampleRadios1">
            4-6 perangkat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b4" id="radio_profile_b4" value="7-10 perangkat" checked>
          <label class="form-check-label" for="exampleRadios1">
            7-10 perangkat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio_profile_b4" id="radio_profile_b4" value="Lebih dari 10 perangkat" checked>
          <label class="form-check-label" for="exampleRadios1">
            Lebih dari 10 perangkat
          </label>
        </div>
    </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
    <div class="form-card">
    <div class="row sm-12">
        <div class="col-sm-11">
            <h5 class="fs-title"><p>B. Terlalu Mahal</p></h5><br><h6 class="text-muted">Rencana penggunaan internet selanjutnya menggunakan:</h6>
        </div>
        <div class="col-sm-1">
            <h2 class="steps"></h2>
        </div>
        </div>
      <!-- INPUT NOMOR B5 -->
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_b5" id="radio_profile_b5" value="Paket Data HP">
        <label class="form-check-label" for="exampleRadios1">
          Paket Data HP
        </label>
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_b5" id="radio_profile_b5" value="Iconnet">
        <img src="{{ asset('public/img/iconnet_logo.jpeg') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_b5" id="radio_profile_b5" value="XL Home">
        <img src="{{ asset('public/img/xlhome_logo.png') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_b5" id="radio_profile_b5" value="Biznet">
        <img src="{{ asset('public/img/biznet_logo.png') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_b5" id="radio_profile_b5" value="MNCplay">
        <img src="{{ asset('public/img/mncplay_logo.png') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_b5" id="radio_profile_b5" value="myRepublic">
        <img src="{{ asset('public/img/myrepublic_logo.png') }}" alt="" width="120" height="40">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_b5" id="radio_profile_b5" value="First Media">
        <img src="{{ asset('public/img/firstmedia_logo.png') }}" alt="" width="120" height="50">
      </div><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio_profile_b5" id="radio_profile_b5" value="Lainnya">
        <label class="form-check-label" for="exampleRadios1">
          Lainnya
        </label>
        <input id="inputIsian" name="profile_b5_lainnya" type="text" class="form-control profile_b5_lainnya" placeholder="Tuliskan alasannya" aria-label="profile_b5_lainnya">
      </div>
    </div> <br><input id="cekIsianB" type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    `);
}
if(form.radiodataprofile === 'jawabC'){
  $('#msform').append(`
    <div class="row sm-12 mx-auto">
      <div class="col-sm-12 mx-auto">
        <ul id="progressbar" class="text-center align-items-center">
            <li class="active" id="nomor_1"><strong></strong></li>
            <li id="nomor_2"><strong></strong></li>
            <li id="nomor_3"><strong></strong></li>
            <li style="display:none" id="nomor_4"><strong></strong></li>
            <li style="display:none" id="nomor_5"><strong></strong></li>
        </ul>
      </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div> <br><br>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>C. Pindah Alamat</p></h5><br><h6 class="text-muted">Pindah karena:</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR C1 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c1" id="radio_profile_c1" value="Rumah baru" checked>
              <label class="form-check-label" for="exampleRadios1">
                Rumah baru
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c1" id="radio_profile_c1" value="Kontrakan habis" checked>
              <label class="form-check-label" for="exampleRadios1">
                Kontrakan habis
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c1" id="radio_profile_c1" value="Pindah kerja/tugas" checked>
              <label class="form-check-label" for="exampleRadios1">
                Pindah kerja/tugas
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c1" id="radio_profile_c1" value="Pulang kampung" checked>
              <label class="form-check-label" for="exampleRadios1">
                Pulang kampung
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>C. Pindah Alamat</p></h5><br><h6 class="text-muted">Alamat baru :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR C2 -->
            <div class="form-check">
            <input id="inputIsian" name="profile_c2" type="text" class="form-control profile_c2" placeholder="" aria-label="profile_c2">
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>C. Pindah Alamat</p></h5><br><h6 class="text-muted">Rencana penggunaan internet di alamat baru :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR C3 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c3" id="radio_profile_c3" value="IndiHome">
              <img src="{{ asset('public/img/indihome_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c3" id="radio_profile_c3" value="Iconnet">
              <img src="{{ asset('public/img/iconnet_logo.jpeg') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c3" id="radio_profile_c3" value="XL Home">
              <img src="{{ asset('public/img/xlhome_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c3" id="radio_profile_c3" value="Biznet">
              <img src="{{ asset('public/img/biznet_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c3" id="radio_profile_c3" value="MNCplay">
              <img src="{{ asset('public/img/mncplay_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c3" id="radio_profile_c3" value="myRepublic">
              <img src="{{ asset('public/img/myrepublic_logo.png') }}" alt="" width="120" height="40">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c3" id="radio_profile_c3" value="First Media">
              <img src="{{ asset('public/img/firstmedia_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_c3" id="radio_profile_c3" value="Paket Data HP">
              <label class="form-check-label" for="exampleRadios1">
                Paket Data HP
              </label>
            </div>
        </div> <br><input id="cekIsianC" type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    `);
}
if(form.radiodataprofile === 'jawabD'){
  $('#msform').append(`
    <div class="row sm-12 mx-auto">
      <div class="col-sm-12 mx-auto">
        <ul id="progressbar" class="text-center align-items-center">
            <li class="active" id="nomor_1"><strong></strong></li>
            <li id="nomor_2"><strong></strong></li>
            <li id="nomor_3"><strong></strong></li>
            <li style="display:none" id="nomor_4"><strong></strong></li>
            <li style="display:none" id="nomor_5"><strong></strong></li>
        </ul>
      </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div> <br><br>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>D. Ganti Operator</p></h5><br><h6 class="text-muted">Operator yang digunakan :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR D1 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d1" id="radio_profile_d1" value="Paket Data HP">
              <label class="form-check-label" for="exampleRadios1">
                Paket Data HP
              </label>
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d1" id="radio_profile_d1" value="Iconnet">
              <img src="{{ asset('public/img/iconnet_logo.jpeg') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d1" id="radio_profile_d1" value="XL Home">
              <img src="{{ asset('public/img/xlhome_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d1" id="radio_profile_d1" value="Biznet">
              <img src="{{ asset('public/img/biznet_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d1" id="radio_profile_d1" value="MNCplay">
              <img src="{{ asset('public/img/mncplay_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d1" id="radio_profile_d1" value="myRepublic">
              <img src="{{ asset('public/img/myrepublic_logo.png') }}" alt="" width="120" height="40">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d1" id="radio_profile_d1" value="First Media">
              <img src="{{ asset('public/img/firstmedia_logo.png') }}" alt="" width="120" height="50">
            </div><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d1" id="radio_profile_d1" value="Lainnya">
              <label class="form-check-label" for="exampleRadios1">
                Lainnya
              </label>
              <input id="inputIsian" name="profile_d1_lainnya" type="text" class="form-control profile_d1_lainnya" placeholder="Tuliskan alasannya" aria-label="profile_d1_lainnya">
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>D. Ganti Operator</p></h5><br><h6 class="text-muted">Paket operator yang digunakan :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR D2 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d2" id="radio_profile_d2" value="100-150 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                100-150 ribu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d2" id="radio_profile_d2" value="150-250 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                150-250 ribu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d2" id="radio_profile_d2" value="250-400 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                250-400 ribu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d2" id="radio_profile_d2" value="400-700 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                400-700 ribu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d2" id="radio_profile_d2" value="700-1.500 ribu" checked>
              <label class="form-check-label" for="exampleRadios1">
                700-1.500 ribu
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /><input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>D. Ganti Operator</p></h5><br><h6 class="text-muted">Alasan pindah operator :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR D3 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d3" id="radio_profile_d3" value="Lebih murah" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lebih murah
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d3" id="radio_profile_d3" value="Lebih cepat" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lebih cepat
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d3" id="radio_profile_d3" value="Lebih stabil/jarang gangguan" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lebih stabil/jarang gangguan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d3" id="radio_profile_d3" value="Petugas lebih memuaskan & berkompeten" checked>
              <label class="form-check-label" for="exampleRadios1">
                Petugas lebih memuaskan & berkompeten
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_d3" id="radio_profile_d3" value="Fitur layanan lebih lengkap" checked>
              <label class="form-check-label" for="exampleRadios1">
                Fitur layanan lebih lengkap
              </label>
            </div>
        </div> <br><input id="cekIsianD" type="button" name="next" class="next action-button" value="Lanjut" /><input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    `);
}
if(form.radiodataprofile === 'jawabE'){
  $('#msform').append(`
    <div class="row sm-12 mx-auto">
      <div class="col-sm-12 mx-auto">
        <ul id="progressbar" class="text-center align-items-center">
            <li class="active" id="nomor_1"><strong></strong></li>
            <li id="nomor_2"><strong></strong></li>
            <li id="nomor_3"><strong></strong></li>
            <li style="display:none" id="nomor_4"><strong></strong></li>
            <li style="display:none" id="nomor_5"><strong></strong></li>
        </ul>
      </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div> <br><br>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>E. Musibah</p></h5><br><h6 class="text-muted">Jenis musibah :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR E1 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e1" id="radio_profile_e1" value="Meninggal dunia" checked>
              <label class="form-check-label" for="exampleRadios1">
                Meninggal dunia
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e1" id="radio_profile_e1" value="Bencana Alam" checked>
              <label class="form-check-label" for="exampleRadios1">
                Bencana Alam
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e1" id="radio_profile_e1" value="Kebakaran" checked>
              <label class="form-check-label" for="exampleRadios1">
                Kebakaran
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e1" id="radio_profile_e1" value="Kehilangan penghasilan" checked>
              <label class="form-check-label" for="exampleRadios1">
                Kehilangan penghasilan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e1" id="radio_profile_e1" value="Mengganggu kehidupan,pembelajaran,/kecanduan internet" checked>
              <label class="form-check-label" for="exampleRadios1">
                Mengganggu kehidupan,pembelajaran,/kecanduan internet
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>E. Musibah</p></h5><br><h6 class="text-muted">Sebelumnya, berapa jumlah orang yang biasa menggunakan IndiHome :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR E2 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e2" id="radio_profile_e2" value="1-3 orang" checked>
              <label class="form-check-label" for="exampleRadios1">
                1-3 orang
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e2" id="radio_profile_e2" value="4-6 orang" checked>
              <label class="form-check-label" for="exampleRadios1">
                4-6 orang
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e2" id="radio_profile_e2" value="7-10 orang" checked>
              <label class="form-check-label" for="exampleRadios1">
                7-10 orang
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e2" id="radio_profile_e2" value="Lebih dari 10 orang" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lebih dari 10 orang
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /><input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>E. Musibah</p></h5><br><h6 class="text-muted">Sebelumnya, berapa jumlah perangkat / gadget yang terhubung ke IndiHome :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR E3 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e3" id="radio_profile_e3" value="1-3 perangkat" checked>
              <label class="form-check-label" for="exampleRadios1">
                1-3 perangkat
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e3" id="radio_profile_e3" value="4-6 perangkat" checked>
              <label class="form-check-label" for="exampleRadios1">
                4-6 perangkat
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e3" id="radio_profile_e3" value="7-10 perangkat" checked>
              <label class="form-check-label" for="exampleRadios1">
                7-10 perangkat
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_e3" id="radio_profile_e3" value="Lebih dari 10 perangkat" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lebih dari 10 perangkat
              </label>
            </div>
        </div> <br><input id="cekIsianE" type="button" name="next" class="next action-button" value="Lanjut" /><input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    `);
}
if(form.radiodataprofile === 'jawabF'){
  $('#msform').append(`
    <div class="row sm-12 mx-auto">
      <div class="col-sm-12 mx-auto">
        <ul id="progressbar" class="text-center align-items-center">
            <li class="active" id="nomor_1"><strong></strong></li>
            <li id="nomor_2"><strong></strong></li>
            <li style="display:none" id="nomor_3"><strong></strong></li>
            <li style="display:none" id="nomor_4"><strong></strong></li>
        </ul>
      </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div> <br><br>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>F. Tidak ada yang menggunakan</p></h5><br><h6 class="text-muted">Sebelumnya yang biasa menggunakan IndiHome adalah :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR F1 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f1" id="radio_profile_f1" value="Suami/Istri" checked>
              <label class="form-check-label" for="exampleRadios1">
                Suami/Istri
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f1" id="radio_profile_f1" value="Saudara/Keluarga" checked>
              <label class="form-check-label" for="exampleRadios1">
                Saudara/Keluarga
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f1" id="radio_profile_f1" value="Penghuni kost" checked>
              <label class="form-check-label" for="exampleRadios1">
                Penghuni kost
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f1" id="radio_profile_f1" value="Pengontrak" checked>
              <label class="form-check-label" for="exampleRadios1">
                Pengontrak
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f1" id="radio_profile_f1" value="Karyawan" checked>
              <label class="form-check-label" for="exampleRadios1">
                Karyawan
              </label>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>F. Tidak ada yang menggunakan</p></h5><br><h6 class="text-muted">Kondisi saat ini yang biasa menggunakan IndiHome :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR F2 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f2" id="radio_profile_f2" value="Pindah kerja luar kota" checked>
              <label class="form-check-label" for="exampleRadios1">
                Pindah kerja luar kota
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f2" id="radio_profile_f2" value="Pendidikan luar kota" checked>
              <label class="form-check-label" for="exampleRadios1">
                Pendidikan luar kota
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f2" id="radio_profile_f2" value="Pensiun dan pulang kampung" checked>
              <label class="form-check-label" for="exampleRadios1">
                Pensiun dan pulang kampung
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f2" id="radio_profile_f2" value="Lulus kuliah dan pulang kampung" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lulus kuliah dan pulang kampung
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio_profile_f2" id="radio_profile_f2" value="Sudah mulai kuliah offline" checked>
              <label class="form-check-label" for="exampleRadios1">
                Sudah mulai kuliah offline
              </label>
            </div>
        </div> <br><input id="cekIsianF" type="button" name="next" class="next action-button" value="Lanjut" /><input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    `);
}
if(form.radiodataprofile === 'jawabG'){
  $('#msform').append(`
    <div class="row sm-12 mx-auto">
      <div class="col-sm-12 mx-auto">
        <ul id="progressbar" class="text-center align-items-center">
            <li class="active" id="nomor_1"><strong></strong></li>
            <li id="nomor_2"><strong></strong></li>
            <li style="display:none" id="nomor_3"><strong></strong></li>
            <li style="display:none" id="nomor_4"><strong></strong></li>
        </ul>
      </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div> <br><br>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>G. Alasan lain</p></h5><br><h6 class="text-muted">Alasan keinginan Cabut:</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR G1 -->
            <div class="form-check">
            <textarea  cols="20" rows="5" name="profile_g1" class="text form-control profile_g1" placeholder="" aria-label="profile_g1"></textarea>
            </div>
        </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" />
    </fieldset>
    <fieldset>
        <div class="form-card">
            <div class="row sm-12">
                <div class="col-sm-11">
                    <h5 class="fs-title"><p>G. Alasan lain</p></h5><br><h6 class="text-muted"> Harapan untuk tetap berlangganan :</h6>
                </div>
                <div class="col-sm-1">
                    <h5 class="steps"></h5>
                </div>
            </div>
            <!-- INPUT NOMOR G2 -->
            <div class="form-check">
            <textarea cols="20" rows="5" name="profile_g2" class="text form-control profile_g2" placeholder="" aria-label="profile_g2"></textarea>
            </div>
        </div> <br><input id="cekIsianG" type="button" name="next" class="next action-button" value="Lanjut" /><input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
    </fieldset>
    `);
}


$('#msform').append(`
  <fieldset>
      <div class="form-card">
          <div class="row sm-12">
              <div class="col-sm-7">
                  <h6 class="text-muted">Isian Data Profile:</h6>
              </div>
              <div class="col-sm-5">
                  <h2 class="steps"></h2>
              </div>
          </div>
          <!-- PENGECEKAN PENGISIAN FORM PROFILE -->
          <div id="isianDataProfile"></div>
      </div> <br><input type="button" name="next" class="next action-button" value="Lanjut" /> <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
  </fieldset>
  <fieldset>
      <div class="form-card">
          <div class="row sm-12">
              <div class="col-sm-7">
                  <h6 class="text-muted fs-title"><b>Tahukah Anda bahwa:</b></h6>
              </div>
              <div class="col-sm-5">
                  <h2 class="steps"></h2>
              </div>
          </div>
          <!-- PILIHAN PELANGGAN BATAL/BERHENTI BERLANGGANAN/KONSULTASI -->
          <p>
          1. Jika berhenti berlangganan sebelum masa berlangganan 12 bulan, maka akan dikenakan penalty Rp 1.000.000,-<br><br>
          2. Jika berhenti berlangganan, maka jaringan akan dipergunakan untuk melayani Pasang Baru di tempat lain, sehingga apabila Anda ingin mengajukan pemasangan kembali belum tentu bisa langsung dilayani.<br><br>
          3. Indihome adalah layanan pasca bayar, sehingga jika berhenti berlangganan maka pelanggan harus melunasi tagihan bulan ini (yang merupakan biaya pemakaian / berlangganan bulan lalu) dan membayar uang titipan untuk tagihan bulan depan (yang merupakan biaya pemakaian / berlangganan bulan ini).<br><br>
          4. Jika dikemudian hari ingin Pasang Baru IndiHome Kembali, dikenakan Biaya sebesar Rp 500.000,- (ketentuan saat ini)<br><br>
          5. Plasa Telkom bisa memberikan solusi tarif menarik yang sesuai dengan kebtuhan Anda<br><br>
          6. Ada paket isolir sementara, dengan tagihan jaringan per bulan sebesar Rp 25.000,-<br><br>
          7. Ada paket IndiHome Quota<br><br>
          8. Ada paket IndiHome Prepaid<br><br>
          </p>
      </div> <br>
      <div class="row sm ">
        <div class="col-sm-5 ">
          <input type="submit" class="btn bg-secondary text-white" name="status_pilihan_plggn" value="Batal Berhenti Berlangganan" />
        </div>
      </div>
      <br>
      <div class="row sm ">
        <div class="col-sm-5 ">
          <input type="submit" class="btn bg-primary text-white" name="status_pilihan_plggn" value="Tetap Berhenti Berlangganan" />
          </div>
      </div>
      <br>
      <div class="row sm ">
        <div class="col-sm-5 ">
          <input type="submit" class="btn bg-success text-white" name="status_pilihan_plggn" value="Konsultasi ke CSR" />
          </div>
      </div>
  </fieldset>
`);


var radio_profile_a1 = '';
var radio_profile_a2 = '';
var radio_profile_a3 = '';
var radio_profile_a4 = '';
var radio_profile_a5 = '';
var radio_profile_a6 = '';
var profile_a6_lainnya = '';
var profile_b5_lainnya = '';
var radio_profile_b5 = '';
var radio_profile_b4 = '';
var radio_profile_b3 = '';
var radio_profile_b2 = '';
var radio_profile_b1 = '';
var radio_profile_c3 = '';
var profile_c2 = '';
var radio_profile_c1 = '';
var radio_profile_d3 = '';
var radio_profile_d2 = '';
var radio_profile_d1 = '';
var profile_d1_lainnya = '';
var radio_profile_e3 = '';
var radio_profile_e2 = '';
var radio_profile_e1 = '';
var radio_profile_f2 = '';
var radio_profile_f1 = '';
var profile_g2 = '';
var profile_g1 = '';
$(document).ready(function(){
// CEK ISIAN FORM A..G
$('#cekIsianA').click(function(){
  $('#isianDataProfile').empty();
  radio_profile_a1 = $('input[name="radio_profile_a1"]:checked').val();
  radio_profile_a2 = $('input[name="radio_profile_a2"]:checked').val();
  radio_profile_a3 = $('input[name="radio_profile_a3"]:checked').val();
  radio_profile_a4 = $('input[name="radio_profile_a4"]:checked').val();
  radio_profile_a5 = $('input[name="radio_profile_a5"]:checked').val();
  radio_profile_a6 = $('input[name="radio_profile_a6"]:checked').val();
  profile_a6_lainnya = $('.profile_a6_lainnya').val();

  $('#isianDataProfile').append(`
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Frekuensi / intensitas terjadinya gangguan:
      </div>
      <div class="col-sm-6">
      `+radio_profile_a1+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Waktu gangguan terakhir:
      </div>
      <div class="col-sm-6">
      `+radio_profile_a2+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Media melaporkan gangguan:
      </div>
      <div class="col-sm-6">
      `+radio_profile_a3+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Jumlah orang yang biasa menggunakan IndiHome:
      </div>
      <div class="col-sm-6">
      `+radio_profile_a4+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Jumlah perangkat / gadget yang terhubung ke IndiHome:
      </div>
      <div class="col-sm-6">
      `+radio_profile_a5+`
      </div>
    </div>
    `);
    if(radio_profile_a6 === 'Lainnya'){
      $('#isianDataProfile').append(`
        <div class="row sm-12">
          <div class="col-sm-6 text-muted">
            Rencana penggunaan internet selanjutnya menggunakan:
          </div>
          <div class="col-sm-6">
          `+profile_a6_lainnya+`
          </div>
        </div>
        `);
    }
    if(radio_profile_a6 !== 'Lainnya'){
      $('#isianDataProfile').append(`
        <div class="row sm-12">
          <div class="col-sm-6 text-muted">
            Rencana penggunaan internet selanjutnya menggunakan:
          </div>
          <div class="col-sm-6">
          `+radio_profile_a6+`
          </div>
        </div>
        `);
    }
});
$('#cekIsianB').click(function(){
$('#isianDataProfile').empty();
profile_b5_lainnya = $('.profile_b5_lainnya').val();
radio_profile_b5 = $('input[name="radio_profile_b5"]:checked').val();
radio_profile_b4 = $('input[name="radio_profile_b4"]:checked').val();
radio_profile_b3 = $('input[name="radio_profile_b3"]:checked').val();
radio_profile_b2 = $('input[name="radio_profile_b2"]:checked').val();
radio_profile_b1 = $('input[name="radio_profile_b1"]:checked').val();

$('#isianDataProfile').append(`
  <div class="row sm-12">
    <div class="col-sm-6 text-muted">
       Berapa seharusnya tarif internet yang wajar?
    </div>
    <div class="col-sm-6">
    `+radio_profile_b1+`
    </div>
  </div>
  <div class="row sm-12">
    <div class="col-sm-6 text-muted">
       Berapa kecepatan internet yang diperlukan?
    </div>
    <div class="col-sm-6">
    `+radio_profile_b2+`
    </div>
  </div>
  <div class="row sm-12">
    <div class="col-sm-6 text-muted">
       Jumlah orang yang biasa menggunakan indihome:
    </div>
    <div class="col-sm-6">
    `+radio_profile_b3+`
    </div>
  </div>
  <div class="row sm-12">
    <div class="col-sm-6 text-muted">
       Jumlah perangkat / gadget yang terhubung ke indihome:
    </div>
    <div class="col-sm-6">
    `+radio_profile_b4+`
    </div>
  </div>
`);
if(radio_profile_b5 === 'Lainnya'){
  $('#isianDataProfile').append(`
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Rencana penggunaan internet selanjutnya menggunakan:
      </div>
      <div class="col-sm-6">
      `+profile_b5_lainnya+`
      </div>
    </div>
    `);
}
if(radio_profile_b5 !== 'Lainnya'){
  $('#isianDataProfile').append(`
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Rencana penggunaan internet selanjutnya menggunakan:
      </div>
      <div class="col-sm-6">
      `+radio_profile_b5+`
      </div>
    </div>
    `);
}
});
$('#cekIsianC').click(function(){
$('#isianDataProfile').empty();
radio_profile_c3 = $('input[name="radio_profile_c3"]:checked').val();
profile_c2 = $('.profile_c2').val();
radio_profile_c1 = $('input[name="radio_profile_c1"]:checked').val();

$('#isianDataProfile').append(`
  <div class="row sm-12">
    <div class="col-sm-6 text-muted">
      Pindah karena:
    </div>
    <div class="col-sm-6">
    `+radio_profile_c1+`
    </div>
  </div>
  <div class="row sm-12">
    <div class="col-sm-6 text-muted">
      Alamat baru:
    </div>
    <div class="col-sm-6">
    `+profile_c2+`
    </div>
  </div>
  <div class="row sm-12">
    <div class="col-sm-6 text-muted">
    Rencana penggunaan internet di alamat baru :
    </div>
    <div class="col-sm-6">
    `+radio_profile_c3+`
    </div>
  </div>
  `);
});
$('#cekIsianD').click(function(){
  $('#isianDataProfile').empty();
  radio_profile_d3 = $('input[name="radio_profile_d3"]:checked').val();
  radio_profile_d2 = $('input[name="radio_profile_d2"]:checked').val();
  radio_profile_d1 = $('input[name="radio_profile_d1"]:checked').val();

  $('#isianDataProfile').append(`
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Operator yang digunakan :
      </div>
      <div class="col-sm-6">
      `+radio_profile_d1+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Paket operator yang digunakan :
      </div>
      <div class="col-sm-6">
      `+radio_profile_d2+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
      Alasan pindah operator :
      </div>
      <div class="col-sm-6">
      `+radio_profile_d3+`
      </div>
    </div>
    `);
});
$('#cekIsianE').click(function(){
  $('#isianDataProfile').empty();
  radio_profile_e3 = $('input[name="radio_profile_e3"]:checked').val();
  radio_profile_e2 = $('input[name="radio_profile_e2"]:checked').val();
  radio_profile_e1 = $('input[name="radio_profile_e1"]:checked').val();

  $('#isianDataProfile').append(`
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
         Jenis musibah :
      </div>
      <div class="col-sm-6">
      `+radio_profile_e1+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Sebelumnya, berapa jumlah orang yang biasa menggunakan indihome :
      </div>
      <div class="col-sm-6">
      `+radio_profile_e2+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
       Sebelumnya, berapa jumlah perangkat / gadget yang terhubung ke indihome :
      </div>
      <div class="col-sm-6">
      `+radio_profile_e3+`
      </div>
    </div>
    `);
});
$('#cekIsianF').click(function(){
  $('#isianDataProfile').empty();
  radio_profile_f2 = $('input[name="radio_profile_f2"]:checked').val();
  radio_profile_f1 = $('input[name="radio_profile_f1"]:checked').val();

  $('#isianDataProfile').append(`
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
          Sebelumnya yang biasa menggunakan IndiHome adalah :
      </div>
      <div class="col-sm-6">
      `+radio_profile_f1+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
         Kondisi saat ini yang biasa menggunakan IndiHome :
      </div>
      <div class="col-sm-6">
      `+radio_profile_f2+`
      </div>
    </div>
    `);
});
$('#cekIsianG').click(function(){
  $('#isianDataProfile').empty();
  profile_g2 = $('.profile_g2').val();
  profile_g1 = $('.profile_g1').val();

  $('#isianDataProfile').append(`
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
        Alasan keiinginan Cabut:
      </div>
      <div class="col-sm-6">
      `+profile_g1+`
      </div>
    </div>
    <div class="row sm-12">
      <div class="col-sm-6 text-muted">
          Harapan untuk tetap berlangganan :
      </div>
      <div class="col-sm-6">
      `+profile_g2+`
      </div>
    </div>
    `);
});



// BUTON ACTION KEMBALI & LANJUT
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

  // $(".submit").click(function(){
  //   return false;
  // })

});
</script>
@endsection
