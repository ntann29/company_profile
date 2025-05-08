@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-header">Data Eskul</div>

                        <div class="card-body">

                            <form action="{{ route('eskul.update', $eskul->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nama Eskul</label>
                                    <input type="text" class="form-control" name="nama_eskul" value="{{ $eskul->nama_eskul }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    @if ($eskul->foto)
                                    <div class="mb-2">
                                        <img src="{{ Storage::url('eskul/' . $eskul->foto) }}" alt="Foto Eskul" class="img-thumbnail" width="150">
                                    </div>
                                    @endif
                                    <input type="file" class="form-control" @error('foto') is-invalid @enderror name="foto" value="{{$eskul->foto}}" disabled>

                                    @error('foto')
                                    <div class="invalid-fedback">{{$message}}</div>
                                    @enderror
                                </div><br>
                                <a href="{{ route('eskul.index') }}" class="btn btn-primary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection