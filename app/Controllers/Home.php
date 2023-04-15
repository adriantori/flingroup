<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function javanesia()
    {
        return view('pages/javanesia');
    }
    public function gemilang()
    {
        return view('pages/gemilang');
    }
}
