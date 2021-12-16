@extends('layout.app')
@section('styles')
@endsection
@section('content')
<div class="row lg-12">
  <div class="col-lg-7 mx-auto">
    <div class="card">
      <div class="card-header">
        <div class="row sm-12">
          <div class="col-sm-6">
            <img style="float:left" src="{{ asset('public/img/simbol.png') }}" width="180" height="auto">
          </div>
          <div class="col-sm-6">
            <h6 style="float:right;margin-top:6%">FORM PENGAJUAN BERHENTI BERLANGGANAN</h6>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="card-title">
          <div class="row sm-10">
            <div class="col-sm-5 lead">
              <p>Plasa : <strong>{{$passwd_plasa}}</strong></p>
            </div>
            <div class="col-sm-5">
              <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">A -</span>
                  <input id="inputNomorAntrian" name="no_antrian" required type="text" class="form-control" placeholder="Isilah Nomor Antrian Anda" aria-label="nomor_antrian" aria-describedby="basic-addon1">
              </div>
            </div>
          </div>
        </div>
        <hr/>
        <div class="card-text">

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
@endsection
