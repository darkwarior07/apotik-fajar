@extends('layouts.app')

@section('title', 'Faktur Penjualan')

@section('contents')
<h1>List Faktur Penjualan</h1>
<a href="{{ route('faktur_penjualan.create') }}" class="btn btn-primary">Tambah Faktur</a>

@if($fakturPenjualan->isEmpty())
    <p>Tidak ada data faktur penjualan.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>No Faktur</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Karyawan</th>
                <th>Obat</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Pajak</th>
                <th>Total Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fakturPenjualan as $faktur)
                <tr>
                    <td>{{ $faktur->no_faktur }}</td>
                    <td>{{ $faktur->tanggal }}</td>
                    <td>{{ $faktur->pelanggan->nama }}</td>
                    <td>{{ $faktur->karyawan->nama }}</td>
                    <td>{{ $faktur->obat->nama }}</td>
                    <td>{{ $faktur->jumlah }}</td>
                    <td>{{ $faktur->total }}</td>
                    <td>{{ $faktur->pajak }}</td>
                    <td>{{ $faktur->total_bayar }}</td>
                    <td>
                        <a href="{{ route('faktur_penjualan.edit', $faktur->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('faktur_penjualan.destroy', $faktur->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection
