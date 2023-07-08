<?php

namespace App\Http\Controllers\pembeli;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Barang;

class StatusAjuanController extends Controller
{
    public function index(Request $request){
        $barangs = Barang::all();
        return view('pages.pembeli.status_ajuan.index', compact('barangs'));
    }
}
