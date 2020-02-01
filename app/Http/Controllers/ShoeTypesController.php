<?php

namespace App\Http\Controllers;

use DB, Request;

use App\Services\ShoeService;

class ShoeTypesController extends Controller
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
        $allShoeTypes = $this->shoe_service->getByName('');
        $shoeTypes = $this->shoe_service->getByName('');
        $shoes = $this->shoe_service->getShoesByType($shoeTypes);
      
        return view('shoe_types.index', compact('allShoeTypes', 'shoes'));
    }

    /**
     * Display an item in the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $allShoeTypes = $this->shoe_service->getByName('');
        $shoeTypes = $this->shoe_service->getByName($name);
        $shoes = $this->shoe_service->getShoesByType($shoeTypes);
        
        return view('shoe_types.index', compact('allShoeTypes', 'shoes'));
    }

}
