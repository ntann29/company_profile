<?php
namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::orderBy('created_at', 'desc')->get();
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_karyawan' => 'required',
            'jenis_kelamin' => 'required',
            'tugas'         => 'required',
            'jabatan'       => 'required',
            'foto'          => 'required|mimes:jpg,png|max:1024',
        ]);

        $karyawan                = new Karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->tugas         = $request->tugas;
        $karyawan->jabatan       = $request->jabatan;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/karyawan', $name);
            $karyawan->foto = $name;
        }

        $karyawan->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama_karyawan'      => 'required',
        //     'jenis_kelamin'      => 'required',
        //     'tugas'              => 'required',
        //     'jabatan'            => 'required',
        //     'foto'               => 'nullable|mimes:jpg,png|max:1024',
        // ]);

        $karyawan                = Karyawan::findOrFail($id);
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->tugas         = $request->tugas;
        $karyawan->jabatan       = $request->jabatan;

        if ($request->hasFile('foto')) {
            $karyawan->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/karyawan', $name);
            $karyawan->foto = $name;
        }

        $karyawan->save();

        session()->flash('success', 'Data berhasil dirubah');

        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
