<?php

namespace App\Http\Controllers;

use DB, Request;

use App\Services\ShoeService;

class ShoesController extends Controller
{

    protected $shoe_service;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ShoeService $shoeService
    )
    {
        $this->middleware('auth');
        $this->shoe_service = $shoeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoeTypes = $this->shoe_service->getByName('');
        $shoes = $this->shoe_service->getShoesByType($shoeTypes);
      
        return view('shoes.index', compact('shoeTypes', 'shoes'));
    }

    /**
     * Display an item in the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        return view('shoes.show');
    }

}
