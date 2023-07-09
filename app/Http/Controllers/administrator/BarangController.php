<?php

namespace App\Http\Controllers\administrator;


use App\Models\Merk;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index(Request $request){
        $barang = Barang::paginate(25);

        return view('pages.administrator.barang.index', [
            'barang' => $barang
        ]);
    }
}