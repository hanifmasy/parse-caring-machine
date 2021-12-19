<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaringFormController extends Controller
{
    public function index(Request $request){
      $passwd_plasa = 'plasatelkombalikpapan';
      if($request->passwd_plasa){ $passwd_plasa = $request->passwd_plasa; }

      $query = DB::connection('pgsql')->table('plasa')->select('*');
      if($passwd_plasa != ''){ $query->where('passwd_plasa',$passwd_plasa); }

      $result = $query->get();

      if(!$result->isEmpty()) {
          return view('form.antrian',['result'=>$result]);
      }
      if($result->isEmpty()){
          $message = 'Password Plasa Salah';
          return view('form.login',compact('message'));
      }
    }

    public function formCaring1(Request $request){
      $plasa_id = '1';
      $no_antrian = '01';
      if($request->plasa_id){ $plasa_id = $request->plasa_id; }
      if($request->no_antrian){ $no_antrian = $request->no_antrian; }
      $values = array(
        'tipe_antrian'=>'A',
        'no_antrian'=>$no_antrian,
        'created_at'=>now(),
        'updated_at'=>now(),
        'plasa_id'=>$plasa_id,
      );
      DB::connection('pgsql')->table('antrian')->insert($values);

      $result = DB::connection('pgsql')->table('antrian as a')
      ->leftJoin('plasa as p',DB::raw("a.plasa_id::BIGINT"),'=','p.id')
      ->select('a.*','p.nama_plasa')
      ->where('no_antrian',$no_antrian)
      ->orderBy('a.created_at','DESC')
      ->first();

      // dd($result);

      return view('form.form1',compact('result'));
    }

    public function formCaring2(Request $request){
      // dd($request);
      $antrian_id = '';
      $plasa_id = '';
      $no_antrian = '';
      $nama_plasa = '';
      $tipe_antrian = '';
      $nama_plggn = '';
      $no_ktp = '';
      $alamat = '';
      $no_indihome = '';
      $tagihan_indihome = '';
      $radio_satu_no6 = '';
      $radio_satu_no7 = '';
      $pemohon_lainnya_no7 = '';
      $radio_satu_no8 = '';
      $radioDataProfile = '';
      $profile_lainnya = '';
      if($request->antrian_id){ $antrian_id = $request->antrian_id; }
      if($request->plasa_id){ $plasa_id = $request->plasa_id; }
      if($request->no_antrian){ $no_antrian = $request->no_antrian; }
      if($request->nama_plasa){ $nama_plasa = $request->nama_plasa; }
      if($request->tipe_antrian){ $tipe_antrian = $request->tipe_antrian; }
      if($request->nama_plggn){ $nama_plggn = $request->nama_plggn; }
      if($request->no_ktp){ $no_ktp = $request->no_ktp; }
      if($request->alamat){ $alamat = $request->alamat; }
      if($request->no_indihome){ $no_indihome = $request->no_indihome; }
      if($request->tagihan_indihome){ $tagihan_indihome = $request->tagihan_indihome; }
      if($request->radio_satu_no6){ $radio_satu_no6 = $request->radio_satu_no6; }
      if($request->radio_satu_no7){ $radio_satu_no7 = $request->radio_satu_no7; }
      if($request->pemohon_lainnya_no7){ $pemohon_lainnya_no7 = $request->pemohon_lainnya_no7; }
      if($request->radio_satu_no8){ $radio_satu_no8 = $request->radio_satu_no8; }
      if($request->radioDataProfile){ $radioDataProfile = $request->radioDataProfile; }
      if($request->profile_lainnya){ $profile_lainnya = $request->profile_lainnya; }

      $values = array(
        'antrian_id'=> $antrian_id,
        'plasa_id'=> $plasa_id,
        'no_antrian' => $no_antrian,
        'nama_plasa' => $nama_plasa,
        'tipe_antrian' => $tipe_antrian,
        'nama_plggn' => $nama_plggn,
        'no_ktp' => $no_ktp,
        'alamat'=> $alamat,
        'no_indihome' => $no_indihome,
        'tagihan_indihome' => $tagihan_indihome,
        'radio_satu_no6' => $radio_satu_no6,
        'radio_satu_no7'=> $radio_satu_no7,
        'pemohon_lainnya_no7'=> $pemohon_lainnya_no7,
        'radio_satu_no8' => $radio_satu_no8,
        'radiodataprofile'=> $radioDataProfile,
        'profile_lainnya' => $profile_lainnya,
        'created_at'=>now(),
        'updated_at'=>now(),
      );
      DB::connection('pgsql')->table('forms')->insert($values);

      $result = DB::connection('pgsql')->table('forms')->select('*')
      ->where('antrian_id',$antrian_id)->where('no_antrian',$no_antrian)
      ->where(DB::raw("TO_CHAR(created_at,'DD-MM-YYYY'::TEXT)"),'=',DB::raw("TO_CHAR(NOW(),'DD-MM-YYYY'::TEXT)"))
      ->orderBy('created_at','DESC')
      ->first();

      // dd($result);
      return view('form.form2',compact('result'));
    }

    public function formCaringSubmit(Request $request){
      // dd($request);
      $form_id = '';
      $radiodataprofile = '';
      $status_pilihan_plggn = '';

      $radio_profile_a1 = '';
      $radio_profile_a2 = '';
      $radio_profile_a3 = '';
      $radio_profile_a4 = '';
      $radio_profile_a5 = '';
      $radio_profile_a6 = '';
      $profile_a6_lainnya = '';
      $profile_b5_lainnya = '';
      $radio_profile_b5 = '';
      $radio_profile_b4 = '';
      $radio_profile_b3 = '';
      $radio_profile_b2 = '';
      $radio_profile_b1 = '';
      $radio_profile_c3 = '';
      $profile_c2 = '';
      $radio_profile_c1 = '';
      $radio_profile_d3 = '';
      $radio_profile_d2 = '';
      $radio_profile_d1 = '';
      $profile_d1_lainnya = '';
      $radio_profile_e3 = '';
      $radio_profile_e2 = '';
      $radio_profile_e1 = '';
      $radio_profile_f2 = '';
      $radio_profile_f1 = '';
      $profile_g2 = '';
      $profile_g1 = '';

      if($request->form_id){ $form_id = $request->form_id; }
      if($request->radiodataprofile){ $radiodataprofile = $request->radiodataprofile; }
      if($request->status_pilihan_plggn){ $status_pilihan_plggn = $request->status_pilihan_plggn; }

      if($request->radio_profile_a1){ $radio_profile_a1 = $request->radio_profile_a1; }
      if($request->radio_profile_a2){ $radio_profile_a2 = $request->radio_profile_a2; }
      if($request->radio_profile_a3){ $radio_profile_a3 = $request->radio_profile_a3; }
      if($request->radio_profile_a4){ $radio_profile_a4 = $request->radio_profile_a4; }
      if($request->radio_profile_a5){ $radio_profile_a5 = $request->radio_profile_a5; }
      if($request->radio_profile_a6){ $radio_profile_a6 = $request->radio_profile_a6; }
      if($request->profile_a6_lainnya){ $profile_a6_lainnya = $request->profile_a6_lainnya; }

      if($request->profile_b5_lainnya){ $profile_b5_lainnya = $request->profile_b5_lainnya; }
      if($request->radio_profile_b5){ $radio_profile_b5 = $request->radio_profile_b5; }
      if($request->radio_profile_b4){ $radio_profile_b4 = $request->radio_profile_b4; }
      if($request->radio_profile_b3){ $radio_profile_b3 = $request->radio_profile_b3; }
      if($request->radio_profile_b2){ $radio_profile_b2 = $request->radio_profile_b2; }
      if($request->radio_profile_b1){ $radio_profile_b1 = $request->radio_profile_b1; }

      if($request->radio_profile_c3){ $radio_profile_c3 = $request->radio_profile_c3; }
      if($request->profile_c2){ $profile_c2 = $request->profile_c2; }
      if($request->radio_profile_c1){ $radio_profile_c1 = $request->radio_profile_c1; }

      if($request->radio_profile_d3){ $radio_profile_d3 = $request->radio_profile_d3; }
      if($request->radio_profile_d2){ $radio_profile_d2 = $request->radio_profile_d2; }
      if($request->radio_profile_d1){ $radio_profile_d1 = $request->radio_profile_d1; }
      if($request->profile_d1_lainnya){ $profile_d1_lainnya = $request->profile_d1_lainnya; }

      if($request->radio_profile_e3){ $radio_profile_e3 = $request->radio_profile_e3; }
      if($request->radio_profile_e2){ $radio_profile_e2 = $request->radio_profile_e2; }
      if($request->radio_profile_e1){ $radio_profile_e1 = $request->radio_profile_e1; }

      if($request->radio_profile_f2){ $radio_profile_f2 = $request->radio_profile_f2; }
      if($request->radio_profile_f1){ $radio_profile_f1 = $request->radio_profile_f1; }

      if($request->profile_g2){ $profile_g2 = $request->profile_g2; }
      if($request->profile_g1){ $profile_g1 = $request->profile_g1; }

      if($radiodataprofile == 'jawabA'){
        DB::connection('pgsql')->table('forms')->where('id',$form_id)->update([
        'radio_profile_a1'=>$radio_profile_a1,
        'radio_profile_a2'=>$radio_profile_a2,
        'radio_profile_a3'=>$radio_profile_a3,
        'radio_profile_a4'=>$radio_profile_a4,
        'radio_profile_a5'=>$radio_profile_a5,
        'radio_profile_a6'=>$radio_profile_a6,
        'profile_a6_lainnya'=>$profile_a6_lainnya,
        'updated_at'=>now(),
        'status_pilihan_plggn'=>$status_pilihan_plggn,
        ]);
      }
      if($radiodataprofile == 'jawabB'){
        DB::connection('pgsql')->table('forms')->where('id',$form_id)->update([
          'profile_b5_lainnya'=>$profile_b5_lainnya,
          'radio_profile_b5'=>$radio_profile_b5,
          'radio_profile_b4'=>$radio_profile_b4,
          'radio_profile_b3'=>$radio_profile_b3,
          'radio_profile_b2'=>$radio_profile_b2,
          'radio_profile_b1'=>$radio_profile_b1,
          'updated_at'=>now(),
          'status_pilihan_plggn'=>$status_pilihan_plggn,
      ]); }
      if($radiodataprofile == 'jawabC'){
        DB::connection('pgsql')->table('forms')->where('id',$form_id)->update([
          'radio_profile_c3'=>$radio_profile_c3,
          'profile_c2'=>$profile_c2,
          'radio_profile_c1'=>$radio_profile_c1,
          'updated_at'=>now(),
          'status_pilihan_plggn'=>$status_pilihan_plggn,
      ]); }
      if($radiodataprofile == 'jawabD'){
        DB::connection('pgsql')->table('forms')->where('id',$form_id)->update([
          'radio_profile_d3'=>$radio_profile_d3,
          'radio_profile_d2'=>$radio_profile_d2,
          'radio_profile_d1'=>$radio_profile_d1,
          'profile_d1_lainnya'=>$profile_d1_lainnya,
          'updated_at'=>now(),
          'status_pilihan_plggn'=>$status_pilihan_plggn,
      ]); }
      if($radiodataprofile == 'jawabE'){
        DB::connection('pgsql')->table('forms')->where('id',$form_id)->update([
          'radio_profile_e3'=>$radio_profile_e3,
          'radio_profile_e2'=>$radio_profile_e2,
          'radio_profile_e1'=>$radio_profile_e1,
          'updated_at'=>now(),
          'status_pilihan_plggn'=>$status_pilihan_plggn,
      ]); }
      if($radiodataprofile == 'jawabF'){
        DB::connection('pgsql')->table('forms')->where('id',$form_id)->update([
          'radio_profile_f2'=>$radio_profile_f2,
          'radio_profile_f1'=>$radio_profile_f1,
          'updated_at'=>now(),
          'status_pilihan_plggn'=>$status_pilihan_plggn,
      ]); }
      if($radiodataprofile == 'jawabG'){
        DB::connection('pgsql')->table('forms')->where('id',$form_id)->update([
          'profile_g2'=>$profile_g2,
          'profile_g1'=>$profile_g1,
          'updated_at'=>now(),
          'status_pilihan_plggn'=>$status_pilihan_plggn,
      ]); }

      $result = DB::connection('pgsql')->table('forms')->select('*')->where('id',$form_id)->get();

      // dd($result);
      return view('form.success',compact('result'));
    }
}
