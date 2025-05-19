@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Fasilitas</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Fasilitas</label>
                                <input type="text" class="form-control" name="nama_fasilitas" value="{{ $fasilitas->nama_fasilitas }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                @if ($fasilitas->foto)
                                <div class="mb-2">
                                    <img src="{{ Storage::url('fasilitas/' . $fasilitas->foto) }}" alt="Foto Fasilitas" class="img-thumbnail" width="150">
                                </div>
                                @endif
                                <input type="file" class="form-control" @error('foto') is-invalid @enderror name="foto" value="{{$fasilitas->foto}}" disabled>
                                @error('foto')
                                <div class="invalid-fedback">{{$message}}</div>
                                @enderror
                            </div><br>
                            <a href="{{ route('fasilitas.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection