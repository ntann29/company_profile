@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Data Informasi</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('informasi.update', $informasi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" value="{{ old('judul', $informasi->judul) }}">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required rows="4">{{ $informasi->deskripsi }}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <img src="{{ asset('storage/informasi/' . $informasi->foto) }}" alt="" width="100">
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
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
@endsection