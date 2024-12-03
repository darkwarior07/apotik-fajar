<?php

// app/Http/Controllers/FakturSupplyController.php

namespace App\Http\Controllers;

use App\Models\FakturSupply;
use App\Models\Karyawan;
use App\Models\Obat;
use App\Models\Supplier;
use Illuminate\Http\Request;

class FakturSupplyController extends Controller
{
    public function index()
    {
        $fakturSupplies = FakturSupply::all();
        return view('faktur.index', compact('fakturSupplies'));
    }

    public function create()
    {
        $karyawans = Karyawan::all();
        $obats = Obat::all();
        $suppliers = Supplier::all();
        return view('faktur.create', compact('karyawans', 'obats', 'suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:faktur_supplies',
            'tanggal' => 'required|date',
            'karyawan_id' => 'required|exists:karyawans,id',
            'obat_id' => 'required|exists:obats,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'total' => 'required|numeric',
            'pajak' => 'required|numeric',
            'total_bayar' => 'required|numeric',
        ]);

        FakturSupply::create($request->all());

        return redirect()->route('faktur.index')->with('success', 'Faktur berhasil dibuat');
    }

    public function show($id)
    {
        $fakturSupply = FakturSupply::findOrFail($id);
        return view('faktur.show', compact('fakturSupply'));
    }

    public function edit($id)
    {
        $fakturSupply = FakturSupply::findOrFail($id);
        $karyawans = Karyawan::all();
        $obats = Obat::all();
        $suppliers = Supplier::all();
        return view('faktur.edit', compact('fakturSupply', 'karyawans', 'obats', 'suppliers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_faktur' => 'required',
            'tanggal' => 'required|date',
            'karyawan_id' => 'required|exists:karyawans,id',
            'obat_id' => 'required|exists:obats,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'total' => 'required|numeric',
            'pajak' => 'required|numeric',
            'total_bayar' => 'required|numeric',
        ]);

        $fakturSupply = FakturSupply::findOrFail($id);
        $fakturSupply->update($request->all());

        return redirect()->route('faktur.index')->with('success', 'Faktur berhasil diperbarui');
    }

    public function destroy($id)
    {
        $fakturSupply = FakturSupply::findOrFail($id);
        $fakturSupply->delete();

        return redirect()->route('faktur.index')->with('success', 'Faktur berhasil dihapus');
    }
}

