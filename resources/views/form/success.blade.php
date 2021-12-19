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
      <h6 class="card-subtitle mb-2 text-muted text-center align-items-center" style="margin:5%">Respon Pengisian<br>Form Pengajuan Berhenti Berlangganan</h6>
      <div class="card-body">
        <div class="container-fluid">
            <div class="row sm-12 justify-content-center">
                <div class="col-sm-12">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                          <form id="msform">

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
$('#plasa_telkom').empty();
$('#nomor_antrian').empty();
$('#msform').empty();

var form = @json($result);
$('#plasa_telkom').append(form[0]['nama_plasa']);
$('#nomor_antrian').append(form[0]['no_antrian']);

if(form){
  $('#msform').append(`
    <fieldset>
      <div class="form-card">
        <div class="row">
          </div> <br><br>
          <h2 class="purple-text text-center"><strong>DATA FORM ANDA<br>SUDAH MASUK</strong></h2> <br>
          <div class="row justify-content-center">
            <div class="col-5"> <img src="{{ asset('public/img/check_mark.png') }}" class="fit-image"> </div>
          </div> <br><br>
          <div class="row justify-content-center">
            <div class="col-12 text-center">
              <p class="purple-text text-center">
                Anda telah mengisi<br> Form Pengajuan Berhenti Berlangganan.<br>
                Silahkan tutup tab form ini di browser Anda.<br><br>
                Kembali ke halaman <a href="{{ route('login') }}">login</a><br>
              </p>
            </div>
          </div>
        </div>
      </fieldset>
    `);
}
else {
  $('#msform').append(`
    <fieldset>
      <div class="form-card">
        <div class="row">
          </div> <br><br>
          <h2 class="purple-text text-center"><strong>MAAF<br>DATA FORM GAGAL SUBMIT</strong></h2> <br>
          <div class="row justify-content-center">
            <div class="col-5"> <img src="{{ asset('public/img/failed.png') }}" class="fit-image"> </div>
          </div> <br><br>
          <div class="row justify-content-center">
            <div class="col-12 text-center">
              <p class="purple-text text-center">
                Ulangi lagi pengisian form Anda di <a href="{{ route('login') }}">sini</a>.<br>
              </p>
            </div>
          </div>
        </div>
    </fieldset>
    `);
}
</script>
@endsection
