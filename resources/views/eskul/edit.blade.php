@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-header">Edit Eskul</div>

                        <div class="card-body">

                            <form action="{{ route('eskul.update', $eskul->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama_eskul">Nama Eskul</label>
                                    <input type="text" name="nama_eskul" class="form-control" value="{{ old('nama_eskul', $eskul->nama_eskul) }}">
                                </div>
                                <div class="form-group">
                                    <label>foto</label>
                                    <img src="{{ asset('storage/eskul/' . $eskul->foto) }}" alt="" width="100">
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
</div>
@endsection