<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('webpage.home');
    }

    public function about()
    {
        return view('webpage.about');
    }

    public function service()
    {
        return view('webpage.service');
    }

    public function project()
    {
        return view('webpage.project');
    }
}
