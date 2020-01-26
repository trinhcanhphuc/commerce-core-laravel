<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shoes.index');
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
