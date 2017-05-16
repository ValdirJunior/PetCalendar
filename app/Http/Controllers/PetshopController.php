<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetshopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:petshop');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('petshop');
    }

    public function calendar()
    {
        return view('petshop-calendar');
    }

    public function services()
    {
        return view('petshop-services');
    }
}
