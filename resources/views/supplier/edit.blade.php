
@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Edit Supplier</h1>
    <hr />
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $supplier->nama }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $supplier->alamat }}" required>
            </div>
            <div class="col">
                <input type="text" name="kota" class="form-control" placeholder="Kota" value="{{ $supplier->kota }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="telepon" class="form-control" placeholder="Telepon" value="{{ $supplier->telepon }}" required>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
