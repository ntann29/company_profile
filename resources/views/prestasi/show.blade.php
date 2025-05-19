@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Prestasi</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('prestasi.update', $prestasi->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tanggal Prestasi</label>
                                <input type="date" class="form-control" name="tanggal_prestasi" value="{{ $prestasi->tanggal_prestasi }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Nama Prestasi</label>
                                <input type="text" class="form-control" name="nama_prestasi" value="{{ $prestasi->nama_prestasi }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Tingkat</label>
                                <input type="text" class="form-control" name="tingkat" value="{{ $prestasi->tingkat }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" disabled>{{ $prestasi->deskripsi }}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                @if ($prestasi->foto)
                                <div class="mb-2">
                                    <img src="{{ Storage::url('prestasi/' . $prestasi->foto) }}" alt="Foto prestasi" class="img-thumbnail" width="150">
                                </div>
                                @endif
                                <input type="file" class="form-control" @error('foto') is-invalid @enderror name="foto" value="{{$prestasi->foto}}" disabled>

                                @error('foto')
                                <div class="invalid-fedback">{{$message}}</div>
                                @enderror
                            </div><br>
                            <a href="{{ route('prestasi.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection