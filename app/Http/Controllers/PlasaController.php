<?php

namespace App\Http\Controllers;

use App\Models\Plasa;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlasaController extends Controller
{
    public function show()
    {
      return view('/');
    }

    public function login(LoginRequest $request)
    {
      $credentials = $request->getCredentials();

          if(!Auth::validate($credentials)):
              return redirect()->to('/')
              ->withErrors(trans('auth.failed'));
          endif;

      $user = Auth::getProvider()->retrieveByCredentials($credentials);

      Auth::login($user);

      return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user) 
    {
      return redirect()->intended();
    }
}
