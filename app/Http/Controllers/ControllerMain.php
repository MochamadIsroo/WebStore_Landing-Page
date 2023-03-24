<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMain extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function product()
    {
        return view('product');
    }
    public function app()
    {
        return view('app');
    }
}
