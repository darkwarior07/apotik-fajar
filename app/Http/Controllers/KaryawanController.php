<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all(); // Ambil semua data karyawan
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'status' => 'required',
            'telepon' => 'required',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan')->with('success', 'Karyawan berhasil ditambahkan');
    }

    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.show', compact('karyawan'));
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'status' => 'required',
            'telepon' => 'required',
        ]);

        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        return redirect()->route('karyawan')->with('success', 'Karyawan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan')->with('success', 'Karyawan berhasil dihapus');
    }
}
