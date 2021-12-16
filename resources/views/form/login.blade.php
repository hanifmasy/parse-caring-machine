@extends('layout.app')
@section('styles')
@endsection
@section('content')
<div class="container" style="padding:3%;">
  <div class="row">
    <div class="col-lg-5 mx-auto">
      <div class="card">
        <div class="card-header text-center">
          <img src="{{ asset('public/img/simbol.png') }}" width="210" height="auto">
        </div>
        <div class="card-body">
          <div class="card-title text-center">
            <h5>Form Pengajuan Berhenti Berlangganan</h5>
          </div>
          <hr/>
          <div class="card-text text-center">
            <b>Petunjuk:</b><br> Dapatkan password plasa dari petugas plasa di tempat. Kemudian silahkan isi password pada form login ini.
          </div>
          <br><br>
          <form action="{{ route('caring.form') }}" method="POST">
            @csrf
              <div class="row mb-3">
                <div class="col-sm-12">
                  <input id="inputPasswordPlasa" name="passwd_plasa" required type="text" placeholder="Password Plasa" class="form-control">
                </div>
              </div>
              <br>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-6">
                  <button id="btnLogin" style="width:100px" type="submit" class="btn btn-primary">Login</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  $(document).ready(function(){
    $("#inputPasswordPlasa").val('');
    $("#inputNomorAntrian").val('');
  });
</script>
@endsection
