@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Prestasi</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('prestasi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tanggal Prestasi</label>
                                <input type="date" class="form-control" name="tanggal_prestasi" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Prestasi</label>
                                <input type="text" class="form-control" name="nama_prestasi" required>
                            </div>
                            <div class="form-group">
                                <label>Tingkat</label>
                                <select name="tingkat" class="form-control" required>
                                    <option value="Sekolah">Sekolah</option>
                                    <option value="Kecamatan">Kecamatan</option>
                                    <option value="Kabupaten">Kabupaten</option>
                                    <option value="Provinsi">Provinsi</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                </select>
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