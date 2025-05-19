@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Fasilitas</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('fasilitas.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Fasilitas</label>
                                <input type="text" class="form-control" name="nama_fasilitas" required>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
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