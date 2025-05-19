@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Eskul</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('eskul.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Eskul</label>
                                <input type="text" class="form-control" name="nama_eskul" required>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
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