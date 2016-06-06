<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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

    //
    public function show(Request $request, $id){
        print_r($request->all()) ;
        // return $this->response->error('This is an error.', 404);
        return $this->response->created();
    }
}
