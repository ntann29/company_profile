@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Data Informasi</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('informasi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" required rows="4"></textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>foto</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
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