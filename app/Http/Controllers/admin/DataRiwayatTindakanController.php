<?php

namespace App\Http\Controllers\admin;

use App\Models\Histori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataRiwayatTindakanController extends Controller
{
    public function index($komplain_id)
    {
        $historis = Histori::where('id_komplain', $komplain_id)->get();
        return view('pages.admin.dataRiwayatTindakan.index', [
            'title' => 'Riwayat Tindakan',
            'historis' => $historis
        ]);
        
    }

    public function create($komplain_id)
    {
        return view('pages.admin.dataRiwayatTindakan.create', [
            'title' => 'Tambah Riwayat Tindakan',
            'komplain_id' => $komplain_id
        ]);
    }

    public function store($komplain_id, Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_tindakan' => 'required| date',
            'tindakan' => 'required| string',
            'id_komplain' => 'required| string',
            'id_petugas' => 'required| string'
        ]);

        Histori::create($validatedData + ['komplain_id' => $komplain_id]);
        return redirect()->route('data-pengajuan-garansi.data-riwayat-pengajuan.index', $komplain_id);
    }

    public function destroy($komplain_id, Histori $histori)
    {
        Histori::destroy($histori->id);

        return redirect()->route('data-pengajuan-garansi.data-riwayat-pengajuan.index', $komplain_id)->with('success', 'Data berhasil dihapus!');
    }
}