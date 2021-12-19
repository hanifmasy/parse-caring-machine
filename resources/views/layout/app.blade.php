<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('public/img/simbol-mini.png') }}" width="5" height="5">
    <title>Form Pengajuan Berhenti Berlangganan</title>
    <style media="screen">
    /* #btnLanjutPertanyaan {
      display: none;
    } */
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
    font-size: 5px;
    width: 25%;
    height: 5%;
    float: left;
    position: relative;
    font-weight: 400
    }

    #progressbar #nomor_1:before {
    content: "1"
    }

    #progressbar #nomor_2:before {
    content: "2"
    }

    #progressbar #nomor_3:before {
    content: "3"
    }

    #progressbar #nomor_4:before {
    content: "4"
    }

    #progressbar #nomor_5:before {
    content: "5"
    }

    #progressbar #nomor_6:before {
    content: "6"
    }

    #progressbar #nomor_7:before {
    content: "7"
    }

    #progressbar #nomor_8:before {
    content: "8"
    }
    #progressbar #nomor_9:before {
    content: ""
    }
    #progressbar #nomor_10:before {
    content: ""
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
    @yield('styles')
  </head>
  <body class="bg-secondary">
    <!-- <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('public/img/simbol.png') }}" width="200" height="auto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
    <br>
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield('scripts')
  </body>
</html>
