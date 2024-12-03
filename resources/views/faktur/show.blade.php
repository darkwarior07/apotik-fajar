@extends('layouts.app')

@section('title', 'Detail Faktur Supply')

@section('contents')
    <h1>Detail Faktur Supply</h1>
    <ul>
        <li><strong>No Faktur:</strong> {{ $fakturSupply->no_faktur }}</li>
        <li><strong>Tanggal:</strong> {{ $fakturSupply->tanggal }}</li>
        <li><strong>Karyawan:</strong> {{ $fakturSupply->karyawan->nama }}</li>
        <li><strong>Obat:</strong> {{ $fakturSupply->obat->nama }}</li>
        <li><strong>Supplier:</strong> {{ $fakturSupply->supplier->nama }}</li>
        <li><strong>Total:</strong> {{ $fakturSupply->total }}</li>
        <li><strong>Pajak:</strong> {{ $fakturSupply->pajak }}</li>
        <li><strong>Total Bayar:</strong> {{ $fakturSupply->total_bayar }}</li>
    </ul>
    <a href="{{ route('faktur.edit', $fakturSupply->id) }}" class="btn btn-warning">Edit Faktur</a>
    <form action="{{ route('faktur.destroy', $fakturSupply->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus faktur ini?')">Hapus</button>
    </form>
@endsection
