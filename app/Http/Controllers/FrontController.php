<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Informasi;
use App\Models\Eskul;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function informasi()
    {
        $informasi = Informasi::all();
        return view('informasi', compact('informasi'));
    }

    public function eskul()
    {
        $eskul = Eskul::all();
        return view('eskul', compact('eskul'));
    }

    public function karyawan()
    {
        $karyawan = Karyawan::all();
        return view('karyawan', compact('karyawan'));
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function prestasi()
    {
        return view('prestasi');
    }
}
