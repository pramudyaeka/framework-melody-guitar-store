<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function add()
    {
        return view(
            'users.admin.crud.add',
            ['produks' => Produk::all()]
        );
    }

    public function store(Request $request)
    {
        // Validate Input
        $validateData = $request->validate([
            'nama_produk' => 'required|string',
            'kategori_produk' => 'required|string',
            'stok' => 'required|integer',
            'harga' => 'required|integer'
        ]);
        Produk::create($validateData);
        return redirect()->route('admin.product')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        return view('users.admin.crud.edit', [
            'produks' => Produk::all()->where('id', $id)->first(),

        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string',
            'kategori_produk' => 'required|string',
            'stok' => 'required|integer',
            'harga' => 'required|integer'
        ]);
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'kategori_produk' => $request->kategori_produk,
            'stok' => $request->stok,
            'harga' => $request->harga,

        ]);
        return redirect()->route('admin.product')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $mahasiswa = Produk::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('admin.product')->with('success', 'Data
                Berhasil Dihapus');
    }
}
