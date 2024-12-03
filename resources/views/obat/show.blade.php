@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Detail Obat</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Obat</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Obat" value="{{ $obat->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Obat</label>
            <input type="text" name="jenis" class="form-control" placeholder="Jenis Obat" value="{{ $obat->jenis }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $obat->harga }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Stok</label>
            <input type="text" name="stok" class="form-control" placeholder="Stok" value="{{ $obat->stok }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID Supplier</label>
            <input type="text" name="id_supplier" class="form-control" placeholder="ID Supplier" value="{{ $obat->id_supplier }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="Dibuat Pada" value="{{ $obat->created_at }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Diperbarui Pada" value="{{ $obat->updated_at }}" readonly>
        </div>
    </div>
@endsection
