
@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Detail Supplier</h1>
    <hr />
    <div class="row">
        <div class="col">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" value="{{ $supplier->nama }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" value="{{ $supplier->alamat }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Kota</label>
            <input type="text" class="form-control" value="{{ $supplier->kota }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label class="form-label">Telepon</label>
            <input type="text" class="form-control" value="{{ $supplier->telepon }}" readonly>
        </div>
    </div>
@endsection
