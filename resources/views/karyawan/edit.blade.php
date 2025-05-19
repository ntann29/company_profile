@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Data Karyawan</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama karyawan</label>
                                <input type="text" class="form-control" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin" value="{{ $karyawan->jenis_kelamin }}" required>
                            </div>
                            <div class="form-group">
                                <label>Tugas</label>
                                <select name="tugas" class="form-control" required>
                                    <option value="Memimpin seluruh kegiatan di sekolah" {{ $karyawan->tugas == 'Memimpin seluruh kegiatan di sekolah' ? 'selected' : '' }}>Memimpin seluruh kegiatan di sekolah</option>
                                    <option value="Mengatur tata tertib siswa" {{ $karyawan->tugas == 'Mengatur tata tertib siswa' ? 'selected' : '' }}>Mengatur tata tertib siswa</option>
                                    <option value="Menilai dan mengevaluasi hasil belajar siswa" {{ $karyawan->tugas == 'Menilai dan mengevaluasi hasil belajar siswa' ? 'selected' : '' }}>Menilai dan mengevaluasi hasil belajar siswa</option>
                                    <option value="Memberikan layanan konseling kepada siswa" {{ $karyawan->tugas == 'Memberikan layanan konseling kepada siswa' ? 'selected' : '' }}>Memberikan layanan konseling kepada siswa</option>
                                    <option value="Mengatur dan mengawasi seluruh kegiatan administrasi sekolah" {{ $karyawan->tugas == 'Mengatur dan mengawasi seluruh kegiatan administrasi sekolah' ? 'selected' : '' }}>Mengatur dan mengawasi seluruh kegiatan administrasi sekolah</option>
                                    <option value="Menjaga keamanan dan ketertiban lingkungan sekolah" {{ $karyawan->tugas == 'Menjaga keamanan dan ketertiban lingkungan sekolah' ? 'selected' : '' }}>Menjaga keamanan dan ketertiban lingkungan sekolah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="jabatan" class="form-control" required>
                                    <option value="Kepala Sekolah" {{ $karyawan->jabatan == 'Kepala Sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                                    <option value="Wakasek Kesiswaan" {{ $karyawan->jabatan == 'Wakasek Kesiswaan' ? 'selected' : '' }}>Wakasek Kesiswaan</option>
                                    <option value="Guru" {{ $karyawan->jabatan == 'Guru' ? 'selected' : '' }}>Guru</option>
                                    <option value="Guru BK" {{ $karyawan->jabatan == 'Guru BK' ? 'selected' : '' }}>Guru BK</option>
                                    <option value="Tata Usaha" {{ $karyawan->jabatan == 'Tata Usaha' ? 'selected' : '' }}>Tata Usaha</option>
                                    <option value="Satpam" {{ $karyawan->jabatan == 'Satpam' ? 'selected' : '' }}>Satpam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <img src="{{ asset('storage/karyawan/' . $karyawan->foto) }}" alt="" width="50">
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
@endsection