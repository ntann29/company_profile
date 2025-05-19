@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Karyawan</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Karyawan</label>
                                <input type="text" class="form-control" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin" value="{{ $karyawan->jenis_kelamin }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Tugas</label>
                                <input type="text" class="form-control" name="tugas" value="{{ $karyawan->tugas }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" value="{{ $karyawan->jabatan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                @if ($karyawan->foto)
                                <div class="mb-2">
                                    <img src="{{ Storage::url('karyawan/' . $karyawan->foto) }}" alt="Foto Karyawan" class="img-thumbnail" width="150">
                                </div>
                                @endif
                                <input type="file" class="form-control" @error('foto') is-invalid @enderror name="foto" value="{{$karyawan->foto}}" disabled>
                                @error('foto')
                                <div class="invalid-fedback">{{$message}}</div>
                                @enderror
                            </div><br>
                            <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
