<?php

namespace App\Http\Controllers\administrator;
use App\Http\Controllers\Controller;

use App\Models\Merk;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(Request $request){
        $barangs = Barang::all();
        $merkList = Merk::pluck('nama', 'id');

        return view('pages.administrator.barang.index', ['barangs' => $barangs], ['merkList' => $merkList]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => ['required', 'string'],
            'harga' => ['required', 'integer'],
            'id_merk' => ['required', 'exists:merks,id'],
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    
        Barang::create($validated);
    
        return redirect()->route('administrator.barang.index')->with('success', 'Data merk berhasil ditambahkan.');
        
    }

    public function edit($id){
            $barang = Barang::find($id);

            if (!$barang) {
                return redirect()->route('administrator.barang.index')->with('error', 'Merk not found');
            }

            return view('pages.administrator.barang.edit', ['barang' => $barang]);
        }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'nama' => ['required', 'string'],
            'harga' => ['required', 'integer'],
            'id_merk' => ['required', 'exists:merks,id'],
        ]);

        $barang = Barang::find($id);

        if (!$barang) {
            return redirect()->route('administrator.barang.index')->with('error', 'Merk not found');
        }

        $barang->nama = $validated['nama'];
        $barang->harga = $validated['harga'];
        $barang->id_merk = $validated['id_merk'];
        $barang->save();

        return redirect()->route('administrator.barang.index')->with('success', 'Data merk berhasil diperbarui.');
    }

    public function destroy($id){
        $barang = Barang::find($id);

        if(!$barang){
            return redirect()->route('administrator.barang.index')->with('error', 'Menu tidak Ditemukan!');
        }

        $barang->delete();

        return redirect()->route('administrator.barang.index')->with('success', 'Deleted Successfully');
    }
}
