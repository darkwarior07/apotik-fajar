@extends('layouts.app')

@section('title', 'Edit Faktur Supply')

@section('contents')
    <h1>Edit Faktur Supply</h1>
    <form action="{{ route('faktur.update', $fakturSupply->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="no_faktur">No Faktur</label>
            <input type="text" name="no_faktur" class="form-control" value="{{ old('no_faktur', $fakturSupply->no_faktur) }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $fakturSupply->tanggal) }}" required>
        </div>

        <div class="form-group">
            <label for="karyawan_id">Karyawan</label>
            <select name="karyawan_id" class="form-control" required>
                @foreach ($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}" {{ $fakturSupply->karyawan_id == $karyawan->id ? 'selected' : '' }}>
                        {{ $karyawan->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="obat_id">Obat</label>
            <select name="obat_id" class="form-control" required>
                @foreach ($obats as $obat)
                    <option value="{{ $obat->id }}" {{ $fakturSupply->obat_id == $obat->id ? 'selected' : '' }}>
                        {{ $obat->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="supplier_id">Supplier</label>
            <select name="supplier_id" class="form-control" required>
                @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" {{ $fakturSupply->supplier_id == $supplier->id ? 'selected' : '' }}>
                        {{ $supplier->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" name="total" class="form-control" value="{{ old('total', $fakturSupply->total) }}" required>
        </div>

        <div class="form-group">
            <label for="pajak">Pajak</label>
            <input type="number" name="pajak" class="form-control" value="{{ old('pajak', $fakturSupply->pajak) }}" required>
        </div>

        <div class="form-group">
            <label for="total_bayar">Total Bayar</label>
            <input type="number" name="total_bayar" class="form-control" value="{{ old('total_bayar', $fakturSupply->total_bayar) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Faktur</button>
    </form>
@endsection
