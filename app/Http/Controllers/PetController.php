<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pet;

use App\User;

use Auth;

class PetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pets = Pet::where('client_id',Auth::user()->id)->get();
        return view('user-pets',['pets' => $pets]);
    }

    public function create()
    {
        return view('user-pets-add');
    }

    public function store(Request $request)
    {
        $client = User::find($request->client_id);
        Pet::create($request->all());

        return redirect()->route('user.pets');
    }
}
