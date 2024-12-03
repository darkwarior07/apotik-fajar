@extends('layouts.app')

@section('title', 'Tambah Faktur Supply')

@section('contents')
    <h1>Tambah Faktur Supply</h1>
    <form action="{{ route('faktur.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="no_faktur">No Faktur</label>
            <input type="text" name="no_faktur" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="karyawan_id">Karyawan</label>
            <select name="karyawan_id" class="form-control" required>
                @foreach ($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="obat_id">Obat</label>
            <select name="obat_id" class="form-control" required>
                @foreach ($obats as $obat)
                    <option value="{{ $obat->id }}">{{ $obat->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="supplier_id">Supplier</label>
            <select name="supplier_id" class="form-control" required>
                @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" name="total" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pajak">Pajak</label>
            <input type="number" name="pajak" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="total_bayar">Total Bayar</label>
            <input type="number" name="total_bayar" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Faktur</button>
    </form>
@endsection
