@extends('layouts.app')

@section('title', 'Detail Faktur Penjualan')

@section('contents')
<h1 class="mb-4">Detail Faktur Penjualan</h1>

<div class="card">
    <div class="card-header">
        Faktur Penjualan: {{ $faktur->no_faktur }}
    </div>
    <div class="card-body">
        <div class="mb-3">
            <strong>Tanggal:</strong> {{ $faktur->tanggal }}
        </div>
        <div class="mb-3">
            <strong>Pelanggan:</strong> {{ $faktur->pelanggan->nama }}
        </div>
        <div class="mb-3">
            <strong>Karyawan:</strong> {{ $faktur->karyawan->nama }}
        </div>
        <div class="mb-3">
            <strong>Obat:</strong> {{ $faktur->obat->nama }}
        </div>
        <div class="mb-3">
            <strong>Jumlah:</strong> {{ $faktur->jumlah }}
        </div>
        <div class="mb-3">
            <strong>Total:</strong> Rp {{ number_format($faktur->total, 2, ',', '.') }}
        </div>
        <div class="mb-3">
            <strong>Pajak:</strong> Rp {{ number_format($faktur->pajak, 2, ',', '.') }}
        </div>
        <div class="mb-3">
            <strong>Total Bayar:</strong> Rp {{ number_format($faktur->total_bayar, 2, ',', '.') }}
        </div>
    </div>
    <div class="card-footer text-end">
        <a href="{{ route('faktur_penjualan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
