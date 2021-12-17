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
          <form action="#" method="POST">
              <div class="row mb-3">
                <div class="col-sm-12 text-center align-items-center">
                  <p class="" id="plasa">
                    @isset($result)
                        @foreach($result as $val)
                            {{ $val->nama_plasa ?? '' }}
                        @endforeach
                    @endisset
                  </p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">A-</span>
                    <input id="inputNomorAntrian" type="text" class="form-control" placeholder="Nomor Antrian Anda" aria-label="no_antrian" aria-describedby="basic-addon1">
                  </div>
                </div>
              </div>
              <br>
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-6">
                  <button id="btnLanjut" style="width:100px" type="button" class="btn btn-primary">Lanjut</button>
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
    $("#inputNomorAntrian").val('');
    var plasa = $('#plasa').text();
    var no_antrian = $('#inputNomorAntrian').val();

    $('#btnLanjut').click(function(){
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
              });

          $.ajax({
              type:"POST",
              url:"{{ route('caring.form') }}",
              data : {
                plasa: plasa,
                no_antrian: no_antrian,
              },
              success: function(data) {
                  //$("#success").html('Inserted into database').delay(3000).fadeOut();
                  console.log(data)
              }
            });

    });

  });
</script>
@endsection
