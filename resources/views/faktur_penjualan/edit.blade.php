@extends('layouts.app')

@section('title', 'Edit Faktur Penjualan')

@section('contents')
<h1 class="mb-4">Edit Faktur Penjualan</h1>

<form action="{{ route('faktur_penjualan.update', $faktur->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="no_faktur" class="form-label">No Faktur</label>
        <input type="text" name="no_faktur" class="form-control" id="no_faktur" value="{{ $faktur->no_faktur }}" required>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $faktur->tanggal }}" required>
    </div>
    <div class="mb-3">
        <label for="pelanggan_id" class="form-label">Pelanggan</label>
        <select name="pelanggan_id" class="form-control" id="pelanggan_id" required>
            @foreach($pelanggans as $pelanggan)
                <option value="{{ $pelanggan->id }}" {{ $pelanggan->id == $faktur->pelanggan_id ? 'selected' : '' }}>
                    {{ $pelanggan->nama }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="karyawan_id" class="form-label">Karyawan</label>
        <select name="karyawan_id" class="form-control" id="karyawan_id" required>
            @foreach($karyawans as $karyawan)
                <option value="{{ $karyawan->id }}" {{ $karyawan->id == $faktur->karyawan_id ? 'selected' : '' }}>
                    {{ $karyawan->nama }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="obat_id" class="form-label">Obat</label>
        <select name="obat_id" class="form-control" id="obat_id" required>
            @foreach($obats as $obat)
                <option value="{{ $obat->id }}" {{ $obat->id == $faktur->obat_id ? 'selected' : '' }}>
                    {{ $obat->nama }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" id="jumlah" value="{{ $faktur->jumlah }}" required>
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input type="number" step="0.01" name="total" class="form-control" id="total" value="{{ $faktur->total }}" required>
    </div>
    <div class="mb-3">
        <label for="pajak" class="form-label">Pajak</label>
        <input type="number" step="0.01" name="pajak" class="form-control" id="pajak" value="{{ $faktur->pajak }}" required>
   
