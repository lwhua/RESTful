<?php

namespace App\Http\Controllers\Home;
use Laravel\Lumen\Routing\Controller as Controller;

class TestController extends Controller
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
