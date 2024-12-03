@extends('layouts.app')

@section('title', 'Detail Karyawan')

@section('contents')
    <h1>Detail Karyawan</h1>
    <ul>
        <li><strong>Nama:</strong> {{ $karyawan->nama }}</li>
        <li><strong>Alamat:</strong> {{ $karyawan->alamat }}</li>
        <li><strong>Kota:</strong> {{ $karyawan->kota }}</li>
        <li><strong>Status:</strong> {{ $karyawan->status }}</li>
        <li><strong>Telepon:</strong> {{ $karyawan->telepon }}</li>
    </ul>
    <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" onsubmit="return confirm('Hapus karyawan ini?')" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
