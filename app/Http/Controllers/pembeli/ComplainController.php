<?php

namespace App\Http\Controllers\pembeli;
use App\Http\Controllers\Controller;
use App\Models\Riwayat_Pengajuan_Garansi;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function index()
    {
        $riwayat_pengajuan_garansi = Riwayat_Pengajuan_Garansi::all();
        
        return view('pembeli.index', [
            'riwayat_pengajuan_garansi'
        ]);
    }
}
