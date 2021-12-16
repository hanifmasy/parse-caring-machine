<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaringFormController extends Controller
{
    public function index(){
      return view('form.caring');
    }
}
