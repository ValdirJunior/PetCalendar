<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;

use App\Petshop;

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
        $services = Service::all();
        return view('petshop-services',['services' => $services]);
    }

    public function create()
    {
        return view('petshop-services-add');
    }

    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'name' => 'request',
        //     'description' => 'request',
        //     'value' => 'request',
        // ]);

        $petshop = Petshop::find($request->petshop_id);
        //$request->all()['petshop_id'] = $petshop->id;
        Service::create($request->all());

        return redirect()->route('petshop.services');
    }
}
