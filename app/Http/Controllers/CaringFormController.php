<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaringFormController extends Controller
{
    public function index(Request $request){
      // dd($request->all());
      $passwd_plasa = '';
      if($request->passwd_plasa){ $passwd_plasa = $request->passwd_plasa; }
      return view('form.caring',compact('passwd_plasa'));
    }
}
