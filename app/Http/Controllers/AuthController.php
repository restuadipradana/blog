<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form(Request $req){
        //dd($req["fname"]);
        //dd($req->all());
        $fname = $req["fname"];
        $lname = $req["lname"];
        return view('halo', ["fname" => $fname, "lname" => $lname]);
    }

    public function register(){
        return view('form');
    }
}
