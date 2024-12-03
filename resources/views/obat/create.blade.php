@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Tambah Obat</h1>
    <hr />
    <form action="{{ route('obat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <!-- Nama -->
            <div class="col">
                <label for="nama" class="form-label">Nama Obat</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Obat" required>
            </div>
            <!-- Jenis -->
            <div class="col">
                <label for="jenis" class="form-label">Jenis Obat</label>
                <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Jenis Obat" required>
            </div>
        </div>
        <div class="row mb-3">
            <!-- Harga -->
            <div class="col">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" required>
            </div>
            <!-- Stok -->
            <div class="col">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" name="stok" id="stok" class="form-control" placeholder="Stok" required>
            </div>
        </div>
        <div class="row mb-3">
            <!-- ID Supplier -->
            <div class="col">
                <label for="id_supplier" class="form-label">ID Supplier</label>
                <input type="number" name="id" id="id" class="form-control" placeholder="ID Supplier" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
