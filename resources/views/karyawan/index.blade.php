@extends('layouts.app')

@section('title', 'Daftar Karyawan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Karyawan</h1>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>
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
                <th>Kota</th>
                <th>Status</th>
                <th>Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawans as $karyawan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->alamat }}</td>
                    <td>{{ $karyawan->kota }}</td>
                    <td>{{ $karyawan->status }}</td>
                    <td>{{ $karyawan->telepon }}</td>
                    <td>
                        <a href="{{ route('karyawan.show', $karyawan->id) }}" class="btn btn-secondary">Detail</a>
                        <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" onsubmit="return confirm('Hapus data karyawan?')" style="display:inline;">
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
