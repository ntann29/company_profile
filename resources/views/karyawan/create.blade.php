@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Karyawan</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Karyawan</label>
                                <input type="text" class="form-control" name="nama_karyawan" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin" required>
                            </div>
                            <div class="form-group">
                                <label>Tugas</label>
                                <select name="tugas" class="form-control">
                                    <option value="Memimpin seluruh kegiatan di sekolah">Memimpin seluruh kegiatan di sekolah</option>
                                    <option value="Mengatur tata tertib siswa">Mengatur tata tertib siswa</option>
                                    <option value="Mapel MTK">Mapel MTK</option>
                                    <option value="Mapel Inggris">Mapel Inggris</option>
                                    <option value="Mapel IPA">Mapel IPA</option>
                                    <option value="Mapel Prakarya">Mapel Prakarya</option>
                                    <option value="Mapel B.Indonesia">Mapel B.Indonesia</option>
                                    <option value="Memberikan layanan konseling kepada siswa">Memberikan layanan konseling kepada siswa</option>
                                    <option value="Mengatur dan mengawasi seluruh kegiatan administrasi sekolah">Mengatur dan mengawasi seluruh kegiatan administrasi sekolah</option>
                                    <option value="Menjaga keamanan dan ketertiban lingkungan sekolah">Menjaga keamanan dan ketertiban lingkungan sekolah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="jabatan" class="form-control" required>
                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                    <option value="Wakasek Kesiswaan">Wakasek kesiswaan</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Guru BK">Guru BK</option>
                                    <option value="Tata Usaha">Tata Usaha</option>
                                    <option value="Satpam">Satpam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
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