<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaringFormController extends Controller
{
    public function index(Request $request){
      // dd($request->all());
      $passwd_plasa = '';
      if($request->passwd_plasa){ $passwd_plasa = $request->passwd_plasa; }

      $query = DB::connection('pgsql')->table('plasa')->select('*');
      if($passwd_plasa != ''){ $query->where('passwd_plasa',$passwd_plasa); }

      $result = $query->get();

      if($result->isEmpty()){
          $message = 'Password Plasa Salah';
          return view('form.login',compact('message'));
      }
      if(!$result->isEmpty()) {
          return view('form.antrian',['result'=>$result]);
      }
    }

    public function formCaring(Request $request){
      // data pemohon
      return view('form.form');
    }
}
