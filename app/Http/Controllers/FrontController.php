<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Informasi;
use App\Models\Eskul;
use App\Models\Prestasi;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $informasi = Informasi::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('informasi'));
    }

    public function eskul()
    {
        $eskul = Eskul::orderBy('created_at', 'desc')->get();
        return view('eskul', compact('eskul'));
    }

    public function karyawan()
    {
        $karyawan = Karyawan::all();
        return view('karyawan', compact('karyawan'));
    }

    public function fasilitas()
    {
        $fasilitas = Fasilitas::orderBy('created_at', 'desc')->get();
        return view('fasilitas', compact('fasilitas'));
    }

    public function prestasi()
    {
        $prestasi = Prestasi::orderBy('created_at', 'desc')->get();
        return view('prestasi', compact('prestasi'));
    }
}
