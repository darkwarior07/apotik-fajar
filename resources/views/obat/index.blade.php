
@extends('layouts.app')

@section('title')

@section('contents')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Obat</h1>
        <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Obat</a>
    </div>

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Supplier</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($obats as $obat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $obat->nama }}</td>
                    <td>{{ $obat->jenis }}</td>
                    <td>{{ number_format($obat->harga, 2, ',', '.') }}</td>
                    <td>{{ $obat->stok }}</td>
                    <td>{{ $obat->supplier->nama ?? 'Tidak ada Supplier' }}</td> <!-- Jika ada supplier -->
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('obat.show', $obat->id) }}" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data obat</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
