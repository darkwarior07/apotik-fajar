<?php

namespace App\Http\Controllers;

use App\Models\FakturPenjualan;
use App\Models\Pelanggan;
use App\Models\Karyawan;
use App\Models\Obat;
use Illuminate\Http\Request;

class FakturPenjualanController extends Controller
{
    public function index()
    {
        $fakturPenjualan = FakturPenjualan::with(['pelanggan', 'karyawan', 'obat'])->get();
        return view('faktur_penjualan.index', compact('fakturPenjualan'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        $karyawans = Karyawan::all();
        $obats = Obat::all();
        return view('faktur_penjualan.create', compact('pelanggans', 'karyawans', 'obats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_faktur' => 'required|unique:faktur_penjualan',
            'tanggal' => 'required|date',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'karyawan_id' => 'required|exists:karyawans,id',
            'obat_id' => 'required|exists:obats,id',
            'jumlah' => 'required|integer|min:1',
            'total' => 'required|numeric',
            'pajak' => 'required|numeric',
            'total_bayar' => 'required|numeric',
        ]);

        FakturPenjualan::create($request->all());
        return redirect()->route('faktur_penjualan.index')->with('success', 'Faktur berhasil dibuat');
    }

    public function edit($id)
    {
        $faktur = FakturPenjualan::findOrFail($id);
        $pelanggans = Pelanggan::all();
        $karyawans = Karyawan::all();
        $obats = Obat::all();
        return view('faktur_penjualan.edit', compact('faktur', 'pelanggans', 'karyawans', 'obats'));
    }

    public function update(Request $request, $id)
    {
        $faktur = FakturPenjualan::findOrFail($id);

        $request->validate([
            'no_faktur' => 'required|unique:faktur_penjualan,no_faktur,' . $id,
            'tanggal' => 'required|date',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'karyawan_id' => 'required|exists:karyawans,id',
            'obat_id' => 'required|exists:obats,id',
            'jumlah' => 'required|integer|min:1',
            'total' => 'required|numeric',
            'pajak' => 'required|numeric',
            'total_bayar' => 'required|numeric',
        ]);

        $faktur->update($request->all());
        return redirect()->route('faktur_penjualan.index')->with('success', 'Faktur berhasil diperbarui');
    }

    public function destroy($id)
    {
        FakturPenjualan::findOrFail($id)->delete();
        return redirect()->route('faktur_penjualan.index')->with('success', 'Faktur berhasil dihapus');
    }
}
