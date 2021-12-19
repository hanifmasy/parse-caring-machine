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
            <b>Petunjuk:</b><br> Dapatkan nomor antrian dari mesin antrian Plasa Telkom di tempat.
          </div>
          <br><br>
          <form action="{{ route('caring.form.one') }}" method="POST">
            @csrf
              <div class="row sm-12 mx-auto">
                <div class="col-sm-8 mx-auto text-center align-items-center">
                    @isset($result)
                        @foreach($result as $val)
                            <p class="text-muted">Plasa :<br><b>{{ $val->nama_plasa ?? '' }}</b></p><input style="display:none;border:none;margin-left:7%;margin-right:5%;" id="plasa_id" name="plasa_id" type="text" value="{{ $val->id ?? '' }}" readonly>
                        @endforeach
                    @endisset
                </div>
              </div>
              <br><br>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">A</span>
                    <input required id="inputNomorAntrian" name="no_antrian" type="text" class="form-control" placeholder="Nomor Antrian Anda" aria-label="no_antrian" aria-describedby="basic-addon1">
                    <button id="btnLanjut" style="width:100px" type="submit" class="btn btn-primary">Lanjut</button>
                  </div>
                </div>
              </div>
              <br>
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
    $('#inputNomorAntrian').val('');
  });
</script>
@endsection
