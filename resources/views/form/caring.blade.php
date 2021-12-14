<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="icon" href="{{ asset('public/img/simbol-mini.png') }}" width="5" height="5">
        <title>Form Pengajuan Berhenti Berlangganan</title>

        <style>
        	#gridcontainer { padding: 20px; }
        	.grid-row > div {
        		padding: 10px;
        		margin: 5px 0;
        	}
          /* The Modal (background) */
          .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 40px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          }

          /* Modal Content */
          .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 10px;
            border: 1px solid #888;
            width: 80%;
          }

          /* The Close Button */
          .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            padding-bottom: 20px;
          }

          .close:hover,
          .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
          }
        </style>
    </head>
    <body class="bg-dark">
      <!-- NAVBAR -->
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-md navbar-white bg-white">
              <div class="container">
                  <img src="{{ asset('public/img/simbol.png') }}" width="200px" height="auto">
                  <h5 class="navbar-brand">Parse Caring Machine</h5>
              </div>
          </nav>
        </div>
      </div>
      <!-- CONTENT -->
      <div class="container" id="gridcontainer">
          <br>
          <div class="row grid-row">
            <div class="col-lg-9 mx-auto">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                      <h4>Form Pengajuan Berhenti Berlangganan</h4>
                  </div>
                </div>
                <div class="card-body">
                  <form action="#" method="POST">
                      <div class="row grid-row">
                        <div class="col-3">
                          <label>Plasa Telkom :</label>
                        </div>
                        <div class="col-4">
                          <input type="text" id="plasa" name="plasa">
                        </div>
                      </div>
                      <div class="row grid-row">
                        <div class="col-3">
                          <label>Witel :</label>
                        </div>
                        <div class="col-4">
                          <input type="text" id="witel" name="witel">
                        </div>
                      </div>
                      <br>
                      <div class="row grid-row">
                        <div class="col-lg-11 mx-auto">
                          <div class="card">
                            <div class="card-header">
                              <h5>I. Data Pemohon</h5>
                            </div>
                            <div class="card-body">
                              <div class="row grid-row">
                                <div class="col-sm-4">
                                  <label>1. Nama (sesuai KTP):</label>
                                </div>
                                <div class="col-sm">
                                  <input type="text" id="nama_plggn" name="nama_plggn">
                                </div>
                              </div>
                              <div class="row grid-row">
                                <div class="col-sm-4">
                                  <label>2. Nomor KTP:</label>
                                </div>
                                <div class="col-sm">
                                  <input type="text" id="no_ktp" name="no_ktp">
                                </div>
                              </div>
                              <div class="row grid-row">
                                <div class="col-sm-4">
                                  <label>3. Alamat:</label>
                                </div>
                                <div class="col-sm">
                                  <input type="text" id="alamat" name="alamat">
                                </div>
                              </div>
                              <div class="row grid-row">
                                <div class="col-sm-4">
                                  <label>4. Nomor IndiHome:</label>
                                </div>
                                <div class="col-sm">
                                  <input type="text" id="no_indihome" name="no_indihome">
                                </div>
                              </div>
                              <div class="row grid-row">
                                <div class="col-sm-4">
                                  <label>5. Tagihan IndiHome:</label>
                                </div>
                                <div class="col-sm">
                                  <input type="text" id="tagihan" name="tagihan">
                                </div>
                              </div>
                              <div class="row grid-row">
                                <div class="col-sm-4">
                                  <label>6. Paket Speed IndiHome:</label>
                                </div>
                                <div class="col-sm">
                                  <input type="radio" id="speed" name="speed" value="10M">
                                  <label>10M</label>
                                  <input type="radio" id="speed" name="speed" value="20M">
                                  <label>20M</label>
                                  <input type="radio" id="speed" name="speed" value="30M">
                                  <label>30M</label>
                                  <input type="radio" id="speed" name="speed" value="40M">
                                  <label>40M</label>
                                  <input type="radio" id="speed" name="speed" value="50M">
                                  <label>50M</label>
                                  <input type="radio" id="speed" name="speed" value="100M">
                                  <label>100M</label>
                                </div>
                              </div>
                              <br>
                              <div class="row grid-row">
                                <div class="col-sm-7">
                                  <label>7. Hubungan pemohon dengan nomor IndiHome:</label>
                                </div>
                                <br>
                                <div class="row grid-row">
                                  <div class="row-sm">
                                    <div class="col-sm">
                                      <input type="radio" id="hub_pemohon" name="hub_pemohon" value="pemilik">
                                      <label>Pemilik</label>
                                      <input type="radio" id="hub_pemohon" name="hub_pemohon" value="suami_istri">
                                      <label>Suami/Istri</label>
                                      <input type="radio" id="hub_pemohon" name="hub_pemohon" value="keluarga">
                                      <label>Keluarga</label>
                                      <input type="radio" id="hub_pemohon" name="hub_pemohon" value="karyawan">
                                      <label>Karyawan</label>
                                      <input type="radio" id="hub_pemohon" name="hub_pemohon" value="pengontrak">
                                      <label>Pengontrak</label>
                                    </div>
                                  </div>
                                  <div class="row-sm">
                                    <div class="col-sm">
                                      <input type="radio" id="hub_pemohon" name="hub_pemohon" value="lainnya">
                                      <label>Lainnya :</label>
                                      <input type="text" id="keterangan_lainnya" name="keterangan_lainnya">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row grid-row">
                                <div class="col-sm-10">
                                  <label>8. Alasan mengajukan berhenti berlangganan <i>(diambil dari myCX)</i> :</label>
                                </div>
                                <div class="row grid-row">
                                  <div class="row-sm">
                                      <input type="checkbox" id="alasan1" name="alasan1" value="alasan1">
                                      <label>Efisiensi Harga Mahal</label><br>
                                      <input type="checkbox" id="alasan2" name="alasan2" value="alasan2">
                                      <label>Efisiensi Tutup Usaha</label><br>
                                      <input type="checkbox" id="alasan3" name="alasan3" value="alasan3">
                                      <label>Layanan Sering Gangguan</label><br>
                                      <input type="checkbox" id="alasan4" name="alasan4" value="alasan4">
                                      <label>Perbaikan Gangguan Lama</label><br>
                                      <input type="checkbox" id="alasan5" name="alasan5" value="alasan5">
                                      <label>Pindah Provider Lain</label><br>
                                      <input type="checkbox" id="alasan6" name="alasan6" value="alasan6">
                                      <label>Sudah Punya IndiHome Baru</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row grid-row">
                        <div class="col-lg-11 mx-auto">
                          <div class="card">
                            <div class="card-header">
                              <h5>II. Data Profile</h5>
                            </div>
                            <div class="card-body">
                              <div class="row-sm">
                                <div class="col-sm-4">
                                  <input type="radio" id="data_profile1" name="data_profile" value="profile1">
                                  <label>A. Sering gangguan</label>
                                </div>
                                <div class="col-sm-4">
                                  <input type="radio" id="data_profile2" name="data_profile" value="profile2">
                                  <label>B. Terlalu mahal</label>
                                </div>
                                <div class="col-sm-4">
                                  <input type="radio" id="data_profile3" name="data_profile" value="profile3">
                                  <label>C. Pindah Alamat</label>
                                </div>
                              </div>
                              <div class="row-sm">
                                <div class="col-sm-4">
                                  <input type="radio" id="data_profile4" name="data_profile" value="profile4">
                                  <label>D. Ganti operator</label>
                                </div>
                                <div class="col-sm-4">
                                  <input type="radio" id="data_profile5" name="data_profile" value="profile5">
                                  <label>E. Musibah</label>
                                </div>
                                <div class="col-sm-6">
                                  <input type="radio" id="data_profile6" name="data_profile" value="profile6">
                                  <label>F. Tidak ada yang menggunakan</label>
                                </div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col-lg-12">
                                  <hr/>
                                  <div id="dataprofile_bagA">
                                    <b>Profile A</b><br><br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>1. Frekuensi / Intensitas terjadinya gangguan :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_A_1" name="profile_A_1" value="jawab1">
                                          <label>1-3 kali</label>
                                          <input type="radio" id="profile_A_1" name="profile_A_1" value="jawab2">
                                          <label>4-6 kali</label>
                                          <input type="radio" id="profile_A_1" name="profile_A_1" value="jawab3">
                                          <label>7-10 kali</label>
                                          <input type="radio" id="profile_A_1" name="profile_A_1" value="jawab4">
                                          <label>Lebih dari 10</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>2. Waktu gangguan terakhir :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_A_2" name="profile_A_2" value="jawab1">
                                          <label>1-7 hari lalu</label>
                                          <input type="radio" id="profile_A_2" name="profile_A_2" value="jawab2">
                                          <label>8-15 hari lalu</label>
                                          <input type="radio" id="profile_A_2" name="profile_A_2" value="jawab3">
                                          <label>16-30 hari lalu</label>
                                          <input type="radio" id="profile_A_2" name="profile_A_2" value="jawab4">
                                          <label>Lebih dari sebulan lalu</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>3. Media melaporkan gangguan :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_A_3" name="profile_A_3" value="jawab1">
                                          <label>Aplikasi myIndiHome</label>
                                          <input type="radio" id="profile_A_3" name="profile_A_3" value="jawab2">
                                          <label>Call Center 147</label>
                                          <input type="radio" id="profile_A_3" name="profile_A_3" value="jawab3">
                                          <label>Plasa Telkom</label>
                                          <br>
                                          <input type="radio" id="profile_A_3" name="profile_A_3" value="jawab4">
                                          <label>Sosial media @indihomecare</label>
                                          <input type="radio" id="profile_A_3" name="profile_A_3" value="jawab5">
                                          <label>Teknisi</label>
                                          <input type="radio" id="profile_A_3" name="profile_A_3" value="jawab6">
                                          <label>Sales</label>
                                          <input type="radio" id="profile_A_3" name="profile_A_3" value="jawab7">
                                          <label>Teman</label>
                                          <input type="radio" id="profile_A_3" name="profile_A_3" value="jawab8">
                                          <label>WhatsApp</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>4. Jumlah orang yang biasa menggunakan indihome :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_A_4" name="profile_A_4" value="jawab1">
                                          <label>1-3 orang</label>
                                          <input type="radio" id="profile_A_4" name="profile_A_4" value="jawab2">
                                          <label>4-6 orang</label>
                                          <input type="radio" id="profile_A_4" name="profile_A_4" value="jawab3">
                                          <label>7-10 orang</label>
                                          <input type="radio" id="profile_A_4" name="profile_A_4" value="jawab4">
                                          <label>Lebih dari 10 orang</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>5. Jumlah perangkat / gadget yang terhubung ke indihome :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_A_5" name="profile_A_5" value="jawab1">
                                          <label>1-3 perangkat</label>
                                          <input type="radio" id="profile_A_5" name="profile_A_5" value="jawab2">
                                          <label>4-6 perangkat</label>
                                          <input type="radio" id="profile_A_5" name="profile_A_5" value="jawab3">
                                          <label>7-10 perangkat</label>
                                          <input type="radio" id="profile_A_5" name="profile_A_5" value="jawab4">
                                          <label>Lebih dari 10 perangkat</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>6. Rencana penggunaan internet selanjutnya menggunakan :</label>
                                      </div>
                                      <div class="row-sm">
                                        <div class="col-sm-8">
                                          <input type="radio" id="profile_A_6" name="profile_A_6" value="jawab1">
                                          <label>Paket data HP</label>
                                          <input style="margin-left:5px" type="radio" id="profile_A_6" name="profile_A_6" value="jawab2">
                                          <img width="100" height="50" src="{{ asset('public/img/iconnet_logo.jpeg') }}" alt="">
                                          <input style="margin-left:5px" type="radio" id="profile_A_6" name="profile_A_6" value="jawab3">
                                          <img width="100" height="25" src="{{ asset('public/img/mncplay_logo.png') }}" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                          <input type="radio" id="profile_A_6" name="profile_A_6" value="jawab4">
                                          <img width="100" height="50" src="{{ asset('public/img/xlhome_logo.png') }}" alt="">
                                          <input style="margin-left:5px" type="radio" id="profile_A_6" name="profile_A_6" value="jawab5">
                                          <img width="100" height="40" src="{{ asset('public/img/biznet_logo.png') }}" alt="">
                                          <input style="margin-left:5px" type="radio" id="profile_A_6" name="profile_A_6" value="jawab6">
                                          <img width="100" height="20" src="{{ asset('public/img/myrepublic_logo.png') }}" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                          <input type="radio" id="profile_A_6" name="profile_A_6" value="jawab7">
                                          <img width="80" height="30" src="{{ asset('public/img/firstmedia_logo.png') }}" alt="">
                                        </div>
                                        <div class="col-sm-5">
                                          <input type="radio" id="profile_A_6" name="profile_A_6" value="jawab8">
                                          <label>Lainnya :</label>
                                          <input type="text" id="profile_A_6_lainnya" name="profile_A_6_lainnya">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="dataprofile_bagB">
                                    <b>Profile B</b><br><br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>1. Frekuensi / Intensitas terjadinya gangguan :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_B_1" name="profile_B_1" value="jawab1">
                                          <label>100-150 ribu</label>
                                          <input type="radio" id="profile_B_1" name="profile_B_1" value="jawab2">
                                          <label>150-250 ribu</label>
                                          <input type="radio" id="profile_B_1" name="profile_B_1" value="jawab3">
                                          <label>250-400 ribu</label>
                                          <input type="radio" id="profile_B_1" name="profile_B_1" value="jawab4">
                                          <label>400-700 ribu</label>
                                          <input type="radio" id="profile_B_1" name="profile_B_1" value="jawab5">
                                          <label>700-1.500 ribu</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>2. Berapa kecepatan internet yang diperlukan :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_B_2" name="profile_B_2" value="jawab1">
                                          <label>10M</label>
                                          <input type="radio" id="profile_B_2" name="profile_B_2" value="jawab2">
                                          <label>20M</label>
                                          <input type="radio" id="profile_B_2" name="profile_B_2" value="jawab3">
                                          <label>30M</label>
                                          <input type="radio" id="profile_B_2" name="profile_B_2" value="jawab4">
                                          <label>40M</label>
                                          <input type="radio" id="profile_B_2" name="profile_B_2" value="jawab5">
                                          <label>50M</label>
                                          <input type="radio" id="profile_B_2" name="profile_B_2" value="jawab6">
                                          <label>100M</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>3. Jumlah orang yang biasa menggunakan indihome :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_B_3" name="profile_B_3" value="jawab1">
                                          <label>1-3 orang</label>
                                          <input type="radio" id="profile_B_3" name="profile_B_3" value="jawab2">
                                          <label>4-6 orang</label>
                                          <input type="radio" id="profile_B_3" name="profile_B_3" value="jawab3">
                                          <label>7-10 orang</label>
                                          <input type="radio" id="profile_B_3" name="profile_B_3" value="jawab4">
                                          <label>Lebih dari 10 orang</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>4. Jumlah perangkat / gadget yang terhubung ke indihome :</label>
                                      </div>
                                      <div class="row-sm-9">
                                        <div class="col-sm">
                                          <input type="radio" id="profile_B_4" name="profile_B_4" value="jawab1">
                                          <label>1-3 perangkat</label>
                                          <input type="radio" id="profile_B_4" name="profile_B_4" value="jawab2">
                                          <label>4-6 perangkat</label>
                                          <input type="radio" id="profile_B_4" name="profile_B_4" value="jawab3">
                                          <label>7-10 perangkat</label>
                                          <input type="radio" id="profile_B_4" name="profile_B_4" value="jawab4">
                                          <label>Lebih dari 10 perangkat</label>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row-md">
                                      <div class="row-sm-8">
                                        <label>5. Rencana penggunaan internet selanjutnya menggunakan :</label>
                                      </div>
                                      <div class="row-sm">
                                        <div class="col-sm-8">
                                          <input type="radio" id="profile_B_5" name="profile_B_5" value="jawab1">
                                          <label>Paket data HP</label>
                                          <input style="margin-left:5px" type="radio" id="profile_B_5" name="profile_B_5" value="jawab2">
                                          <img width="100" height="50" src="{{ asset('public/img/iconnet_logo.jpeg') }}" alt="">
                                          <input style="margin-left:5px" type="radio" id="profile_B_5" name="profile_B_5" value="jawab3">
                                          <img width="100" height="25" src="{{ asset('public/img/mncplay_logo.png') }}" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                          <input type="radio" id="profile_B_5" name="profile_B_5" value="jawab4">
                                          <img width="100" height="50" src="{{ asset('public/img/xlhome_logo.png') }}" alt="">
                                          <input style="margin-left:5px" type="radio" id="profile_B_5" name="profile_B_5" value="jawab5">
                                          <img width="100" height="40" src="{{ asset('public/img/biznet_logo.png') }}" alt="">
                                          <input style="margin-left:5px" type="radio" id="profile_B_5" name="profile_B_5" value="jawab6">
                                          <img width="100" height="20" src="{{ asset('public/img/myrepublic_logo.png') }}" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                          <input type="radio" id="profile_B_5" name="profile_B_5" value="jawab7">
                                          <img width="80" height="30" src="{{ asset('public/img/firstmedia_logo.png') }}" alt="">
                                        </div>
                                        <div class="col-sm-5">
                                          <input type="radio" id="profile_B_5" name="profile_B_5" value="jawab8">
                                          <label>Lainnya :</label>
                                          <input type="text" id="profile_B_5_lainnya" name="profile_B_5_lainnya">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="dataprofile_bagC">
                                    <b>Profile C</b><br><br>
                                   <div class="row-md">
                                     <div class="row-sm-8">
                                       <label>1. Pindah karena :</label>
                                     </div>
                                     <div class="row-sm-9">
                                       <div class="col-sm">
                                         <input type="radio" id="profile_C_1" name="profile_C_1" value="jawab1">
                                         <label>Rumah Baru</label>
                                         <input type="radio" id="profile_C_1" name="profile_C_1" value="jawab2">
                                         <label>Kontrakan Habis</label>
                                         <input type="radio" id="profile_C_1" name="profile_C_1" value="jawab3">
                                         <label>Pindah Kerja/Tugas</label>
                                         <input type="radio" id="profile_C_1" name="profile_C_1" value="jawab4">
                                         <label>Pulang Kampung</label>
                                       </div>
                                     </div>
                                   </div>
                                   <br>
                                   <div class="row-md">
                                     <div class="row-sm-8">
                                       <label>2. Alamat baru :</label>
                                       <input type="text" id="profile_C_2" name="profile_C_2">
                                     </div>
                                   </div>
                                   <br>
                                   <div class="row-md">
                                     <div class="row-sm-8">
                                       <label>3. Rencana penggunaan internet di alamat baru :</label>
                                     </div>
                                     <div class="row-sm">
                                       <div class="col-sm-8">
                                         <input style="margin-left:5px" type="radio" id="profile_C_3" name="profile_C_3" value="jawab1">
                                         <img width="100" height="30" src="{{ asset('public/img/indihome_logo.png') }}" alt="">
                                         <input style="margin-left:5px" type="radio" id="profile_C_3" name="profile_C_3" value="jawab2">
                                         <img width="100" height="50" src="{{ asset('public/img/iconnet_logo.jpeg') }}" alt="">
                                         <input style="margin-left:5px" type="radio" id="profile_C_3" name="profile_C_3" value="jawab3">
                                         <img width="100" height="25" src="{{ asset('public/img/mncplay_logo.png') }}" alt="">
                                       </div>
                                       <div class="col-sm-8">
                                         <input type="radio" id="profile_C_3" name="profile_C_3" value="jawab4">
                                         <img width="100" height="50" src="{{ asset('public/img/xlhome_logo.png') }}" alt="">
                                         <input style="margin-left:5px" type="radio" id="profile_C_3" name="profile_C_3" value="jawab5">
                                         <img width="100" height="40" src="{{ asset('public/img/biznet_logo.png') }}" alt="">
                                         <input style="margin-left:5px" type="radio" id="profile_C_3" name="profile_C_3" value="jawab6">
                                         <img width="100" height="20" src="{{ asset('public/img/myrepublic_logo.png') }}" alt="">
                                       </div>
                                       <div class="col-sm-8">
                                         <input type="radio" id="profile_C_3" name="profile_C_3" value="jawab7">
                                         <img width="80" height="30" src="{{ asset('public/img/firstmedia_logo.png') }}" alt="">
                                         <input type="radio" id="profile_C_3" name="profile_C_3" value="jawab8">
                                         <label>Paket data HP</label>
                                       </div>
                                     </div>
                                   </div>
                                  </div>
                                  <div id="dataprofile_bagD">
                                    <div class="row-sm">
                                      <div class="col-sm">
                                        <h6>Bagian D</h6>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="dataprofile_bagE">
                                    <div class="row-sm">
                                      <div class="col-sm">
                                        <h6>Bagian E</h6>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="dataprofile_bagF">
                                    <div class="row-sm">
                                      <div class="col-sm">
                                        <h6>Bagian F</h6>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </form>
                  <br>
                  <div class="row-md">
                    <div class="col-md-12 d-flex justify-content-center">
                      <input class="btn bg-primary text-white" style="width:150px;height:40px;" type="button" name="btnLanjut" id="btnLanjut" onclick="btnLanjut()" value="LANJUT">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="row-lg">
        <div class="col-lg-10 d-flex">
          <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="row-sm">
                      <span class="close" style="float:left;padding-right:38%;padding-bottom:10px;padding-left:8px;">&times;</span><br>
                </div>
                <br>
                <div class="row-lg grid-row">
                  <div class="col-lg-12 text-justify">
                    <p><b>Tahukah Anda bahwa : </b><br><br>
                      1. Jika berhenti berlangganan sebelum masa berlangganan 12 bulan, maka akan dikenakan penalty Rp 1.000.000,-
                      <br><br>
                      2. Jika berhenti berlangganan, maka jaringan akan dipergunakan untuk melayani Pasang Baru di tempat lain, sehingga apabila Anda ingin mengajukan pemasangan kembali belum tentu bisa langsung dilayani.
                      <br><br>
                      3. Indihome adalah layanan pasca bayar, sehingga jika berhenti berlangganan maka pelanggan harus melunasi tagihan bulan ini (yang merupakan biaya pemakaian / berlangganan bulan lalu) dan membayar uang titipan untuk tagihan bulan depan (yang merupakan biaya pemakaian / berlangganan bulan ini).
                      <br><br>
                      4. Biaya Pasang Baru IndiHome saat ini adalah Rp 500.000,-
                      <br><br>
                      5. Plasa Telkom bisa melayani Down grade paket IndiHome yang lebih rendah
                      <br><br>
                      6. Ada paket isolir sementara, dengan tagihan jaringan per bulan sebesar Rp 25.000,-
                      <br><br>
                      7. Ada paket IndiHome Quota
                      <br><br>
                      8. Ada paket IndiHome Prepaid
                    </p>
                  </div>
                </div>
                <div class="row grid-row align-item-center d-flex">
                  <div class="col-sm-4">
                    <input class="btn bg-primary text-white" type="button" name="btnBerhentiLangganan" id="btnBerhentiLangganan" onclick="btnBerhentiLangganan()" value="Tetap Berhenti Langganan">
                  </div>
                  <div class="col-sm-4">
                    <input class="btn bg-success text-white" type="button" name="btnKonsultasi" id="btnKonsultasi" onclick="btnKonsultasi()" value="Konsultasi ke CSR">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SCRIPTS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
        $(document).ready(function(){
          $("#dataprofile_bagA").hide();
          $("#dataprofile_bagB").hide();
          $("#dataprofile_bagC").hide();
          $("#dataprofile_bagD").show();
          $("#dataprofile_bagE").hide();
          $("#dataprofile_bagF").hide();
          $("#data_profile1").prop("checked",false);
          $("#data_profile2").prop("checked",false);
          $("#data_profile3").prop("checked",false);
          $("#data_profile4").prop("checked",false);
          $("#data_profile5").prop("checked",false);
          $("#data_profile6").prop("checked",false);

              $("#data_profile1").click(function () {
                $("#dataprofile_bagA").show();
                $("#dataprofile_bagB").hide();
                $("#dataprofile_bagC").hide();
                $("#dataprofile_bagD").hide();
                $("#dataprofile_bagE").hide();
                $("#dataprofile_bagF").hide();
              });
              $("#data_profile2").click(function () {
                $("#dataprofile_bagA").hide();
                $("#dataprofile_bagB").show();
                $("#dataprofile_bagC").hide();
                $("#dataprofile_bagD").hide();
                $("#dataprofile_bagE").hide();
                $("#dataprofile_bagF").hide();
              });
              $("#data_profile3").click(function () {
                $("#dataprofile_bagA").hide();
                $("#dataprofile_bagB").hide();
                $("#dataprofile_bagC").show();
                $("#dataprofile_bagD").hide();
                $("#dataprofile_bagE").hide();
                $("#dataprofile_bagF").hide();
              });
              $("#data_profile4").click(function () {
                $("#dataprofile_bagA").hide();
                $("#dataprofile_bagB").hide();
                $("#dataprofile_bagC").hide();
                $("#dataprofile_bagD").show();
                $("#dataprofile_bagE").hide();
                $("#dataprofile_bagF").hide();
              });
              $("#data_profile5").click(function () {
                $("#dataprofile_bagA").hide();
                $("#dataprofile_bagB").hide();
                $("#dataprofile_bagC").hide();
                $("#dataprofile_bagD").hide();
                $("#dataprofile_bagE").show();
                $("#dataprofile_bagF").hide();
              });
              $("#data_profile6").click(function () {
                $("#dataprofile_bagA").hide();
                $("#dataprofile_bagB").hide();
                $("#dataprofile_bagC").hide();
                $("#dataprofile_bagD").hide();
                $("#dataprofile_bagE").hide();
                $("#dataprofile_bagF").show();
              });
        });

        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
              modal.style.display = "none";
        }

        window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
        }

        function btnLanjut(){
          modal.style.display = "block";
        }
      </script>
    </body>
</html>
