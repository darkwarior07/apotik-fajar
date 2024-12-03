
@extends('layouts.app')

@section('title')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Supplier</h1>
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add Supplier</a>
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
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $supplier)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $supplier->nama }}</td>
        <td>{{ $supplier->alamat }}</td>
        <td>{{ $supplier->kota }}</td>
        <td>{{ $supplier->telepon }}</td>
        <td>
            <!-- Link ke detail supplier, pastikan parameter ID diberikan -->
            <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-secondary">Detail</a>
            <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" onsubmit="return confirm('Delete this supplier?')" style="display:inline;">
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
