<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PetshopLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:petshop');
    }

    public function showLoginForm()
    {
      return view('auth.petshop-login');
    }

    public function login(Request $request)
    {
      $this->validate($request, [
        'email'     => 'required|email',
        'password'  => 'required|min:6'
      ]);

      if (Auth::guard('petshop')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {
        return redirect()->intended(route('petshop.dashboard'));
      }

      return redirect()->back()->withInput($request->only('email','remember'));
    }
}
