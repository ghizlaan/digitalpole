<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stagecontroller extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function showhome(){
        return view('frontend.home');
    }
}
