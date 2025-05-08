@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-header">Edit Fasilitas</div>

                        <div class="card-body">

                            <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama_fasilitas">Nama fasilitas</label>
                                    <input type="text" name="nama_fasilitas" class="form-control" value="{{ old('nama_fasilitas', $fasilitas->nama_fasilitas) }}">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <img src="{{ asset('storage/fasilitas/' . $fasilitas->foto) }}" alt="" width="50">
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