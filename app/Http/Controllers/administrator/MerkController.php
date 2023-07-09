<?php

namespace App\Http\Controllers\administrator;
use App\Http\Controllers\Controller;

use App\Models\Merk;
use Illuminate\Http\Request;
use App\Models\Barang;

class MerkController extends Controller
{
    public function index(Request $request){
        $merks = Merk::all();

        return view('pages.administrator.merk.index', [
            'merks' => $merks
        ]);
    }

    public function store(Request $request){
    $validated = $request->validate([
        'nama' => ['required', 'string'],
    ]);

    if (!$validated) {
        return redirect()->back()->withErrors($validated)->withInput();
    }

    Merk::create($validated);

    return redirect()->route('administrator.merk.index')->with('success', 'Data merk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $merk = Merk::find($id);

        if (!$merk) {
            return redirect()->route('administrator.merk.index')->with('error', 'Merk not found');
        }

        return view('pages.administrator.merk.edit', ['merk' => $merk]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string'],
        ]);

        $merk = Merk::find($id);

        if (!$merk) {
            return redirect()->route('administrator.merk.index')->with('error', 'Merk not found');
        }

        $merk->nama = $validated['nama'];
        $merk->save();

        return redirect()->route('administrator.merk.index')->with('success', 'Data merk berhasil diperbarui.');
    }

    public function destroy($id){
        $merk = Merk::find($id);

        if(!$merk){
            return redirect()->route('administrator.merk.index')->with('error', 'Menu tidak Ditemukan!');
        }

        $merk->delete();

        return redirect()->route('administrator.merk.index')->with('success', 'Deleted Successfully');
    }

}
