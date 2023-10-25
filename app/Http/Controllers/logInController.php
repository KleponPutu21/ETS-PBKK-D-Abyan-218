<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logInController extends Controller
{
    public function index(){
        return view('logIn',[
            "title" => "Masuk"
        ]);
    }
}
