@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-15">
        <div class="card">
            <div class="card-header">Data Karyawan
                <a href="{{ route('karyawan.create') }}" class="btn btn-outline-primary" style="float: right">Tambah</a>
            </div>

            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($karyawan as $data)
                        <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td scope="row">{{ $data->nama_karyawan }}</td>
                            <td scope="row">{{ $data->jenis_kelamin }}</td>
                            <td scope="row">{{ Str::limit($data->tugas, 10) }}</td>
                            <td scope="row">{{ Str::limit($data->jabatan, 5 ) }}</td>
                            <td>
                                <img src="{{ asset('storage/karyawan/' . $data->foto) }}" alt="" width="50">
                            </td>
                            <th>
                                <form action="{{ route('karyawan.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('karyawan.edit', $data->id) }}" class="btn btn-success">Ubah</a>
                                    <a href="{{ route('karyawan.show', $data->id) }}" class="btn btn-warning">Lihat</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection