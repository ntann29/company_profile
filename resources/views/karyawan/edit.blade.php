@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-header">Edit Karyawan</div>

                        <div class="card-body">

                            <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nama karyawan</label>
                                    <input type="text" class="form-control" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="jenis_kelamin" value="{{ $karyawan->jenis_kelamin }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Tugas</label>
                                    <input type="text" class="form-control" name="tugas" value="{{ $karyawan->tugas }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" value="{{ $karyawan->jabatan }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <img src="{{ asset('storage/karyawan/' . $karyawan->foto) }}" alt="" width="50">
                                    <input type="file" class="form-control" @error('foto') is-invalid @enderror name="foto">
                                    @error('foto')
                                    <div class="invalid-fedback">{{$message}}</div>
                                    @enderror
                                </div><br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection