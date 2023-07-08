<?php

namespace App\Http\Controllers\pembeli;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Barang;

class AjukanComplainController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'tanggal_pembelian' => ['required', 'date'],
            'nama' => ['required', 'string'],
            'merk' => ['required', 'string'],
            'jumlah' => ['required', 'int'],
            'harga' => ['required', 'int'],
            //'foto' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'], // Validasi untuk foto
        ]);

        if(!$validated){
            return redirect()->route('pages.pembeli.ajukan_garansi.index')->with('error', 'validated failed!');
        }
        // Proses penyimpanan data barang dengan foto

        /*
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('foto_barang', $filename, 'public');
            
            if(!$validated){
                return redirect()->route('pages.pembeli.ajukan_garansi.index')->with('error', 'validated failed!');
            }
        }
        */

        /*// Simpan data barang beserta nama file foto ke dalam database
        $barang = new Barang();
        $barang->nama = $validated['nama'];
        $barang->merk = $validated['merk'];
        $barang->jumlah = $validated['jumlah'];
        $barang->harga = $validated['harga'];
        $barang->tanggal_pembelian = $validated['tanggal_pembelian'];
        $barang->foto = $filename;
        $barang->save();*/

        // Create Menu
        Barang::Create([
            'tanggal_pembelian' => $validated['tanggal_pembelian'],
            'nama' => $validated['nama'],
            'merk' => $validated['merk'],
            'jumlah' => $validated['jumlah'],
            'harga' => $validated['harga'],
            //'foto' => $validated['foto'],
        ]);

        return redirect()->route('pages.pembeli.status_ajuan.index')->with('success', 'Created Successfully');

    }
}
