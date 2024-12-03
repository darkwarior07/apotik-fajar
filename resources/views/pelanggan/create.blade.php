@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Add Pelanggan</h1>
    <hr />
    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
