@extends('layout.app')
@section('styles')
@endsection
@section('content')
<div class="container" style="padding:3%;">
  <div class="row">
    <div class="col-lg-5 mx-auto">
      <div class="card">
        <div class="card-header text-center">
          <h5>Form Pengajuan Berhenti Berlangganan</h5>
        </div>
        <div class="card-body">
          <form>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <input type="email" placeholder="Password Plasa" class="form-control" id="inputEmail3">
                </div>
              </div>
              <div class="row mb-3">
                <div class="input-group mb-2">
                    <span class="input-group-text" id="basic-addon1">A - </span>
                    <input type="text" class="form-control" placeholder="Nomor Antrian" aria-label="nomor_antrian" aria-describedby="basic-addon1">
                </div>
              </div>
              <br>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label"></label>
                <div class="col-sm-6">
                  <button style="width:100px" type="submit" class="btn btn-primary">Login</button>
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
@endsection
