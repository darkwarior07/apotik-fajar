@extends('layouts.app')

@section('title', 'List Faktur Supply')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Faktur Supply</h1>
        <a href="{{ route('faktur.create') }}" class="btn btn-primary">Add Faktur</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>No Faktur</th>
                <th>Tanggal</th>
                <th>Karyawan</th>
                <th>Obat</th>
                <th>Supplier</th>
                <th>Total</th>
                <th>Pajak</th>
                <th>Total Bayar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fakturSupplies as $faktur)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $faktur->no_faktur }}</td>
                    <td>{{ $faktur->tanggal }}</td>
                    <td>{{ $faktur->karyawan->nama }}</td>
                    <td>{{ $faktur->obat->nama }}</td>
                    <td>{{ $faktur->supplier->nama }}</td>
                    <td>{{ $faktur->total }}</td>
                    <td>{{ $faktur->pajak }}</td>
                    <td>{{ $faktur->total_bayar }}</td>
                    <td>
                        <a href="{{ route('faktur.show', $faktur->id) }}" class="btn btn-secondary">Detail</a>
                        <a href="{{ route('faktur.edit', $faktur->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('faktur.destroy', $faktur->id) }}" method="POST" onsubmit="return confirm('Delete this faktur?')" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
