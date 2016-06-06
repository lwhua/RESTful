<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){

        return view('home.index', ['name' => 'James']);
    }
}
