<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
{
    $obats = Obat::all();  // Mengambil semua data Obat
    return view('obat.index', compact('obats'));  // Kirim data $obats ke view
}

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'id' => 'required|exists:suppliers,id',
        ]);

        Obat::create($request->all());

        return redirect()->route('obat')->with('success', 'Obat berhasil ditambahkan');
    }

    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.show', compact('obat'));
    }

    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'id' => 'required|exists:suppliers,id',
        ]);

        $obat = Obat::findOrFail($id);
        $obat->update($request->all());

        return redirect()->route('obat')->with('success', 'Obat berhasil diperbarui');
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('obat')->with('success', 'Obat berhasil dihapus');
    }
}
