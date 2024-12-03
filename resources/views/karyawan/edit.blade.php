@extends('layouts.app')

@section('title', 'Edit Karyawan')

@section('contents')
    <h1>Edit Karyawan</h1>
    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $karyawan->nama }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $karyawan->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" name="kota" id="kota" class="form-control" value="{{ $karyawan->kota }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $karyawan->status }}" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $karyawan->telepon }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
