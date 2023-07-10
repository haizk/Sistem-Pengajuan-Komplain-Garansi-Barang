<?php

namespace App\Http\Controllers\admin;

use App\Models\Histori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataRiwayatTindakanController extends Controller
{
    public function index($id_komplain)
    {
        $historis = Histori::where('id_komplain', $id_komplain)->get();
        return view('pages.admin.dataRiwayatTindakan.index', [
            'title' => 'Riwayat Tindakan',
            'historis' => $historis,
            'komplain' => $id_komplain
        ]);
        
    }

    public function create($id_komplain)
    {
        return view('pages.admin.dataRiwayatTindakan.create', [
            'title' => 'Tambah Riwayat Tindakan',
            'id_komplain' => $id_komplain
        ]);
    }

    public function store($id_komplain, Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_tindakan' => 'required| date',
            'tindakan' => 'required| string',
            'id_komplain' => 'required| string',
            'id_petugas' => 'required| string'
        ]);

        Histori::create($validatedData + ['id_komplain' => $id_komplain]);
        return redirect()->route('data-pengajuan-garansi.data-riwayat-pengajuan.index', $id_komplain);
    }

    public function destroy($id_komplain, Histori $histori)
    {
        Histori::destroy($histori->id);

        return redirect()->route('data-pengajuan-garansi.data-riwayat-pengajuan.index', $id_komplain)->with('success', 'Data berhasil dihapus!');
    }
}