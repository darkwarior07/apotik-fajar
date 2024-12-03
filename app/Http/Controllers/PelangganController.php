<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $pelanggans = Pelanggan::all();  // Ambil semua data pelanggan
        return view('pelanggan.index', compact('pelanggans'));
    }

    // Menampilkan form untuk menambah pelanggan
    public function create()
    {
        return view('pelanggan.create');
    }

    // Menyimpan data pelanggan
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
        ]);

        Pelanggan::create($request->all());  // Menyimpan data pelanggan baru

        return redirect()->route('pelanggan')->with('success', 'Pelanggan berhasil ditambahkan');
    }

    // Menampilkan detail pelanggan
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    // Menampilkan form untuk mengedit pelanggan
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    // Mengupdate data pelanggan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect()->route('pelanggan')->with('success', 'Pelanggan berhasil diperbarui');
    }

    // Menghapus data pelanggan
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan')->with('success', 'Pelanggan berhasil dihapus');
    }
}
