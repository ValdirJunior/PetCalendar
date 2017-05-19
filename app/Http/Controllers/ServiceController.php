<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;

use App\Petshop;
use App\TypePet;

use Auth;

class ServiceController extends Controller
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
        $services = Service::where('petshop_id',Auth::user()->id)
                            ->select('services.name','services.description','typepets.description as typepet','services.value')
                            ->join('typepets', 'services.typepet_id', '=', 'typepets.id')
                            ->get();
        return view('petshop-services',['services' => $services]);
    }

    public function create()
    {
        $typepets = TypePet::all();
        return view('petshop-services-add', ['typepets' => $typepets]);
    }

    public function store(Request $request)
    {
        Service::create($request->all());

        return redirect()->route('petshop.services');
    }
}
