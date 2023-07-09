<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class LoadBarangByMerk extends Controller
{
    public function loadBarangByMerk(Request $request)
    {
        $merkId = $request->input('merk_id');
        $barangList = Barang::where('id_merk', $merkId)->pluck('nama', 'id');
    
        return response()->json($barangList);
    }
}
