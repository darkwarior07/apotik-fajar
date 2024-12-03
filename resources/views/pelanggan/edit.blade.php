@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Edit Pelanggan</h1>
    <hr />
    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $pelanggan->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $pelanggan->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki" {{ $pelanggan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $pelanggan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" value="{{ $pelanggan->pekerjaan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
