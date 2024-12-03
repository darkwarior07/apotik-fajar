@extends('layouts.app')

@section('title', 'Tambah Faktur Penjualan')

@section('contents')
<h1 class="mb-4">Tambah Faktur Penjualan</h1>

<form action="{{ route('faktur_penjualan.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="no_faktur" class="form-label">No Faktur</label>
        <input type="text" name="no_faktur" class="form-control" id="no_faktur" required>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" id="tanggal" required>
    </div>
    <div class="mb-3">
        <label for="pelanggan_id" class="form-label">Pelanggan</label>
        <select name="pelanggan_id" class="form-control" id="pelanggan_id" required>
            <option value="">Pilih Pelanggan</option>
            @foreach($pelanggans as $pelanggan)
                <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="karyawan_id" class="form-label">Karyawan</label>
        <select name="karyawan_id" class="form-control" id="karyawan_id" required>
            <option value="">Pilih Karyawan</option>
            @foreach($karyawans as $karyawan)
                <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="obat_id" class="form-label">Obat</label>
        <select name="obat_id" class="form-control" id="obat_id" required>
            <option value="">Pilih Obat</option>
            @foreach($obats as $obat)
                <option value="{{ $obat->id }}">{{ $obat->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" id="jumlah" required>
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input type="number" step="0.01" name="total" class="form-control" id="total" required>
    </div>
    <div class="mb-3">
        <label for="pajak" class="form-label">Pajak</label>
        <input type="number" step="0.01" name="pajak" class="form-control" id="pajak" required>
    </div>
    <div class="mb-3">
        <label for="total_bayar" class="form-label">Total Bayar</label>
        <input type="number" step="0.01" name="total_bayar" class="form-control" id="total_bayar" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
