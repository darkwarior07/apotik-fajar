@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Tambah Supplier</h1>
    <hr />
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf  <!-- Token CSRF -->
        
        <!-- Input nama supplier -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Supplier</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Supplier" required>
        </div>
        
        <!-- Input alamat supplier -->
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required>
        </div>
        
        <!-- Input kota supplier -->
        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota" required>
        </div>
        
        <!-- Input telepon supplier -->
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" name="telepon" class="form-control" placeholder="Masukkan Telepon" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
