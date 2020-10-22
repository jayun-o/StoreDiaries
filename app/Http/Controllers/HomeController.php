<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construc()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('features.income');
    }
}
