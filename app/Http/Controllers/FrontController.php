<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function resume()
    {
        return view('resume');
    }

    public function services()
    {
        return view('services');
    }

    public function portofolio()
    {
        return view('portofolio');
    }
}
