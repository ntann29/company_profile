@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-header">Data Fasilitas
                            <a href="{{ route('fasilitas.create') }}" class="btn btn-outline-primary" style="float: right">Tambah</a>
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
                                        <th scope="col">Nama Fasilitas</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($fasilitas as $data)
                                    <tr>
                                        <td scope="row">{{ $no++ }}</td>
                                        <td scope="row">{{ $data->nama_fasilitas }}</td>
                                        <td>
                                            <img src="{{ asset('storage/fasilitas/' . $data->foto) }}" alt="" width="50">
                                        </td>
                                        <th>
                                            <form action="{{ route('fasilitas.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('fasilitas.edit', $data->id) }}" class="btn btn-success">Ubah</a>
                                                <a href="{{ route('fasilitas.show', $data->id) }}" class="btn btn-warning">Lihat</a>
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
        </div>
    </div>
</div>
@endsection