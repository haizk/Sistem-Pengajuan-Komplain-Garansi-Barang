<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Merk;
use Illuminate\Http\Request;
use App\Models\Barang;

class MerkController extends Controller
{
    public function index(Request $request){
        $merkList = Merk::all();

        return view('pages.administrator.merk.index', [
            'merkList' => $merkList
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

}
