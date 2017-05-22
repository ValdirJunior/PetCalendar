<?php

namespace App\Http\Controllers\Auth;

use App\Petshop;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class PetshopRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/petshop';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cnpj' => 'required|string|max:14',
            'email' => 'required|string|email|max:255|unique:petshops',
            'password' => 'required|string|min:6|confirmed',
            'socialName' => 'required|string|max:60',
            'realName' => 'required|string|max:60',
            'telNumber' => 'required|string|max:20',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $data)
    {
        $this->validate($data, [
            'cnpj' => 'required|string|max:14',
            'email' => 'required|string|email|max:255|unique:petshops',
            'password' => 'required|string|min:6|confirmed',
            'socialName' => 'required|string|max:60',
            'realName' => 'required|string|max:60',
            'telNumber' => 'required|string|max:20',
        ]);

        Petshop::create([
            'cnpj' => $data['cnpj'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'socialName' => $data['socialName'],
            'realName' => $data['realName'],
            'telNumber' => $data['telNumber'],
        ]);

        return redirect()->route('petshop.dashboard');
    }

    public function showRegistrationForm()
    {
        return view('auth.petshop-register');
    }
}
