@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Data Prestasi</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tanggal Prestasi</label>
                                <input type="date" class="form-control" name="tanggal_prestasi" value="{{ $prestasi->tanggal_prestasi }}" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Prestasi</label>
                                <input type="text" class="form-control" name="nama_prestasi" value="{{ $prestasi->nama_prestasi }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tingkat">Tingkat</label>
                                <select name="tingkat" class="form-control" required>
                                    <option value="Sekolah " {{ $prestasi->tingkat == 'Sekolah ' ? 'selected' : '' }}>Sekolah </option>
                                    <option value="Kecamatan" {{ $prestasi->tingkat == 'Kecamatan' ? 'selected' : '' }}>Kecamatan</option>
                                    <option value="Kabupaten" {{ $prestasi->tingkat == 'Kabupaten' ? 'selected' : '' }}>Kabupaten</option>
                                    <option value="Provinsi" {{ $prestasi->tingkat == 'Provinsi' ? 'selected' : '' }}>Provinsi</option>
                                    <option value="Nasional" {{ $prestasi->tingkat == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                    <option value="Internasional" {{ $prestasi->tingkat == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required rows="4">{{ $prestasi->deskripsi }}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <img src="{{ asset('storage/prestasi/' . $prestasi->foto) }}" alt="" width="100">
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