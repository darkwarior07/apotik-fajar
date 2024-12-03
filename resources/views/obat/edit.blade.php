@extends('layouts.app')

@section('title', )

@section('contents')
    <h1 class="mb-0">Edit Obat</h1>
    <hr />
    <form action="{{ route('obat.update', $obat->id_obat) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- Nama -->
            <div class="col mb-3">
                <label class="form-label">Nama Obat</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Obat" value="{{ $obat->nama }}" required>
            </div>
            <!-- Jenis -->
            <div class="col mb-3">
                <label class="form-label">Jenis Obat</label>
                <input type="text" name="jenis" class="form-control" placeholder="Jenis Obat" value="{{ $obat->jenis }}" required>
            </div>
        </div>
        <div class="row">
            <!-- Harga -->
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Harga" value="{{ $obat->harga }}" required>
            </div>
            <!-- Stok -->
            <div class="col mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" placeholder="Stok" value="{{ $obat->stok }}" required>
            </div>
        </div>
        <div class="row">
            <!-- ID Supplier -->
            <div class="col mb-3">
                <label class="form-label">ID Supplier</label>
                <input type="number" name="id" class="form-control" placeholder="ID Supplier" value="{{ $obat->id_supplier }}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
