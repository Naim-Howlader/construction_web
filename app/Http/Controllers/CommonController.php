<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function news(){
        return view('frontend.news');
    }
}