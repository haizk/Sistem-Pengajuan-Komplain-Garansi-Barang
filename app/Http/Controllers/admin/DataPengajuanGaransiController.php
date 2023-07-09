<?php

namespace App\Http\Controllers\admin;

use App\Models\Riwayat_Pengajuan_Garansi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DataPengajuanGaransiController extends Controller
{
    public function index(Request $request){
        $complains = Riwayat_Pengajuan_Garansi::all();
        return view('pages.admin.dataPengajuanGaransi.index', compact('complains'));
    }
}
