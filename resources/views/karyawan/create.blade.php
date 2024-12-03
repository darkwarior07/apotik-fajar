@extends('layouts.app')

@section('title', 'Tambah Karyawan')

@section('contents')
    <h1>Tambah Karyawan</h1>
    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" name="kota" id="kota" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
