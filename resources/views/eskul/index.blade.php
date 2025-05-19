@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-15">
        <div class="card">
            <div class="card-header">Data Eskul
                <a href="{{ route('eskul.create') }}" class="btn btn-outline-primary" style="float: right">Tambah</a>
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
                            <th scope="col">Nama Eskul</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($eskul as $data)
                        <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td scope="row">{{ $data->nama_eskul }}</td>
                            <td>
                                <img src="{{ asset('storage/eskul/' . $data->foto) }}" alt="" width="50">
                            </td>
                            <th>
                                <form action="{{ route('eskul.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('eskul.edit', $data->id) }}" class="btn btn-success">Ubah</a>
                                    <a href="{{ route('eskul.show', $data->id) }}" class="btn btn-warning">Lihat</a>
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