<?php
namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'kota' => 'required',
        'telepon' => 'required',
    ]);

    Supplier::create($request->all());

    return redirect()->route('supplier')->with('success', 'Supplier berhasil ditambahkan');
}
public function show($id)
{
    // Ambil supplier berdasarkan id
    $supplier = Supplier::findOrFail($id);

    // Tampilkan detail supplier di view
    return view('supplier.show', compact('supplier'));
}

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('supplier')->with('success', 'Supplier berhasil diperbarui');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('supplier')->with('success', 'Supplier berhasil dihapus');
    }
}
