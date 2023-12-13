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
            'harga' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $validatedData['gambar'] = '';
        $data = Produk::create($validateData);
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = $data->id . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/produk'), $imageName);

            $data->update(['gambar' => $imageName]);
        }
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
        $produk = Produk::findOrFail($id);

        $imagePath = $produk->image;

        if (!empty($imagePath)) {
            $imagePath = public_path('assets/images/produk/') . $imagePath;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $request->validate([
            'nama_produk' => 'required|string',
            'kategori_produk' => 'required|string',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'kategori_produk' => $request->kategori_produk,
            'stok' => $request->stok,
            'harga' => $request->harga,

        ]);
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = $produk->id . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/produk/'), $imageName);

            $produk->update(['gambar' => $imageName]);
        }
        return redirect()->route('admin.product')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $mahasiswa = Produk::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('admin.product')->with('success', 'Data
                Berhasil Dihapus');
    }
    public function download_excel()
    {

        $produk = Produk::get();

        //Lampiran Excel
        $content_kepala = "<table width='1000' border='0'>
      <tr>
        <td colspan='9'><div align='center'><strong><h2>Daftar List Produk</h2></strong></div></td>
      </tr>
      </table>
        <br>";

        $content_header = "<table border='1'><tr><th>No</th><th>Nama Produk</th><th>Kategori</th><th>Stok</th><th>Harga</th><th>gambar</th></tr>";
        $content_dalam = "";
        $i = 1;
        foreach ($produk as $prd) {

            $data = "<tr><td align='center'>" . $i++ . "</td><td>" . $prd->nama_produk . "</td><td>" . $prd->kategori_produk . "</td><td>" . $prd->stok . "</td><td>" . $prd->harga . "</td><td>" . $prd->gambar . "</td></tr>";
            $content_dalam = $content_dalam . "\n" . $data;
        }
        $content_footer = "</table>";

        $content_sheet = "" . $content_kepala . "\n" . $content_header . "\n" . $content_dalam . "\n" . $content_footer . "";

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=Daftar List Produk.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        print $content_sheet;
    }
}
