@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Lihat Data Informasi</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('informasi.update', $informasi->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{ $informasi->judul }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" disabled>{{ $informasi->deskripsi }}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                @if ($informasi->foto)
                                <div class="mb-2">
                                    <img src="{{ Storage::url('informasi/' . $informasi->foto) }}" alt="Foto informasi" class="img-thumbnail" width="150">
                                </div>
                                @endif
                                <input type="file" class="form-control" @error('foto') is-invalid @enderror name="foto" value="{{$informasi->foto}}" disabled>

                                @error('foto')
                                <div class="invalid-fedback">{{$message}}</div>
                                @enderror
                            </div><br>
                            <a href="{{ route('informasi.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection