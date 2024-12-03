@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Detail Pelanggan</h1>
    <hr />
    <div>
        <strong>Nama:</strong> {{ $pelanggan->nama }}
    </div>
    <div>
        <strong>Alamat:</strong> {{ $pelanggan->alamat }}
    </div>
    <div>
        <strong>Jenis Kelamin:</strong> {{ $pelanggan->jenis_kelamin }}
    </div>
    <div>
        <strong>Pekerjaan:</strong> {{ $pelanggan->pekerjaan }}
    </div>
@endsection
