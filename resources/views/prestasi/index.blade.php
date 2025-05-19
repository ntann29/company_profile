@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-15">
        <div class="card">
            <div class="card-header">Data Prestasi
                <a href="{{ route('prestasi.create') }}" class="btn btn-outline-primary" style="float: right">Tambah</a>
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
                            <th scope="col">Tanggal Prestasi</th>
                            <th scope="col">Nama Prestasi</th>
                            <th scope="col">Tingkat</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($prestasi as $data)
                        <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td scope="row">{{ $data->tanggal_prestasi }}</td>
                            <td scope="row">{{ $data->nama_prestasi }}</td>
                            <td scope="row">{{ $data->tingkat }}</td>
                            <td scope="row">{{ Str::limit($data->deskripsi, 5) }}</td>
                            <td>
                                <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt="" width="50">
                            </td>
                            <th>
                                <form action="{{ route('prestasi.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('prestasi.edit', $data->id) }}" class="btn btn-success">Ubah</a>
                                    <a href="{{ route('prestasi.show', $data->id) }}" class="btn btn-warning">Lihat</a>
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
