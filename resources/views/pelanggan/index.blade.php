@extends('layouts.app')

@section('title')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Pelanggan</h1>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Add Pelanggan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Pekerjaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>{{ $pelanggan->jenis_kelamin }}</td>
                    <td>{{ $pelanggan->pekerjaan }}</td>
                    <td>
                        <a href="{{ route('pelanggan.show', $pelanggan->id) }}" class="btn btn-secondary">Detail</a>
                        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" onsubmit="return confirm('Delete this pelanggan?')" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
