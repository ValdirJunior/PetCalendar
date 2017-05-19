<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pet;
use App\TypePet;

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
        $typepets = TypePet::all();
        return view('user-pets-add', ['typepets' => $typepets]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Pet::create($request->all());

        return redirect()->route('user.pets');
    }
}
